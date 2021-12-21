function NavBar() {
    this.hamburgerElm = document.getElementById("hamburgerClickable");
    this.movingHamburgerbtn = new AttractableBtn(this.hamburgerElm);

    this.navScreenElm = document.getElementById("nav-screen");
    this.navLeft = document.getElementById("nav-screen-left");
    this.navRight = document.getElementById("nav-screen-right");

    this.init = function() {
        var navObj = this;
        this.movingHamburgerbtn.onActivation = function () {
            navObj.hamburgerElm.style.background = "#2d3885";
            navObj.hamburgerElm.style.animation = ".3s scaleUp ease-out forwards";
        }
        
        this.movingHamburgerbtn.onDeactivation = function () {
            navObj.hamburgerElm.style.background = "none";
            navObj.hamburgerElm.style.animation = ".3s scaleDown ease-out forwards";
        }
        
        this.hamburgerElm.onclick = function () {
            if (navObj.navScreenElm.hidden) {
                navObj.navScreenElm.hidden = false;
                navObj.navLeft.style.animation = ".7s cubic-bezier(0, 0, 0, 1) 0s 1 normal forwards running slideDownInFrame";
                navObj.navRight.style.animation = ".7s cubic-bezier(0, 0, 0, 1) 0s 1 normal forwards running slideUpInFrame";
            } else {
                navObj.navLeft.style.animation = ".7s cubic-bezier(0, 0, 0, 1) 0s 1 normal forwards running slideDownOutFrame";
                navObj.navRight.style.animation = ".7s cubic-bezier(0, 0, 0, 1) 0s 1 normal forwards running slideUpOutFrame";
                //navObj.navScreenElm.hidden = true;
            }
        }
    }

    this.init();
}

const nav = new NavBar();