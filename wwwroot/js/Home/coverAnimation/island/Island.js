class Island extends ThreeObjectSet {
    constructor(coverAnimation) {
        super(coverAnimation);
        this.Axis = new coverAnimation.THREE.AxesHelper(500);
        this.DirectionalLight = new coverAnimation.THREE.DirectionalLight(0xffffff, .8);
        this.DirectionalLight2 = new coverAnimation.THREE.DirectionalLight(0xffffff, .8);
        this.IslandScene = new coverAnimation.THREE.Scene();
        this.IslandModel = coverAnimation.Assets.IslandModel.scene;

        this.IslandScene.add(this.Axis);

        this.IslandScene.add(this.IslandModel);

        this.DirectionalLight.position.set(0, 50, 0);
        this.IslandScene.add(this.DirectionalLight);
        this.DirectionalLight2.position.set(0, -50, 0);
        this.IslandScene.add(this.DirectionalLight2);
    }

    checkMouseHoveredComponents(rayCaster) {
        var intersects = rayCaster.intersectObject(this.IslandModel);
        if (intersects.length != 0) {
            intersects[0].object.material.color.setHex(0xa83232);
        }
    }

    render() {
        this.CoverAnimation.Renderer.render(this.IslandScene, this.CoverAnimation.Camera);
    }
}