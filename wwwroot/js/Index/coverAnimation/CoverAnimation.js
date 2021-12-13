class AssetLoader {

}

class CoverAnimation {
    constructor(THREE, GLTFLoader, OrbitControls) {
        this.THREE = THREE;
        this.GLTFLoader = GLTFLoader;
        this.Renderer = new THREE.WebGLRenderer({ antialias: true });
        this.Camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 1, 1000); //(FOV, Aspect Ratio, Near Clipping, Far Clipping ie -> Dont Render at X Distance) 
        this.CameraOrbitControl = new OrbitControls(this.Camera, this.Renderer.domElement);
        this.RayCaster = new THREE.Raycaster();
        this.MousePositionVector = new THREE.Vector2();
        this.MouseSensitivity = new THREE.Vector3(0.02, 0.02, 0.1);
        this.MouseWheelTracker = new MouseZoom(this.Renderer.domElement);
        this.MouseMoveTracker = new ClickAndDrag(this.Renderer.domElement);
        this.StarBackground = new StarBackground(this);
        this.IslandModel = new Island(this);

        this.Camera.position.set(0, 0, 50);
        this.CameraOrbitControl.target.set(0, 0, 0);
        this.CameraOrbitControl.enablePan= false;

        //Set size will set size of canvas. Add third param and set to false to change resolution.
        //Add css canvas style to 100% for same render size but lower res.
        //this.Renderer.setClearColor(0xffffff, 0.8);
        this.Renderer.setSize(window.innerWidth, window.innerHeight);
        this.Renderer.setPixelRatio(1.5);
        this.Renderer.autoClear = false;
    }

    loadAndRunAsync() {
        var coverAnimationObj = this;

        this.IslandModel.loadDataAsync().then(function () {
            document.body.appendChild(coverAnimationObj.Renderer.domElement);
            coverAnimationObj.setControlListeners();
            runAnimationLoop(coverAnimationObj);
        }).catch(function (e) {
            console.log(e.stack);
        });
    };

    setControlListeners() {
        var coverAnimationObj = this;

        this.MouseWheelTracker.OnWheelEvent = function () {
            if (coverAnimationObj.MouseWheelTracker.WheelHasZoomedIn()) {
                coverAnimationObj.Camera.position.z -= coverAnimationObj.MouseSensitivity.z;
            } else if (coverAnimationObj.MouseWheelTracker.WheelHasZoomedOut()) {
                coverAnimationObj.Camera.position.z += coverAnimationObj.MouseSensitivity.z;
            }
        };

        this.MouseMoveTracker.OnClickAndDrag = function () {
            if (coverAnimationObj.MouseMoveTracker.MouseHasMovedUp()) {
                coverAnimationObj.Camera.position.y += coverAnimationObj.MouseSensitivity.y;
                
            } else if (coverAnimationObj.MouseMoveTracker.MouseHasMovedDown()) {
                coverAnimationObj.Camera.position.y -= coverAnimationObj.MouseSensitivity.y;
            }

            if (coverAnimationObj.MouseMoveTracker.MouseHasMovedRight()) {
                coverAnimationObj.Camera.position.x += coverAnimationObj.MouseSensitivity.x;
              } else if (coverAnimationObj.MouseMoveTracker.MouseHasMovedLeft()) {
                coverAnimationObj.Camera.position.x -= coverAnimationObj.MouseSensitivity.x
            }
        };

        this.Renderer.domElement.addEventListener('mousemove', function (e) {
            var rect = this.getBoundingClientRect();
            coverAnimationObj.MousePositionVector.x = ((e.clientX - rect.left) / coverAnimationObj.Renderer.domElement.clientWidth) * 2 - 1;
            coverAnimationObj.MousePositionVector.y = -((e.clientY - rect.top) / coverAnimationObj.Renderer.domElement.clientHeight) * 2 + 1;
            coverAnimationObj.RayCaster.setFromCamera(coverAnimationObj.MousePositionVector, coverAnimationObj.Camera);
            coverAnimationObj.IslandModel.checkMouseHoveredComponents(coverAnimationObj.RayCaster);
        }, false);

        window.addEventListener('resize', function(e) {
            coverAnimationObj.Renderer.setSize(window.innerWidth, window.innerHeight);
            coverAnimationObj.Camera.aspect = window.innerWidth / window.innerHeight;
            coverAnimationObj.Camera.updateProjectionMatrix();
        });
    }
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
    CoverAnimation.CameraOrbitControl.update();
    CoverAnimation.Renderer.clear(true, true, true);
    CoverAnimation.IslandModel.render();
    CoverAnimation.StarBackground.render();

    //Inner function is a 'closure'.
    //It remembers the instance param of current loop prior to deletion.
    requestAnimationFrame(function () { return runAnimationLoop(CoverAnimation) });
}