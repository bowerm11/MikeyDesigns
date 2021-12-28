$(document).ready(function() {
    const nav = new NavBar();

    $(window).on('load', function () {
        nav.showRemovableSections();
    });
});