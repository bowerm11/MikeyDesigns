class Island extends ThreeObjectSet {
    constructor(coverAnimation) {
        super(coverAnimation);
        this.IslandModel = null;
    }

    loadDataAsync() {
        var islandObj = this;

        return new Promise((resolve, reject) => {
            const loader = new islandObj.CoverAnimation.GLTFLoader();

            loader.load("./wwwroot/models/model.glb",
                function (model) {
                    islandObj.IslandModel = model.scene;
                    islandObj.IslandModel.position.set(0, 0, 0);
                    islandObj.CoverAnimation.Scene.add(islandObj.IslandModel);
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
}