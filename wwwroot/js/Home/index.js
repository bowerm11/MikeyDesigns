import * as THREE from "../src/threeJs/three.module.js";
import { GLTFLoader } from '../src/threeJs/GLTFLoader.js';
import { OrbitControls } from "../src/threeJs/OrbitControls.js";

$(document).ready(function() {
    const homeContainer = document.getElementById("home-container");
    const loadingContainer = document.getElementById("loading-container");
    const nav = new NavBar();
    const assets = new AssetLoader(GLTFLoader, THREE);

    homeContainer.style.height = window.innerHeight + "px";

    assets.startLoadingAssetsAsync();
    assets.doneLoadingAssets(() => {
        const coverAnimation = new CoverAnimation(THREE, assets, OrbitControls, homeContainer);
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