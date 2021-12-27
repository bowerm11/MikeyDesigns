import * as THREE from "../src/threeJs/three.module.js";
import { GLTFLoader } from '../src/threeJs/GLTFLoader.js';
import { OrbitControls } from "../src/threeJs/OrbitControls.js";

$(document).ready(function() {
    const nav = new NavBar();
    //nav.navBackground.toggleMenuBar();
    //nav.scrollToProject('test8');

    const assets = new AssetLoader(GLTFLoader, THREE);
    assets.startLoadingAssetsAsync();
    assets.doneLoadingAssets(() => {
        const coverAnimation = new CoverAnimation(THREE, assets, OrbitControls);
        coverAnimation.run();
    });
});