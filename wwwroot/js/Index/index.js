import * as THREE from "../src/threeJs/three.module.js";
import { GLTFLoader } from '../src/threeJs/GLTFLoader.js';
import { OrbitControls } from "../src/threeJs/OrbitControls.js";

const coverAnimation = new CoverAnimation(THREE, GLTFLoader, OrbitControls);
coverAnimation.loadAndRunAsync();
var x = 1;