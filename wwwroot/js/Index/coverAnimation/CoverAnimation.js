function CoverAnimation(THREE, GLTFLoader) {
    this.THREE = THREE;
    this.GLTFLoader = GLTFLoader;
    this.LoadManager = new THREE.LoadingManager();
    this.Scene = new THREE.Scene();
    this.Camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);//(FOV, Aspect Ratio, Near Clipping, Far Clipping ie -> Dont Render at X Distance) 
    this.Renderer = new THREE.WebGLRenderer();
    this.AmbientLight = new THREE.AmbientLight(0xebe8f0, 0.5);
    this.DirectionalLight = new THREE.DirectionalLight(0xebe8f0, 0.5);
    this.IslandModel = new Island(this);

    this.init = function() {
        this.Camera.position.set(0, 0, 53);

        //Set size will set size of canvas. Add third param and set to false to change resolution.
        //Add css canvas style to 100% for same render size but lower res.
        this.Renderer.setSize(innerWidth, innerHeight);
        this.Renderer.setClearColor(0xffffff, 0.8);

        this.Scene.add(this.AmbientLight);
        this.DirectionalLight.position.set(10, 20, 0);
        this.Scene.add(this.DirectionalLight);
    };

    this.loadAndRun = function () {
        var coverAnimationObj = this;

        this.IslandModel.loadData().then(() => {
            document.body.appendChild(coverAnimationObj.Renderer.domElement);
            runAnimationLoop(coverAnimationObj);
        }, () => {
            console.log("Crap");
        });
    }

    this.init();
}

function runAnimationLoop(CoverAnimation) {
    //Inner function is a 'closure'.
    //It remembers the instance param of current loop prior to deletion.
    requestAnimationFrame(function () { return runAnimationLoop(CoverAnimation) });
    CoverAnimation.IslandModel.Object.rotation.x += 0.01;
    CoverAnimation.IslandModel.Object.rotation.y += 0.01;
    CoverAnimation.Renderer.render(CoverAnimation.Scene, CoverAnimation.Camera);
}