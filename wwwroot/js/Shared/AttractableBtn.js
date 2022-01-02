function AttractableBtn(actionElement) {
    this.actionElement = actionElement;
    this.absolutePosition = true;
    this.isMobile = false;
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
        this.isMobile = this.isMobile();
        
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

    this.isMobile = function() {
        switch(navigator.userAgent) {
            case "Android":
            case "webOS":
            case "iPhone":
            case "iPad":
            case "iPod":
            case "BlackBerry":
            case "IEMobile":
            case "Opera Mini":
                return true;

            default:
                return false;
        }
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