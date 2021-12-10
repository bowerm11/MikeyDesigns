class CoverAnimation {
    constructor(THREE, GLTFLoader) {
        this.THREE = THREE;
        this.GLTFLoader = GLTFLoader;
        this.LoadManager = new THREE.LoadingManager();
        this.Renderer = new THREE.WebGLRenderer({ antialias: true });
        this.Camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000); //(FOV, Aspect Ratio, Near Clipping, Far Clipping ie -> Dont Render at X Distance) 
        this.Scene = new THREE.Scene();
        this.AmbientLight = new THREE.AmbientLight(0xebe8f0, 0.5);
        this.DirectionalLight = new THREE.DirectionalLight(0xebe8f0, 0.5);
        this.RayCaster = new THREE.Raycaster();
        this.MouseVector = new THREE.Vector2();
        this.MouseDragSensitivity = { X: 0.05, Y: 0.05 };
        this.MouseZoomSensitivity = 0.1;
        this.MouseWheelTracker = new MouseZoom(this.Renderer.domElement);
        this.MouseMoveTracker = new ClickAndDrag(this.Renderer.domElement);
        this.IslandModel = new Island(this);

        this.Camera.position.set(0, 0, 53);

        //Set size will set size of canvas. Add third param and set to false to change resolution.
        //Add css canvas style to 100% for same render size but lower res.
        this.Renderer.setSize(window.innerWidth, window.innerHeight);
        this.Renderer.setPixelRatio(1.5);
        this.Renderer.setClearColor(0xffffff, 0.8);

        this.Scene.add(this.AmbientLight);
        this.DirectionalLight.position.set(10, 20, 0);
        this.Scene.add(this.DirectionalLight);
    }

    loadAndRunAsync() {
        var coverAnimationObj = this;

        this.IslandModel.loadData().then(function () {
            document.body.appendChild(coverAnimationObj.Renderer.domElement);

            coverAnimationObj.MouseWheelTracker.OnWheelEvent = function () {
                if (coverAnimationObj.MouseWheelTracker.WheelHasZoomedIn()) {
                    coverAnimationObj.Camera.position.z -= coverAnimationObj.MouseZoomSensitivity;
                } else if (coverAnimationObj.MouseWheelTracker.WheelHasZoomedOut()) {
                    coverAnimationObj.Camera.position.z += coverAnimationObj.MouseZoomSensitivity;
                }
            };

            coverAnimationObj.MouseMoveTracker.OnClickAndDrag = function () {
                if (coverAnimationObj.MouseMoveTracker.MouseHasMovedUp()) {
                    coverAnimationObj.IslandModel.Object.rotation.x -= coverAnimationObj.MouseDragSensitivity.X;
                } else if (coverAnimationObj.MouseMoveTracker.MouseHasMovedDown()) {
                    coverAnimationObj.IslandModel.Object.rotation.x += coverAnimationObj.MouseDragSensitivity.X;
                }

                if (coverAnimationObj.MouseMoveTracker.MouseHasMovedRight()) {
                    coverAnimationObj.IslandModel.Object.rotation.y += coverAnimationObj.MouseDragSensitivity.Y;
                } else if (coverAnimationObj.MouseMoveTracker.MouseHasMovedLeft()) {
                    coverAnimationObj.IslandModel.Object.rotation.y -= coverAnimationObj.MouseDragSensitivity.Y;
                }
            };

            coverAnimationObj.Renderer.domElement.addEventListener('mousemove', function (e) {
                var rect = this.getBoundingClientRect();

                coverAnimationObj.MouseVector.x = ((e.clientX - rect.left) / coverAnimationObj.Renderer.domElement.clientWidth) * 2 - 1;
                coverAnimationObj.MouseVector.y = -((e.clientY - rect.top) / coverAnimationObj.Renderer.domElement.clientHeight) * 2 + 1;
                coverAnimationObj.RayCaster.setFromCamera(coverAnimationObj.MouseVector, coverAnimationObj.Camera);
                
                var intersects = coverAnimationObj.RayCaster.intersectObjects(coverAnimationObj.Scene.children);

                if (intersects.length > 0) {
                    alert(intersects[0]);
                }
            }, false);

            window.addEventListener('resize', function(e) {
                coverAnimationObj.Renderer.setSize(window.innerWidth, window.innerHeight);
                coverAnimationObj.Camera.aspect = window.innerWidth / window.innerHeight;
                coverAnimationObj.Camera.updateProjectionMatrix();
            });

            runAnimationLoop(coverAnimationObj);
        }).catch(function (e) {
            console.log(e.stack);
        });
    };
}

class ClickAndDrag {
    constructor(element) {
        this.Element = element;
        this.MouseIsDown = false;
        this.MouseDownStartPos = null;
        this.MouseDownEndPos = null;
        this.Delta = { X: 0, Y: 0 };
        this.DeltaPrior = { X: 0, Y: 0 };

        var classObj = this;

        this.Element.addEventListener("mousedown", function () {
            classObj.MouseIsDown = true;
        });

        this.Element.addEventListener("mouseup", function () {
            classObj.MouseIsDown = false;
            classObj.MouseDownStartPos = null;
            classObj.MouseDownEndPos = null;
        });

        this.Element.addEventListener("mousemove", function (event) {
            if (classObj.MouseIsDown) {
                if (classObj.MouseDownStartPos == null) {
                    classObj.MouseDownStartPos = { X: event.pageX, Y: event.pageY };
                }

                classObj.MouseDownEndPos = { X: event.pageX, Y: event.pageY };
                classObj.DeltaPrior = classObj.Delta;
                classObj.Delta = {
                    X: classObj.MouseDownStartPos.X - classObj.MouseDownEndPos.X,
                    Y: classObj.MouseDownStartPos.Y - classObj.MouseDownEndPos.Y
                };

                classObj.OnClickAndDrag();
            }
        });
    }

    MouseHasMovedUp() {
        if (this.Delta.Y > this.DeltaPrior.Y) {
            return true;
        }
        return false;
    };

    MouseHasMovedDown() {
        if (this.Delta.Y < this.DeltaPrior.Y) {
            return true;
        }
        return false;
    };

    MouseHasMovedRight() {
        if (this.Delta.X < this.DeltaPrior.X) {
            return true;
        }
        return false;
    };

    MouseHasMovedLeft() {
        if (this.Delta.X > this.DeltaPrior.X) {
            return true;
        }
        return false;
    };

    OnClickAndDrag() {
        throw new Error("Method OnClickAndDrag must be overwritten.");
    };
}

class MouseZoom {
    constructor(element) {
        this.Element = element;
        this.DeltaZ = 0;

        var classObj = this;

        this.Element.addEventListener("wheel", function (event) {
            event.preventDefault();

            classObj.DeltaZ = event.deltaY;

            classObj.OnWheelEvent();
        });
    }

    WheelHasZoomedIn() {
        if (this.DeltaZ > 0) {
            return true;
        }
        return false;
    };

    WheelHasZoomedOut() {
        if (this.DeltaZ < 0) {
            return true;
        }
        return false;
    };

    OnWheelEvent() {
        throw new Error("Method OnWheelEvent must be overwritten.");
    };
}

function runAnimationLoop(CoverAnimation) {
    //Inner function is a 'closure'.
    //It remembers the instance param of current loop prior to deletion.
    requestAnimationFrame(function () { return runAnimationLoop(CoverAnimation) });
    CoverAnimation.Renderer.render(CoverAnimation.Scene, CoverAnimation.Camera);
}