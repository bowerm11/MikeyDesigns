$(document).ready(function() {
    const nav = new NavBar();

    document.getElementById("url-location").innerHTML = window.location.href;

    window.onload = new function() {
        nav.loadingScreen.doneLoading(function() {
            nav.showRemovableSections();
        });
    }
});