function Island(coverAnimation) {
    this.Object = null;

    this.loadData = function() {
        var islandObj = this;

        return loaderPromise = new Promise((resolve, reject) => {
            const loader = new coverAnimation.GLTFLoader();

            loader.load("./wwwroot/models/model.glb",
                function (model) {     
                    islandObj.Object = model.scene;
                    coverAnimation.Scene.add(islandObj.Object); 
                    resolve();
                },
                function (loading) {
                    console.log( (loading.loaded/loading.total * 100) + '% loaded' );
                },
                function (error) {
                    console.log('An error happened: ' + error);
                    reject();
                }
            );
        });
    }
}