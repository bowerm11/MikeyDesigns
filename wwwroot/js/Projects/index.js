$(document).ready(function() {
    const nav = new NavBar();
    const toc = new TOCScroller(document.getElementById("table-of-contents-container"));

    $(window).on("load", function () {
        nav.loadingScreen.doneLoading(function() {
            nav.showRemovableSections();
        });
    });
});