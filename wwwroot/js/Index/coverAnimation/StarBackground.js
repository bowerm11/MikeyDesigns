class StarBackground {
    constructor(coverAnimation) {
        this.CoverAnimation = coverAnimation;
        this.Stars = new Stars(this.CoverAnimation);
        this.Nebula = new Nebula(this.CoverAnimation);
    }

    render() {
        this.Stars.render(this.CoverAnimation.Renderer, this.CoverAnimation.Camera);
        this.CoverAnimation.Renderer.render(this.Nebula.NebulaScene, this.CoverAnimation.Camera);
    }

    static generateRandomCoord(min, max) {
        return Math.random() * (max - min) + min;
    }
}

class Stars {
    constructor(coverAnimation) {
        this.THREE = coverAnimation.THREE;
        this.StarScene = new this.THREE.Scene();
        this.StarGeometry = new this.THREE.CircleGeometry(.12, 16);
        this.StarColors = [0xffffff, 0x00a2ff, 0xff8800];
        
        //white, yellow, blue
        this.StarMeshes = this.#addMeshes(this.StarColors);
        this.MovingStars = this.#initMovingStarGeometry(100);
        this.#initStaticStarGeometry(100);
    }

    render(renderer, camera) {
        this.#moveStars();
        renderer.render(this.StarScene, camera);
    }

    #addMeshes(colors) {
        const meshes = []
        for(var i = 0; i < colors.length; i++) {
            const colorChoice = colors[i];
            const material = new this.THREE.MeshBasicMaterial({ color: colorChoice });
            material.side = this.THREE.DoubleSide;
            const mesh = new this.THREE.Mesh(this.StarGeometry, material);
            meshes.push(mesh);
        }

        return meshes;
    }

    #initStaticStarGeometry(starCount) {
        for(var i=0;i<starCount;i++) {
            var x = StarBackground.generateRandomCoord(-80, 80),
                y = StarBackground.generateRandomCoord(-100, 80),
                z = StarBackground.generateRandomCoord(-80, 80),
                circleClone = this.#returnRanomMesh();

            circleClone.position.set(x, y, z);
            this.StarScene.add(circleClone);
        }
    }

    #initMovingStarGeometry(starCount) {
        var stars = [];

        for(var i=0;i<starCount;i++) {
            var x = StarBackground.generateRandomCoord(-80, 80),
                y = StarBackground.generateRandomCoord(-100, 80),
                z = StarBackground.generateRandomCoord(-80, 80),
                circleClone = this.#returnRanomMesh();

            circleClone.position.set(x, y, z);
            this.StarScene.add(circleClone);
            stars.push(circleClone);
        } 

        return stars;
    }

    #moveStars() {
        for(var i=0;i<this.MovingStars.length;i++) {
            var star = this.MovingStars[i];
            
            star.position.x += StarBackground.generateRandomCoord(-0.01, 0.01);
            star.position.y += StarBackground.generateRandomCoord(-0.01, 0.01);
            star.position.z += StarBackground.generateRandomCoord(-0.01, 0.01);
        }
    }

    #returnRanomMesh() {
        return this.StarMeshes[Math.floor(Math.random()*this.StarMeshes.length)].clone();
    }
}

class Nebula {
    constructor(coverAnimation) {
        this.THREE = coverAnimation.THREE;
        this.SmokeTexture = coverAnimation.Assets.SmokeTexture;
        this.NebulaScene = new this.THREE.Scene();

        this.CloudGeo = new this.THREE.PlaneBufferGeometry(15, 15);
        this.CloudMaterial = new this.THREE.MeshLambertMaterial({map: this.SmokeTexture, transparent: true});
        this.CloudMaterial.side = this.THREE.DoubleSide;

        this.#addBlueNebulas(9);
        this.#addRedNebulas(9);
    }

    #addBlueNebulas(nebulaNum) {
        for(var i = 0; i < nebulaNum; i++) {
            var cloudMesh = new this.THREE.Mesh(this.CloudGeo, this.CloudMaterial);
            var blueLight = new this.THREE.PointLight(0x3677ac, 165, 11, 1.7);
        
            blueLight.position.set(
                StarBackground.generateRandomCoord(-90, 90),
                StarBackground.generateRandomCoord(-90, 90),
                StarBackground.generateRandomCoord(-90, 90)
            );
            cloudMesh.position.set(blueLight.position.x, blueLight.position.y + 5, blueLight.position.z);
            cloudMesh.rotation.x = StarBackground.generateRandomCoord(0, 1.57);
            cloudMesh.rotation.y = StarBackground.generateRandomCoord(0, 1.57);
            cloudMesh.rotation.z = StarBackground.generateRandomCoord(0, 1.57);
            cloudMesh.material.opacity = 0.55;
            cloudMesh.material.depthWrite = false;

            this.NebulaScene.add(blueLight);
            this.NebulaScene.add(cloudMesh);
        }      
    }

    #addRedNebulas(nebulaNum) {
        for(var i = 0; i < nebulaNum; i++) {
            var cloudMesh = new this.THREE.Mesh(this.CloudGeo, this.CloudMaterial);
            var redLight = new this.THREE.PointLight(0xd8547e, 120, 11, 1.7);
        
            redLight.position.set(
                StarBackground.generateRandomCoord(-90, 90),
                StarBackground.generateRandomCoord(-90, 90),
                StarBackground.generateRandomCoord(-90, 90)
            );
            cloudMesh.position.set(redLight.position.x, redLight.position.y + 5, redLight.position.z);
            cloudMesh.rotation.x = StarBackground.generateRandomCoord(0, 1.57);
            cloudMesh.rotation.y = StarBackground.generateRandomCoord(0, 1.57);
            cloudMesh.rotation.z = StarBackground.generateRandomCoord(0, 1.57);
            cloudMesh.material.opacity = 0.55;
            cloudMesh.material.depthWrite = false;

            this.NebulaScene.add(redLight);
            this.NebulaScene.add(cloudMesh);
        }      
    }
}