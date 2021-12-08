import * as THREE from "../src/threeJs/three.module.js";
import { GLTFLoader } from '../src/threeJs/GLTFLoader.js';

const coverAnimation = new CoverAnimation(THREE, GLTFLoader);
coverAnimation.loadAndRunAsync();
var x = 1;