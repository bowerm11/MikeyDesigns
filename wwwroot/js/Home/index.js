import * as THREE from "../src/threeJs/three.module.js";
import { GLTFLoader } from '../src/threeJs/GLTFLoader.js';
import { OrbitControls } from "../src/threeJs/OrbitControls.js";

$(document).ready(function() {
    const homeContainer = document.getElementById("home-container");
    const nav = new NavBar();
    const assets = new AssetLoader(GLTFLoader, THREE);
    
    assets.startLoadingAssetsAsync();
    assets.doneLoadingAssets(() => {
        const coverAnimation = new CoverAnimation(THREE, assets, OrbitControls, homeContainer);
        coverAnimation.run();
        nav.loadingScreen.doneLoading();
    });
});