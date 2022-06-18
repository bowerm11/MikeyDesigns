class Island {
    constructor(coverAnimation) {
        this.CoverAnimation = coverAnimation;
        this.Axis = new coverAnimation.THREE.AxesHelper(500); // For debugging
        this.IslandScene = new coverAnimation.THREE.Scene();
        this.IslandModel = coverAnimation.Assets.IslandModel.scene;

        this.#addIslandToScene();
        this.#setLighting();
        this.#setPineTrees();
    }

    checkMouseHoveredComponents(rayCaster) {
        var intersects = rayCaster.intersectObject(this.IslandModel);
        if (intersects.length != 0) {
            //intersects[0].object.material.color.setHex(0xa83232);
        }
    }

    render() {
        this.CoverAnimation.Renderer.render(this.IslandScene, this.CoverAnimation.Camera);
    }

    #addIslandToScene() {
        this.IslandScene.add(this.Axis);
        this.IslandScene.add(this.IslandModel);
    }

    #setLighting() {
        var light = new this.CoverAnimation.THREE.AmbientLight(0xffffff, .8);
        this.IslandScene.add(light);

        var directionalLight = new this.CoverAnimation.THREE.DirectionalLight(0xfff6e8, 1.4);
        directionalLight.position.set(0, 15, 0);
        this.IslandScene.add(directionalLight);
    }

    #setPineTrees() {
        new PineTree(this, 2, -.17, -3, .1);
        new PineTree(this, 3, -.17, 1, .1);
    }
}

class PineTree {
    constructor(islandObject, xpos, ypos, zpos, scale) {
        this.pinetreeObj = islandObject.CoverAnimation.Assets.PinetreeModel.scene.clone();

        islandObject.IslandScene.add(this.pinetreeObj);
        this.pinetreeObj.position.set(xpos, ypos, zpos);
        this.pinetreeObj.scale.set(scale, scale, scale);
    }
}