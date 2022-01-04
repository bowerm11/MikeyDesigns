$(document).ready(function() {
    const nav = new NavBar();
    const frontParallax = new MultiParallax("front-page-parrallax");
    const skillsRotate = new KeyRotisserie(document.getElementById("rotate-word-highlight"), document.getElementsByClassName("rotate-word"));

    setKeyAnimation();

    window.onload = function() {
        nav.showRemovableSections();
    }
});

function setKeyAnimation() {
    const keyAnimation = new InViewAnimator("key-container");
    const keyUpLine = document.getElementById("key-up-line");
    const keyBottomLineMid = document.getElementById("key-mid-line");
    const keyBottomLineMax = document.getElementById("key-max-line");
    
    keyAnimation.inViewportEvent = function() {
        keyUpLine.style.animation = "slideRight .5s 1s ease-out forwards";
        keyBottomLineMid.style.animation = "slideDown .5s .5s ease-out forwards";
        keyBottomLineMax.style.animation = "slideDown .5s 1s ease-out forwards";
    }

    keyAnimation.outViewportEvent = function() {
        keyUpLine.style.animation = "";
        keyBottomLineMid.style.animation = "";
        keyBottomLineMax.style.animation = "";
    }
}

function MultiParallax(parentElmId) {
    this.parentElm = document.getElementById(parentElmId);
    this.images = [];

    this.init = function() {
        this.getChildImgNodes();
        this.addScrollFunction();
    }

    this.getChildImgNodes = function() {
        for (let i = 0; i < this.parentElm.childNodes.length; i++) {
            const childNode = this.parentElm.childNodes[i];
            
            if(childNode.classList && childNode.classList.contains("parallax")) {
                this.images.push(childNode);
            }
        }
    }

    this.addScrollFunction = function() {
        var obj = this;
        window.addEventListener("scroll", function() {
            for (let i = 0; i < obj.images.length; i++) {
                const image = obj.images[i];
                image.style.transform = "translateY(-" + (window.pageYOffset * i / obj.images.length) + "px";
            }
        }, false);
    }

    this.init();
};

function InViewAnimator(elm) {
    this.elm = document.getElementById(elm);
    this.windowHeight = window.innerHeight;

    this.init = function() {
        var obj = this;

        window.addEventListener('scroll', function() {
            obj.checkPosition();
        });

        window.addEventListener('resize', function() {
            obj.windowHeight = window.innerHeight;
            obj.checkPosition();
        });
    }

    this.checkPosition = function() {
        var positionFromBottom = this.elm.getBoundingClientRect().bottom;
        var positionFromTop = this.elm.getBoundingClientRect().top;

        if (positionFromBottom - this.windowHeight <= 0) {
            if (!this.elm.classList.contains("in-view-animator-ran")) {
                this.elm.classList.add("in-view-animator-ran");
                this.inViewportEvent();
            } 
        } else if (positionFromTop - this.windowHeight >= 0) {
            if (this.elm.classList.contains("in-view-animator-ran")) {
                this.elm.classList.remove("in-view-animator-ran");
                this.outViewportEvent();
            }
        }
    }

    this.inViewportEvent = function() {

    }

    this.outViewportEvent = function () {

    }

    this.init();
}

function KeyRotisserie(hightlightFieldElm, wordsElm) {
    this.highlightField = hightlightFieldElm;
    this.wordsElm = wordsElm;
    this.currentWordIndex = 0;

    this.init = function() {
        this.rotateWord();
    }

    this.rotateWord = function() {
        const obj = this;
        this.slideUpOutWord(function() {
            obj.slideUpInWord(function() {
                obj.currentWordIndex++;

                if (obj.wordsElm.length <= obj.currentWordIndex) {
                    obj.currentWordIndex = 0;
                }

                obj.rotateWord();
            });
        });
    }

    this.slideUpOutWord = function(whenDone) {
        const def = $.Deferred();

        this.highlightField.style.animation = "slideUpOut .5s 0s ease-out forwards";

        setTimeout(function() {
            def.resolve();
        }, 500);

        def.done(function() {
            whenDone();
        });
    }

    this.slideUpInWord = function(whenDone) {
        const def = $.Deferred();

        this.highlightField.innerHTML = this.wordsElm[this.currentWordIndex].innerHTML;
        this.highlightField.style.animation = "slideUp .5s 0s ease-out forwards";

        setTimeout(function() {
            def.resolve();
        }, 1500);

        def.done(function() {
            whenDone();
        });
    }

    this.init();
}