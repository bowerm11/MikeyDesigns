class AssetLoader {
    constructor(GLTFLoader, THREE) {
        this.GLTFLoader = new GLTFLoader();
        this.TextureLoader = new THREE.TextureLoader();
        this.Promises = [];

        this.IslandModel = null;
        this.SmokeTexture = null;
    }

    startLoadingAssetsAsync() {
        this.#loadGLTFAssetAsync("/wwwroot/models/island.glb", (model) => this.IslandModel = model);
        this.#loadTextureAsync("/wwwroot/images/Home/smoke.png", (model) => this.SmokeTexture = model);
    }

    doneLoadingAssets(callback) {
        Promise.all(this.Promises)
            .then(callback)
            .catch((e) => {
                console.log(e)
            });
    }

    #loadGLTFAssetAsync(url, callback) {        
        var loaderObj = this;   

        var promise = new Promise((resolve, reject) => {
            loaderObj.GLTFLoader.load(url,
                function (model) {
                    callback(model);
                    resolve();
                },
                function (loading) {
                    console.log(`Loading GLTF ${url}. Progress ${(loading.loaded / loading.total) * 100}%`);
                },
                function (error) {
                    alert(`An error happened with loading GLTF asset ${url}: ${error}`);
                    reject();
                }
            );
        });

        this.Promises.push(promise);
    }

    #loadTextureAsync(url, callback) {
        var loaderObj = this;   

        var promise = new Promise((resolve, reject) => {
            loaderObj.TextureLoader.load(url,
                function (model) {
                    callback(model);
                    resolve();
                },
                function (loading) {
                    console.log(`Loading Texture ${url}. Progress ${(loading.loaded / loading.total) * 100}%`);
                },
                function (error) {
                    alert(`An error happened with loading texture asset ${url}: ${error}`);
                    reject();
                }
            );
        });

        this.Promises.push(promise);
    }
}

class CoverAnimation {
    constructor(THREE, Assets, OrbitControls) {
        this.THREE = THREE;
        this.Assets = Assets;
        this.canvasContainer = document.getElementById("canvas-container");
        this.handHelperElm = document.getElementById("hand-helper");
        this.Renderer = new THREE.WebGLRenderer({ antialias: true });
        this.Camera = new THREE.PerspectiveCamera(75, $(window).width() / $(window).height(), 1, 500); //(FOV, Aspect Ratio, Near Clipping, Far Clipping ie -> Dont Render at X Distance) 
        this.CameraOrbitControl = new OrbitControls(this.Camera, this.Renderer.domElement);
        this.RayCaster = new THREE.Raycaster();
        this.MousePositionVector = new THREE.Vector2();
        this.StarBackground = new StarBackground(this);
        this.IslandModel = new Island(this);

        this.Camera.position.set(0, 0, 50);
        this.CameraOrbitControl.target.set(0, 0, 0);
        this.CameraOrbitControl.enableDamping = true;
        this.CameraOrbitControl.dampingFactor = 0.25;

        //Set size will set size of canvas. Add third param and set to false to change resolution.
        //Add css canvas style to 100% for same render size but lower res.
        this.Renderer.setClearColor(0xffffff, 0.15);
        this.Renderer.setSize($(window).width(), $(window).height());
        this.Renderer.setPixelRatio(1.5);
        this.Renderer.autoClear = false;
    }

    run() {
        this.canvasContainer.appendChild(this.Renderer.domElement);
        this.setListeners();
        runAnimationLoop(this);
    };

    setListeners() {
        var coverAnimationObj = this;

        this.Renderer.domElement.addEventListener('mousemove', function (e) {
            var rect = this.getBoundingClientRect();
            coverAnimationObj.MousePositionVector.x = ((e.clientX - rect.left) / coverAnimationObj.Renderer.domElement.clientWidth) * 2 - 1;
            coverAnimationObj.MousePositionVector.y = -((e.clientY - rect.top) / coverAnimationObj.Renderer.domElement.clientHeight) * 2 + 1;
            coverAnimationObj.RayCaster.setFromCamera(coverAnimationObj.MousePositionVector, coverAnimationObj.Camera);
            coverAnimationObj.IslandModel.checkMouseHoveredComponents(coverAnimationObj.RayCaster);
        }, false);

        this.Renderer.domElement.addEventListener('click', function() {
            coverAnimationObj.handHelperElm.style.animation = "fadeOut 1s forwards";
            setTimeout(function() {
                coverAnimationObj.handHelperElm.remove();
            }, 1000);
        });

        window.addEventListener('resize', function(e) {
            coverAnimationObj.Renderer.setSize($(window).width(), $(window).height());
            coverAnimationObj.Camera.aspect = $(window).width() / $(window).height();
            coverAnimationObj.Camera.updateProjectionMatrix();
        });
    }
}

function runAnimationLoop(CoverAnimation) {
    requestAnimationFrame(function () { return runAnimationLoop(CoverAnimation) });

    CoverAnimation.CameraOrbitControl.update();
    CoverAnimation.Renderer.clear(true, true, true);
    CoverAnimation.IslandModel.render();
    CoverAnimation.StarBackground.render();
}

class ThreeObjectSet {
    constructor(coverAnimation) {
        this.CoverAnimation = coverAnimation;
        this.Scenes = [];
    }

    rotateAllBy(x, y, z) {
        for (var i = 0; i < this.Scenes.length; i++) {
            var scene = this.Scenes[i];
            ThreeObjectSet.rotateSceneBy(scene, x, y, z);
        }
    }

    setAllRotationAnimation(updateSpeed, x, y, z) {
        var obj = this;
        setInterval(function() {
            obj.rotateAllBy(x, y, z);
        }, updateSpeed);
    }

    setAllScenes() {
        var keys = Object.keys(this);
        var scenes = [];

        for (var i = 0; i < keys.length; i++) {
            var val = this[keys[i]];
            if(val.name == this.CoverAnimation.THREE.Scene.name) {
                scenes.push(val);
            }
        }

        this.Scenes = scenes;
    }

    static rotateSceneBy(scene, x, y, z) {
        scene.rotation.x += x;
        scene.rotation.y += y;
        scene.rotation.z += z;
    }
}