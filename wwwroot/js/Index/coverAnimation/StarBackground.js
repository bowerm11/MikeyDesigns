class StarBackground {
    constructor(coverAnimation) {
        this.CoverAnimation = coverAnimation;
        this.Stars = new Stars(this.CoverAnimation.THREE);
        this.Nebula = new Nebula(this.CoverAnimation.THREE);
    }

    render() {
        this.CoverAnimation.Renderer.render(this.Stars.StarScene, this.CoverAnimation.Camera);
        this.CoverAnimation.Renderer.render(this.Nebula.NebulaScene, this.CoverAnimation.Camera);
    }

    static generateRandomCoord(min, max) {
        return Math.random() * (max - min) + min;
    }
}

class Stars {
    constructor(THREE) {
        this.THREE = THREE;
        this.StarScene = new this.THREE.Scene();
        this.StarGeometry = new this.THREE.CircleGeometry(.12, 16);
        this.StarColors = [0xffffff, 0x00a2ff, 0xff8800];
        
        //white, yellow, blue
        this.StarMeshes = this.addMeshes(this.StarColors);
        this.initStarGeometry(200);
    }

    addMeshes(colors) {
        const meshes = []
        for(var i = 0; i < colors.length; i++) {
            const colorChoice = colors[i];
            const material = new this.THREE.MeshBasicMaterial({ color: colorChoice });
            const mesh = new this.THREE.Mesh(this.StarGeometry, material);
            meshes.push(mesh);
        }

        return meshes;
    }

    initStarGeometry(starCount) {
        for(var i=0;i<starCount;i++) {
            var x = StarBackground.generateRandomCoord(-80, 80),
                y = StarBackground.generateRandomCoord(-100, 80),
                z = StarBackground.generateRandomCoord(-80, 80),
                circleClone = this.returnRanomMesh();

            circleClone.position.set(x, y, z);
            this.StarScene.add(circleClone);
        }
    }

    returnRanomMesh() {
        return this.StarMeshes[Math.floor(Math.random()*this.StarMeshes.length)].clone();
    }
}

class Nebula {
    constructor(THREE) {
        this.THREE = THREE;
        this.NebulaScene = new this.THREE.Scene();

        this.RedLight = new this.THREE.PointLight(0xd8547e,70,500,1.7);
        this.RedLight.position.set(-150,0,0);
        this.NebulaScene.add(this.RedLight);

        this.BlueLight = new this.THREE.PointLight(0x3677ac,70,500,1.7);
        this.BlueLight.position.set(150,0,0);
        this.NebulaScene.add(this.BlueLight);

        var nebulaObj = this;
        this.TextureLoad = new this.THREE.TextureLoader();
        this.TextureLoad.load("./wwwroot/images/smoke.png", function(texture){
          var cloudGeo = new nebulaObj.THREE.PlaneBufferGeometry(500,500);
          var cloudMaterial = new nebulaObj.THREE.MeshLambertMaterial({
            map:texture,
            transparent: true
          });

          for(let p=0; p<1; p++) {
            let cloud = new nebulaObj.THREE.Mesh(cloudGeo, cloudMaterial);
            cloud.position.set(
              0,
              60,
              0
            );
            cloud.rotation.x = 1.57;
            cloud.material.opacity = 0.55;
            cloud.material.depthWrite = false;
            nebulaObj.NebulaScene.add(cloud);
          }
        });
    }
}