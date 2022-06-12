$(window).on("load", function () {
    $(document).ready(function() {
        const nav = new NavBar();
        const toc = new TOCScroller(document.getElementById("table-of-contents-container"));
    
        nav.loadingScreen.doneLoading(function() {
            nav.showRemovableSections();
        });
    });
});