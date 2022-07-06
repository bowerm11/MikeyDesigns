class AssetLoader {
    constructor(GLTFLoader, THREE) {
        this.GLTFLoader = new GLTFLoader();
        this.TextureLoader = new THREE.TextureLoader();
        this.Promises = [];

        this.KeyCoinModel = null;
    }

    startLoadingAssetsAsync(whenDone) {
        this.#loadGLTFAssetAsync("/wwwroot/models/keycoin.glb", (model) => this.KeyCoinModel = model);

        Promise.all(this.Promises)
            .then(whenDone)
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

class HomeAnimation {
    constructor(THREE, Assets, OrbitControls, homeConatiner) {
        this.THREE = THREE;
        this.Assets = Assets;
        this.homeConatiner = homeConatiner;
        this.canvasContainer = document.getElementById("canvas-container");
        this.handHelperElm = document.getElementById("hand-helper");
        this.Renderer = new THREE.WebGLRenderer({ antialias: true });
        this.Camera = new THREE.PerspectiveCamera(75, $(homeConatiner).width() / $(homeConatiner).height(), 1, 500); //(FOV, Aspect Ratio, Near Clipping, Far Clipping ie -> Dont Render at X Distance) 
        this.CameraOrbitControl = new OrbitControls(this.Camera, this.Renderer.domElement);
        this.MousePositionVector = new THREE.Vector2();
        this.StarBackground = new StarBackground(this);
        this.KeyCoinModel = new KeyCoin(this);

        this.Camera.position.set(0, 0, 5);
        this.CameraOrbitControl.target.set(0, 0, 0);
        this.CameraOrbitControl.enableDamping = true;
        this.CameraOrbitControl.dampingFactor = 0.25;
        this.CameraOrbitControl.autoRotate = true;
        this.CameraOrbitControl.autoRotateSpeed = 1;

        //Set size will set size of canvas. Add third param and set to false to change resolution.
        //Add css canvas style to 100% for same render size but lower res
        this.Renderer.setClearColor(0xffffff, 0.15);
        this.Renderer.setSize($(homeConatiner).width(), $(homeConatiner).height());
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
        }, false);

        this.Renderer.domElement.addEventListener('click', function() {
            coverAnimationObj.handHelperElm.style.animation = "wave-hand-fade-out 1s forwards";
            setTimeout(function() {
                coverAnimationObj.handHelperElm.remove();
            }, 1000);
        });

        window.addEventListener('resize', function(e) {
            coverAnimationObj.Renderer.setSize($(coverAnimationObj.homeConatiner).width(), $(coverAnimationObj.homeConatiner).height());
            coverAnimationObj.Camera.aspect = $(window).width() / $(window).height();
            coverAnimationObj.Camera.updateProjectionMatrix();
        });
    }
}

class KeyCoin {
    constructor(coverAnimation) {
        this.CoverAnimation = coverAnimation;
        this.Axis = new coverAnimation.THREE.AxesHelper(500); // For debugging
        this.Scene = new coverAnimation.THREE.Scene();
        this.CoinKeyModelModel = coverAnimation.Assets.KeyCoinModel.scene;

        this.#addModelToScene();
        this.#setLighting();
    }

    render() {
        this.CoverAnimation.Renderer.render(this.Scene, this.CoverAnimation.Camera);
    }

    #addModelToScene() {
        //this.Scene.add(this.Axis);
        this.Scene.add(this.CoinKeyModelModel);
        this.CoinKeyModelModel.rotation.x = -Math.PI / 2;
        this.CoinKeyModelModel.rotation.y = (-Math.PI / 2) * 2;
    }

    #setLighting() {
        var light = new this.CoverAnimation.THREE.AmbientLight(0xff9e59, .8);
        this.Scene.add(light);

        var directionalLight = new this.CoverAnimation.THREE.DirectionalLight(0xfff6e8, .8);
        directionalLight.position.set(0, 15, 0);
        this.Scene.add(directionalLight);
    }
}

class StarBackground {
    constructor(coverAnimation) {
        this.CoverAnimation = coverAnimation;
        this.Stars = new Stars(this.CoverAnimation);
    }

    render() {
        this.Stars.render(this.CoverAnimation.Renderer, this.CoverAnimation.Camera);
    }

    static generateRandomCoord(min, max) {
        return Math.random() * (max - min) + min;
    }
}

class Stars {
    constructor(coverAnimation) {
        this.THREE = coverAnimation.THREE;
        this.StarScene = new this.THREE.Scene();
        this.StarGeometry = new this.THREE.CircleGeometry(.12, 16);
        this.StarColors = [0xffffff, 0x00a2ff, 0xff8800];
        
        //white, yellow, blue
        this.StarMeshes = this.#addMeshes(this.StarColors);
        this.#initStaticStarGeometry(200);
    }

    render(renderer, camera) {
        renderer.render(this.StarScene, camera);
    }

    #addMeshes(colors) {
        const meshes = []
        for(var i = 0; i < colors.length; i++) {
            const colorChoice = colors[i];
            const material = new this.THREE.MeshBasicMaterial({ color: colorChoice });
            material.side = this.THREE.DoubleSide;
            const mesh = new this.THREE.Mesh(this.StarGeometry, material);
            meshes.push(mesh);
        }

        return meshes;
    }

    #initStaticStarGeometry(starCount) {
        for(var i=0;i<starCount;i++) {
            var x = StarBackground.generateRandomCoord(-80, 80),
                y = StarBackground.generateRandomCoord(-100, 80),
                z = StarBackground.generateRandomCoord(-80, 80),
                circleClone = this.#returnRanomMesh();

            circleClone.position.set(x, y, z);
            this.StarScene.add(circleClone);
        }
    }

    #returnRanomMesh() {
        return this.StarMeshes[Math.floor(Math.random()*this.StarMeshes.length)].clone();
    }
}

function runAnimationLoop(CoverAnimation) {
    requestAnimationFrame(function () { return runAnimationLoop(CoverAnimation) });

    CoverAnimation.CameraOrbitControl.update();
    CoverAnimation.Renderer.clear(true, true, true);
    CoverAnimation.KeyCoinModel.render();
    CoverAnimation.StarBackground.render();
}