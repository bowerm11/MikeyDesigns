class Island extends ThreeObjectSet {
    constructor(coverAnimation) {
        super(coverAnimation);
        this.AmbientLight = new coverAnimation.THREE.AmbientLight(0xebe8f0, 0.5);
        this.DirectionalLight = new coverAnimation.THREE.DirectionalLight(0xebe8f0, 0.5);
        this.IslandScene = new coverAnimation.THREE.Scene();
        this.IslandModel = coverAnimation.Assets.IslandModel.scene;

        this.IslandScene.add(this.IslandModel);
        this.IslandScene.add(this.AmbientLight);
        this.DirectionalLight.position.set(10, 20, 0);
        this.IslandScene.add(this.DirectionalLight);
    }

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