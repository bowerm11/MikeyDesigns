function NavBar() {
    this.hamburgerElm = document.getElementById("hamburgerClickable");
    this.movingHamburgerbtn = new AttractableBtn(this.hamburgerElm);

    this.navAnimationIsRunning = false;
    this.navAnimationSpeedSec = 0.7;
    this.navAnimationSpeedMs = this.navAnimationSpeedSec * 1000;

    this.navScreenElm = document.getElementById("nav-screen");
    this.navLeft = document.getElementById("nav-screen-top");
    this.navRight = document.getElementById("nav-screen-bottom");

    this.init = function() {
        var navObj = this;
        this.movingHamburgerbtn.onActivation = function () {
            navObj.hamburgerElm.style.background = "#818181";
            navObj.hamburgerElm.style.animation = ".3s scaleUp ease-out forwards";
        }
        
        this.movingHamburgerbtn.onDeactivation = function () {
            navObj.hamburgerElm.style.background = "none";
            navObj.hamburgerElm.style.animation = ".3s scaleDown ease-out forwards";
        }
        
        this.hamburgerElm.onclick = function () {
            if (navObj.navScreenElm.hidden) {
                navObj.openMenuAsync();
            } else {
                navObj.closeMenuAsync();
            }
        }

        this.openMenuAsync = function(whenDone) {
            if (this.navAnimationIsRunning) {
                return;
            }

            const slidePromise = $.Deferred();
            const obj = this;

            this.navAnimationIsRunning = true;
            this.navScreenElm.hidden = false;
            this.navLeft.style.animation = this.navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) 0s 1 normal forwards running slideDown";
            this.navRight.style.animation = this.navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) 0s 1 normal forwards running slideUp";

            setTimeout(function() {
                slidePromise.resolve();
            }, this.navAnimationSpeedMs);

            slidePromise.done(function() {
                obj.navAnimationIsRunning = false;
                if (typeof whenDone === 'function' && whenDone()) {
                    whenDone();
                }
            });
        }

        this.closeMenuAsync = function(whenDone) {
            if (this.navAnimationIsRunning) {
                return;
            }

            const slidePromise = $.Deferred();
            const obj = this;

            this.navAnimationIsRunning = true;
            this.navLeft.style.animation = this.navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) 0s 1 normal forwards running slideDownUndo";
            this.navRight.style.animation = this.navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) 0s 1 normal forwards running slideUpUndo";
            
            setTimeout(function() {
                slidePromise.resolve();
            }, this.navAnimationSpeedMs);

            slidePromise.done(function() {
                obj.navScreenElm.hidden = true;
                obj.navAnimationIsRunning = false;
                if (typeof whenDone === 'function' && whenDone()) {
                    whenDone();
                }  
            });
        }


    }

    this.init();
}

$(document).ready(function() {
    const nav = new NavBar();
    //nav.openMenuAsync();
});
