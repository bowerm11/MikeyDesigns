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