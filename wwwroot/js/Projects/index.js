$(document).ready(function() {
    const nav = new NavBar();
    const toc = new TOCScroller(document.getElementById("table-of-contents-container"));

    window.onload = new function() {
        nav.loadingScreen.doneLoading(function() {
            nav.showRemovableSections();
        });
    }
});