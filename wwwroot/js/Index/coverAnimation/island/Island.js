class Island {
    constructor(coverAnimation) {
        this.CoverAnimation = coverAnimation;
        this.Object = null;
    }

    loadData() {
        var islandObj = this;

        return new Promise((resolve, reject) => {
            const loader = new islandObj.CoverAnimation.GLTFLoader();

            loader.load("./wwwroot/models/model.glb",
                function (model) {
                    islandObj.Object = model.scene;
                    islandObj.CoverAnimation.Scene.add(islandObj.Object);
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