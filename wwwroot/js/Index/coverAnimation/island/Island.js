class Island extends ThreeObjectSet {
    constructor(coverAnimation) {
        super(coverAnimation);
        this.AmbientLight = new coverAnimation.THREE.AmbientLight(0xebe8f0, 0.5);
        this.DirectionalLight = new coverAnimation.THREE.DirectionalLight(0xebe8f0, 0.5);
        this.IslandScene = new coverAnimation.THREE.Scene();
        this.IslandModel = null;

        this.IslandScene.add(this.AmbientLight);
        this.DirectionalLight.position.set(10, 20, 0);
        this.IslandScene.add(this.DirectionalLight);
    }

    loadDataAsync() {
        var islandObj = this;

        return new Promise((resolve, reject) => {
            const loader = new islandObj.CoverAnimation.GLTFLoader();

            loader.load("./wwwroot/models/model.glb",
                function (model) {
                    islandObj.IslandModel = model.scene;
                    islandObj.IslandModel.position.set(0, 0, 0);
                    islandObj.IslandScene.add(islandObj.IslandModel);
                    islandObj.setAllScenes();
                    resolve();
                },
                function (loading) {
                    console.log((loading.loaded / loading.total * 100) + '% loaded');
                },
                function (error) {
                    console.log('An error happened: ' + error);
                    reject();
                }
            );
        });
    };

    checkMouseHoveredComponents(rayCaster) {
        var intersects = rayCaster.intersectObject(this.IslandModel);
        if (intersects.length != 0) {
            intersects[0].object.material.color.setHex( 0xa83232 );
        }
    }

    render() {
        this.CoverAnimation.Renderer.render(this.IslandScene, this.CoverAnimation.Camera);
    }
}