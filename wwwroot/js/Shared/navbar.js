function NavBar() {
    this.parentElm = document.getElementById("nav-screen").parentElement;
    this.hamburgerElm = document.getElementById("hamburgerClickable");
    this.homeElm = document.getElementById("homeClickable");
    this.removeableSections = document.getElementsByClassName("navbar-removeable-section");
    this.movingHamburgerbtn = new AttractableBtn(this.hamburgerElm);
    this.movingHomebtn = new AttractableBtn(this.homeElm);
    this.navBackground = new NavbarSquares(this);

    this.init = function() {
        var navObj = this;
        setAllVWVHMax();

        this.movingHamburgerbtn.onActivation = function () {
            navObj.hamburgerElm.style.animation = ".3s scaleUp ease-out forwards";
        }
        
        this.movingHamburgerbtn.onDeactivation = function () {
            navObj.hamburgerElm.style.animation = ".3s scaleDown ease-out forwards";
        }
        
        this.hamburgerElm.onclick = function() {
            navObj.navBackground.toggleMenuBar();
        }  

        this.movingHomebtn.onActivation = function () {
            navObj.homeElm.style.animation = ".3s scaleUp ease-out forwards";
        }
        
        this.movingHomebtn.onDeactivation = function () {
            navObj.homeElm.style.animation = ".3s scaleDown ease-out forwards";
        }
        
        this.homeElm.onclick = function() {
            window.location.href = navObj.homeElm.getAttribute("data-url");
        } 
    }

    this.showRemovableSections = function (whenDone) {
        const fadeOutLenSec = 1;
        const promises = [];
        
        for (let i = 0; i < this.removeableSections.length; i++) {
            const section = this.removeableSections[i];
            const defer = $.Deferred();
            section.style.animation = "navfadeOut " + fadeOutLenSec + "s forwards reverse";

            setTimeout(function() {
                defer.resolve();
            }, fadeOutLenSec * 1000);

            promises.push(defer);
        }

        $.when.apply($, promises).then(function () {
            if (typeof whenDone === 'function' && whenDone()) {
                whenDone();
            } 
        });  
    }

    this.hideRemoveableSections = function(whenDone) {
        const obj = this;
        const fadeOutLenSec = 1;
        const promises = [];

        for (let i = 0; i < this.removeableSections.length; i++) {
            const section = this.removeableSections[i];
            const defer = $.Deferred();
            section.style.animation = "fadeOut " + fadeOutLenSec + "s forwards";

            setTimeout(function() {
                defer.resolve();
            }, fadeOutLenSec * 1000);

            promises.push(defer);
        }

        $.when.apply($, promises).then(function () {
            for (let i = 0; i < obj.removeableSections.length; i++) {
                const section = obj.removeableSections[i];
                $(section).remove();
            }

            if (typeof whenDone === 'function' && whenDone()) {
                whenDone();
            } 
        });    
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
    this.navAnimationSpeedSec = 0.4;
    this.navAnimationSpeedMs = this.navAnimationSpeedSec * 1000;

    this.navScreenElm = document.getElementById("nav-screen");
    this.rightSquare = new NavbarRightSquare(this);
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
        this.navBar.parentElm.style.overflow = "hidden";
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
        this.navBar.parentElm.style.overflow = "auto";
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
            obj.navBarSquares.closeMenuBar(function() {
                obj.navBarSquares.navBar.hideRemoveableSections(function() {
                    window.location.href = obj.clickUrl;
                });  
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

function NavbarRightSquare(navSquares) {
    this.navSquares = navSquares;
    this.square = document.getElementById("nav-square-large-right-container");
    this.innerInfo = document.getElementById("projects-info");
    this.cardContainer = document.getElementById("card-container");
    this.projects = this.innerInfo.getElementsByClassName("projects-card");

    this.init = function() {
        const obj = this;
        this.square.addEventListener("mouseover", function() {
            focusChildrenUnderline(this);
        });
        this.square.addEventListener("mouseleave", function() {
            unFocusChildrenUnderline(this);
        });
        $(".projects-card").on("click", function() {
            const elm = this;
            obj.navSquares.closeMenuBar(function() {
                obj.navSquares.navBar.hideRemoveableSections(function() {
                    window.location.href = $(elm).attr("data-page-url");
                }); 
            });
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
            
            if (projectName == project.getAttribute("data-card-name")) {
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

function AttractableBtn(actionElement) {
    this.actionElement = actionElement;
    this.absolutePosition = true;
    this.isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    this.wasActivated = false;
    this.coords = this.actionElement.getBoundingClientRect();
    this.elmX = this.coords.left;
    this.elmY = this.coords.top;
    this.elmCenterPoints = { x: ((this.coords.right - this.coords.left) / 2), y: ((this.coords.bottom - this.coords.top) / 2)};

    this.actionRadiusPx = 10;
    this.leftRadMax = this.coords.left - this.actionRadiusPx;
    this.rightRadMax = this.coords.right + this.actionRadiusPx;
    this.topRadMax = this.coords.top - this.actionRadiusPx;
    this.bottomRadMax = this.coords.bottom + this.actionRadiusPx;

    this.speed = 0.05;
    this.mouseX = null;
    this.mouseY = null;
    this.animationReq = null;
    
    this.init = function () {
        var attractObj = this;
        
        if(!this.isMobile) {
            window.addEventListener('mousemove', function(e) {
                if (attractObj.absolutePosition) {
                    attractObj.mouseX = e.pageX - $(window).scrollLeft();
                    attractObj.mouseY = e.pageY - $(window).scrollTop();
                } else {
                    attractObj.mouseX = e.pageX;
                    attractObj.mouseY = e.pageY;
                }
                
                var iswithinRadius = attractObj.isWithinRadius();
                if (iswithinRadius && attractObj.animationReq == null) {
                    attractObj.wasActivated = true;
                    attractObj.onActivation();
                    followCursorAnimation(attractObj);
                } else if (!iswithinRadius && attractObj.animationReq == null && attractObj.wasActivated) {
                    attractObj.onDeactivation();
                    returnToDefaulAnimation(attractObj);
                }
            });
        }    
    };

    this.isWithinRadius = function() {
        if ((this.mouseX >= this.leftRadMax && this.mouseX <= this.rightRadMax)
            && (this.mouseY >= this.topRadMax && this.mouseY <= this.bottomRadMax)) {
                return true;
        }

        return false;
    }

    this.clearAnimationReq = function() {
        cancelAnimationFrame(this.animationReq);
        this.animationReq = null;
    }

    this.onActivation = function() {

    }

    this.onDeactivation = function() {

    }

    this.init();
}

function followCursorAnimation(obj) {
    var distX = obj.mouseX - obj.elmX - obj.elmCenterPoints.x;
    var distY = obj.mouseY - obj.elmY - obj.elmCenterPoints.y;

    obj.elmX += (distX * obj.speed);
    obj.elmY += (distY * obj.speed);

    obj.actionElement.style.left = obj.elmX + "px";
    obj.actionElement.style.top = obj.elmY + "px";

    if (obj.isWithinRadius()) {
        obj.animationReq = requestAnimationFrame(function() {return followCursorAnimation(obj)});
    } else {
        obj.clearAnimationReq();
    }
}

function returnToDefaulAnimation(obj) {
    var distX = obj.coords.left - obj.elmX;
    var distY = obj.coords.top - obj.elmY;

    obj.elmX += (distX * obj.speed);
    obj.elmY += (distY * obj.speed);

    obj.actionElement.style.left = obj.elmX + "px";
    obj.actionElement.style.top = obj.elmY + "px";

    if (!obj.isWithinRadius()) {
        obj.animationReq = requestAnimationFrame(function() {return returnToDefaulAnimation(obj)});
    } else {
        obj.clearAnimationReq();
    }
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
    window.addEventListener("pageshow", function ( event ) {
        var historyTraversal = 
            event.persisted || (typeof window.performance != "undefined" && window.performance.navigation.type === 2);
        if (historyTraversal) {
          window.location.reload();
        }
    });
}

function setAllVWVHMax() {
    const viewportsToMax = document.getElementsByClassName("100-Vw-Vh");

    for (let i = 0; i < viewportsToMax.length; i++) {
        const viewportElm = viewportsToMax[i];
        viewportElm.style.width = window.innerWidth + "px";
        viewportElm.style.height = window.innerHeight + "px";

        window.addEventListener('resize', function() {
            viewportElm.style.width = window.innerWidth + "px";
            viewportElm.style.height = window.innerHeight + "px";
        });
    }
}

reloadPageIfBackButtonHit();