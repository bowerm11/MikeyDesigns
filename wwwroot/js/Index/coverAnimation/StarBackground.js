class StarBackground {
    constructor(coverAnimation) {
        this.CoverAnimation = coverAnimation;
        this.StarScene = new coverAnimation.THREE.Scene();
        this.StarGeometry = new this.CoverAnimation.THREE.CircleGeometry(.1, 20);

        //white, yellow, blue
        this.StarMeshes = this.addMeshes(0xffffff, 0x00a2ff, 0xff8800);
        this.initGeometry(200);
    }

    addMeshes(...colors) {
        const meshes = []
        for(var i = 0; i < colors.length; i++) {
            const colorChoice = colors[i];
            const material = new this.CoverAnimation.THREE.MeshBasicMaterial({ color: colorChoice });
            const mesh = new this.CoverAnimation.THREE.Mesh(this.StarGeometry, material);
            meshes.push(mesh);
        }

        return meshes;
    }

    initGeometry(starCount) {
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

    static generateRandomCoord(min, max) {
        return Math.random() * (max - min) + min;
    }
}