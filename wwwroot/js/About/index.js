$(document).ready(function() {
    const nav = new NavBar();
    const frontParallax = new MultiParallax("front-page-parrallax");
    
    $(window).on('load', function() {
        nav.showRemovableSections();
    });
});

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