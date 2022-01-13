function TOCScroller(tocContainerElm) {
    this.containerElm = tocContainerElm;
    this.t_contentItems = [];

    this.init = function() {
        var contentItemElms = document.getElementsByClassName("js-toc-content-item");
        for (let i = 0; i < contentItemElms.length; i++) {
            const contentItemElm = contentItemElms[i];
            this.t_contentItems.push(new TableContentItem(this.containerElm, contentItemElm));
        }

        for (let i = 0; i < this.t_contentItems.length; i++) {
            const contentItem = this.t_contentItems[i];
            this.containerElm.appendChild(contentItem.contentItemContainerElm);
        }
    }

    this.init();
}

function TableContentItem(containerElm, contentItemElm) {
    var $window = $(window);

    this.containerElm = containerElm;
    this.contentItemElm = contentItemElm;
    this.$contentItemElm = $(contentItemElm);
    this.contentTitle = contentItemElm.getAttribute("data-toc-title");
    this.contentTitleElm = null;
    this.contentBtnElm = null;
    this.contentItemContainerElm = null;

    this.init = function() {
        this.contentTitleElm = this.createTitleElm();
        this.contentBtnElm = this.createBtnElm();
        this.contentItemContainerElm = this.createTocItemElm();

        this.createEventHandlers();
    }

    this.createTitleElm = function() {
        var titleElm = document.createElement("div");
        titleElm.classList.add("content-title-container");

        var titleText = document.createElement("p");
        titleText.classList.add("content-title-txt");
        titleText.innerHTML = this.contentTitle;

        titleElm.appendChild(titleText);

        return titleText; 
    }

    this.createBtnElm = function() {
        var contentBtnElm = document.createElement("div");
        contentBtnElm.classList.add("content-btn");

        return contentBtnElm;
    }

    this.createTocItemElm = function() {
        var contentItemElm = document.createElement("div");
        contentItemElm.classList.add("content-item");
        contentItemElm.appendChild(this.contentTitleElm);
        contentItemElm.appendChild(this.contentBtnElm);

        return contentItemElm;
    }

    this.createEventHandlers = function() {
        const obj = this;
        $(this.contentBtnElm).hover(function() {
            obj.contentTitleElm.classList.add("content-title-btn-active");
            obj.containerElm.classList.add("toc-container-btn-active");
        }, function() {
            obj.contentTitleElm.classList.remove("content-title-btn-active");
            obj.containerElm.classList.remove("toc-container-btn-active");
        });

        this.contentBtnElm.addEventListener("click", function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: obj.$contentItemElm.offset().top
            }, 80);
        });

        $window.scroll(function() {
            if(obj.contentElmInView()) {
                obj.contentBtnElm.classList.add("in-viewport");
            } else {
                obj.contentBtnElm.classList.remove("in-viewport");
            }
        });
    }

    this.contentElmInView = function() {
        var elementTop = this.$contentItemElm.offset().top;
        var elementBottom = elementTop + this.$contentItemElm.outerHeight();

        var viewportTop = $window.scrollTop();
        var viewportBottom = viewportTop + $window.height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    this.init();
}