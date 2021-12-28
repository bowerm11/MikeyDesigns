function NavBar() {
    this.hamburgerElm = document.getElementById("hamburgerClickable");
    this.removeableSections = document.getElementsByClassName("navbar-removeable-section");
    this.movingHamburgerbtn = new AttractableBtn(this.hamburgerElm);
    this.navBackground = new NavbarSquares(this);

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
        
        this.hamburgerElm.onclick = function() {
            navObj.navBackground.toggleMenuBar();
        }  
    }

    this.hideRemoveableSections = function() {
        for (let i = 0; i < this.removeableSections.length; i++) {
            const section = this.removeableSections[i];
            section.style.opacity = "0";
        }
    }

    this.scrollToProject = function(projectName) {
        var obj = this;
        this.navBackground.openMenuBar(function () {
            obj.navBackground.rightSquare.scrollTo(projectName);
        });
    }

    this.init();
}

NavBar.isInLargeView = function() {
    if ($(window).width() >= 768) {
        return true;
    }

    return false;
}

function NavbarSquares(navBar) {
    this.navBar = navBar;
    this.navAnimationIsRunning = false;
    this.navAnimationSpeedSec = 0.5;
    this.navAnimationSpeedMs = this.navAnimationSpeedSec * 1000;

    this.navScreenElm = document.getElementById("nav-screen");
    this.rightSquare = new NavbarRightSquare();
    this.bottomLeftSquare= new NavbarBottomLeftSquare();
    this.topLeftSquare = new NavbarTopLeftSquare(this);

    this.init = function() {
        
    }

    this.openMenuBar = function (whenDone) {
        if (this.navScreenElm.hidden) {
            this.openMenu(function () {
                if (typeof whenDone === 'function' && whenDone()) {
                    whenDone();
                } 
            });
        } else {
            if (typeof whenDone === 'function' && whenDone()) {
                whenDone();
            } 
        }
    }

    this.closeMenuBar = function (whenDone) {
        if (!this.navScreenElm.hidden) {
            this.closeMenu(function () {
                if (typeof whenDone === 'function' && whenDone()) {
                    whenDone();
                } 
            });
        } else {
            if (typeof whenDone === 'function' && whenDone()) {
                whenDone();
            } 
        }
    }

    this.toggleMenuBar = function(whenDone) {
        if (this.navScreenElm.hidden) {
            this.openMenu(function () {
                if (typeof whenDone === 'function' && whenDone()) {
                    whenDone();
                } 
            });
        } else {
            this.closeMenu(function () {
                if (typeof whenDone === 'function' && whenDone()) {
                    whenDone();
                } 
            });
        }
    }

    this.openMenu = function(whenDone) {
        var obj = this;
        this.openSquaresAsync(function() {
            obj.showSquareInfoAsync(function () {
                if (typeof whenDone === 'function' && whenDone()) {
                    whenDone();
                } 
            });
        });
    }

    this.closeMenu = function(whenDone) {
        var obj = this;
        this.closeInfoAsync(function () {
            obj.closeSquaresAsync(function() {
                if (typeof whenDone === 'function' && whenDone()) {
                    whenDone();
                } 
            });
        });
    }

    this.openSquaresAsync = function(whenDone) {
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

    this.showSquareInfoAsync = function(whenDone) {
        const infoPromise = $.Deferred();
        const obj = this;

        this.rightSquare.showInfoAsync(this.navAnimationSpeedSec, 0);
        this.topLeftSquare.showInfoAsync(this.navAnimationSpeedSec, 0.15);
        this.bottomLeftSquare.showInfoAsync(this.navAnimationSpeedSec, 0.3);

        setTimeout(function() {
            infoPromise.resolve();
        }, this.navAnimationSpeedMs + 300);

        infoPromise.done(function() {
            obj.navAnimationIsRunning = false;
            if (typeof whenDone === 'function' && whenDone()) {
                whenDone();
            } 
        });
    }

    this.closeInfoAsync = function(whenDone) {
        if (this.navAnimationIsRunning) {
            return;
        }

        const infoPromise = $.Deferred();
        this.navAnimationIsRunning = true;
        this.bottomLeftSquare.closeInfoAsync(this.navAnimationSpeedSec, 0);
        this.topLeftSquare.closeInfoAsync(this.navAnimationSpeedSec, 0);
        this.rightSquare.closeInfoAsync(this.navAnimationSpeedSec, 0);

        setTimeout(function() {
            infoPromise.resolve();
        }, this.navAnimationSpeedMs);

        infoPromise.done(function() {
            if (typeof whenDone === 'function' && whenDone()) {
                whenDone();
            }  
        });
    }

    this.closeSquaresAsync = function(whenDone) {
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
            if (typeof whenDone === 'function' && whenDone()) {
                whenDone();
            } 
        });
    }

    this.init();
}

