function NavBar() {
    this.hamburgerElm = document.getElementById("hamburgerClickable");
    this.movingHamburgerbtn = new AttractableBtn(this.hamburgerElm);
    this.navBackground = new NavbarSquares();

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
            navObj.navBackground.toggleMenuBar();
        }  
    }

    this.init();
}

function NavbarSquares() {
    this.navAnimationIsRunning = false;
    this.navAnimationSpeedSec = 0.5;
    this.navAnimationSpeedMs = this.navAnimationSpeedSec * 1000;

    this.navScreenElm = document.getElementById("nav-screen");
    this.rightSquare = new NavbarRightSquare();
    this.bottomLeftSquare= new NavbarBottomLeftSquare();
    this.topLeftSquare = new NavbarTopLeftSquare();

    this.init = function() {
        
    }

    this.toggleMenuBar = function() {
        var obj = this;
        if (this.navScreenElm.hidden) {
            this.openMenuAsync(function() {
                obj.showSquareInfoAsync();
            });
        } else {
            this.closeInfoAsync(function () {
                obj.closeMenuAsync();
            });
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
        this.rightSquare.openSquareAsync(this.navAnimationSpeedSec, 0);
        this.topLeftSquare.openSquareAsync(this.navAnimationSpeedSec, 0.2);
        this.bottomLeftSquare.openSquareAsync(this.navAnimationSpeedSec, 0.4);

        setTimeout(function() {
            slidePromise.resolve();
        }, this.navAnimationSpeedMs + 400);

        slidePromise.done(function() {
            if (typeof whenDone === 'function' && whenDone) {
                whenDone();
            }
        });
    }

    this.showSquareInfoAsync = function() {
        const infoPromise = $.Deferred();
        const obj = this;

        this.topLeftSquare.showInfoAsync(this.navAnimationSpeedSec, 0);
        this.bottomLeftSquare.showInfoAsync(this.navAnimationSpeedSec, 0.2);

        setTimeout(function() {
            infoPromise.resolve();
        }, this.navAnimationSpeedMs + 200);

        infoPromise.done(function() {
            obj.navAnimationIsRunning = false;
        });
    }

    this.closeInfoAsync = function(whenDone) {
        if (this.navAnimationIsRunning) {
            return;
        }

        const infoPromise = $.Deferred();
        this.navAnimationIsRunning = true;
        this.bottomLeftSquare.closeInfoAsync(this.navAnimationSpeedSec, 0);
        this.topLeftSquare.closeInfoAsync(this.navAnimationSpeedSec, 0.2);

        setTimeout(function() {
            infoPromise.resolve();
        }, this.navAnimationSpeedMs + 200);

        infoPromise.done(function() {
            if (typeof whenDone === 'function' && whenDone()) {
                whenDone();
            }  
        });
    }

    this.closeMenuAsync = function() {
        const slidePromise = $.Deferred();
        const obj = this;

        this.rightSquare.closeSquareAsync(this.navAnimationSpeedSec, 0);
        this.topLeftSquare.closeSquareAsync(this.navAnimationSpeedSec, 0);
        this.bottomLeftSquare.closeSquareAsync(this.navAnimationSpeedSec, 0);

        setTimeout(function() {
            slidePromise.resolve();
        }, this.navAnimationSpeedMs);

        slidePromise.done(function() {
            obj.navScreenElm.hidden = true;
            obj.navAnimationIsRunning = false;
        });
    }

    this.init();
}

function NavbarTopLeftSquare() {
    this.square = document.getElementById("nav-square-small-top-container");
    this.aboutContainer = document.getElementById("about-info");
    this.buzzword = document.getElementById("buzzword");
    this.buzzwords = ["Designer", "Modeler", "Sketcher"];
    this.currentBuzzwordIndex = 0;

    this.init = function() {
        this.square.addEventListener("mouseover", function() {
            focusChildrenUnderline(this);
        });
        this.square.addEventListener("mouseleave", function() {
            unFocusChildrenUnderline(this);
        });
        this.writeBuzzwords();
    }

    this.openSquareAsync = function(navAnimationSpeedSec, delay) {
        this.square.style.animation =
            navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideTopDown";
    }

    this.closeSquareAsync = function(navAnimationSpeedSec, delay) {
        this.square.style.animation = 
            navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideTopDownUndo";
    }

    this.writeBuzzwords = function() {
        const obj = this;
        $.when
            .apply($, this.writeBuzzword(this.buzzwords[this.currentBuzzwordIndex]))
            .done(function() {
                obj.deleteBuzzwordHTML();
                obj.setNextBuzzwordIndex();
                obj.writeBuzzwords();
            });
    }

    this.showInfoAsync = function(animationSpeed, delay) {
        this.aboutContainer.style.animation = 
            animationSpeed + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideRight";
    }

    this.closeInfoAsync = function(animationSpeed, delay) {
        this.aboutContainer.style.animation = 
            animationSpeed + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideRightUndo";
    }

    this.writeBuzzword = function(buzzword) {
        const obj = this;
        var promises = [];
        var charTime = 0;
        var charTimeInterval = 300;

        for (let i = 0; i < buzzword.length; i++) {
            const char = buzzword[i];
            const charWritePromise = $.Deferred();
            
            setTimeout(function() {
                obj.buzzword.innerHTML += char;
                charWritePromise.resolve();
            }, charTime);

            promises.push(charWritePromise);
            charTime += charTimeInterval;
        }

        const charWritePromiseLastWait = $.Deferred();
        setTimeout(function() {
            charWritePromiseLastWait.resolve();
        }, charTime + 3000);
        promises.push(charWritePromiseLastWait);
        
        return promises;
    }

    this.deleteBuzzwordHTML = function() {
        this.buzzword.innerHTML = "";
    }

    this.setNextBuzzwordIndex = function() {
        if (this.currentBuzzwordIndex >= this.buzzwords.length - 1) {
            this.currentBuzzwordIndex = 0;
        } else {
            this.currentBuzzwordIndex++;
        }
    }

    this.init();
}

function NavbarBottomLeftSquare() {
    this.square = document.getElementById("nav-square-small-bottom-container");
    this.innerInfo = document.getElementById("contact-info");

    this.init = function() {
        this.square.addEventListener("mouseover", function() {
            focusChildrenUnderline(this);
        });
        this.square.addEventListener("mouseleave", function() {
            unFocusChildrenUnderline(this);
        });
    }

    this.openSquareAsync = function(navAnimationSpeedSec, delay) {
        this.square.style.animation =
            navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideBottomUp";
    }

    this.closeSquareAsync = function(navAnimationSpeedSec, delay) {
        this.square.style.animation = 
            navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideBottomUpUndo";
    }

    this.showInfoAsync = function(animationSpeed, delay) {
        this.innerInfo.style.animation = 
            animationSpeed + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideRight";
    }

    this.closeInfoAsync = function(animationSpeed, delay) {
        this.innerInfo.style.animation = 
            animationSpeed + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideRightUndo";
    }

    this.init();
}

function NavbarRightSquare() {
    this.square = document.getElementById("nav-square-large-right-container");

    this.init = function() {
        this.square.addEventListener("mouseover", function() {
            focusChildrenUnderline(this);
        });
        this.square.addEventListener("mouseleave", function() {
            unFocusChildrenUnderline(this);
        });
    }

    this.openSquareAsync = function(navAnimationSpeedSec, delay) {
        this.square.style.animation =
            navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideLeft";
    }

    this.closeSquareAsync = function(navAnimationSpeedSec, delay) {
        this.square.style.animation = 
            navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideLeftUndo";
    }

    this.init();
}

function focusChildrenUnderline(elm) {
    var animations = elm.getElementsByClassName("animate-underline");
    for(var i = 0; i < animations.length; i++) {
        var animationElm = animations[i];
        animationElm.classList.add('underline-animate');
    }
}

function unFocusChildrenUnderline(elm) {
    var animations = elm.getElementsByClassName("animate-underline");
    for(var i = 0; i < animations.length; i++) {
        var animationElm = animations[i];
        animationElm.classList.remove('underline-animate');
    }
}

$(document).ready(function() {
    const nav = new NavBar();
    nav.navBackground.toggleMenuBar();
});