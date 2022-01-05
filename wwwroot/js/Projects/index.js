$(document).ready(function() {
    const nav = new NavBar();

    window.onload = new function() {
        nav.loadingScreen.doneLoading(function() {
            nav.showRemovableSections();
        });
    }
});