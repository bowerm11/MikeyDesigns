import * as THREE from "../src/threeJs/three.module.js";
import { GLTFLoader } from '../src/threeJs/GLTFLoader.js';
import { OrbitControls } from "../src/threeJs/OrbitControls.js";

$(document).ready(function() {
    const loadingContainer = document.getElementById("loading-container");
    const nav = new NavBar();
    //nav.navBackground.toggleMenuBar();
    //nav.scrollToProject('test8');

    const assets = new AssetLoader(GLTFLoader, THREE);
    assets.startLoadingAssetsAsync();
    assets.doneLoadingAssets(() => {
        const coverAnimation = new CoverAnimation(THREE, assets, OrbitControls);
        coverAnimation.run();
        deleteFadeOutElm(loadingContainer, 1);
    });
});

function deleteFadeOutElm(elm, fadeOutLenSec) {
    const defer = $.Deferred();

    elm.style.animation = "fadeOut " + fadeOutLenSec + "s forwards";

    setTimeout(function() {
        defer.resolve();
    }, fadeOutLenSec * 1000);

    defer.done(function() {
        $(elm).remove();
    });
}