function NavbarTopLeftSquare(navBarSquares) {
    this.navBarSquares = navBarSquares;
    this.square = document.getElementById("nav-square-small-top-container");
    this.aboutContainer = document.getElementById("about-info");
    this.clickUrl = this.square.getAttribute("data-url");
    this.buzzword = document.getElementById("buzzword");
    this.buzzwords = ["Creator", "Innovator", "Environmentalist", "Leader", "Industrial Designer", "Cordwainer"];
    this.currentBuzzwordIndex = 0;

    this.init = function() {
        var obj = this;
        this.square.addEventListener("mouseover", function() {
            focusChildrenUnderline(this);
        });
        this.square.addEventListener("mouseleave", function() {
            unFocusChildrenUnderline(this);
        });
        this.square.onclick = function () {
            obj.navBarSquares.navBar.hideRemoveableSections();
            obj.navBarSquares.closeMenuBar(function() {
                window.location.href = obj.clickUrl;
            });
        };
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

        for (let i = 0; i < buzzword.length; i++) {
            const char = buzzword[i];
            const charWritePromise = $.Deferred();
            
            setTimeout(function() {
                obj.buzzword.innerHTML += char;
                charWritePromise.resolve();
            }, charTime);

            promises.push(charWritePromise);
            charTime += getRandomInt(65, 300);
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
        if (NavBar.isInLargeView()) {
            this.square.style.animation =
                navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideBottomUp";
        } else {
            this.square.style.animation =
                navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideRight";
        } 
    }

    this.closeSquareAsync = function(navAnimationSpeedSec, delay) {
        if (NavBar.isInLargeView()) {
            this.square.style.animation = 
                navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideBottomUpUndo";
        } else {
            this.square.style.animation = 
                navAnimationSpeedSec + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideRightUndo";
        }
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
    this.innerInfo = document.getElementById("projects-info");
    this.cardContainer = document.getElementById("card-container");
    this.projects = this.innerInfo.getElementsByClassName("projects-card");

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

    this.showInfoAsync = function(animationSpeed, delay) {
        this.innerInfo.style.animation = 
            animationSpeed + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideLeftOpacity";
    }

    this.closeInfoAsync = function(animationSpeed, delay) {
        this.innerInfo.style.animation = 
            animationSpeed + "s cubic-bezier(0, 0, 0, 1) " + delay + "s 1 normal forwards running slideLeftOpacityUndo";
    }

    this.scrollTo = function(projectName) {
        for (let i = 0; i < this.projects.length; i++) {
            const project = this.projects[i];
            
            if (projectName == project.getAttribute("data-page-name")) {
                const $project = $(project);
                const $cardContainer = $(this.cardContainer);
                $cardContainer.animate({
                    scrollTop: $project.offset().top - $cardContainer.offset().top + $cardContainer.scrollTop()
                  },'slow', function() {
                      project.style.animation = "bounceIn 1.2s";
                  });
            }
        }
    }

    this.init();
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
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

function reloadPageIfBackButtonHit() {
    window.addEventListener( "pageshow", function ( event ) {
        var historyTraversal = 
            event.persisted || (typeof window.performance != "undefined" && window.performance.navigation.type === 2);
        if (historyTraversal) {
          window.location.reload();
        }
    });
}

reloadPageIfBackButtonHit();