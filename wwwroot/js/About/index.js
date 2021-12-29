$(document).ready(function() {
    const nav = new NavBar();
    setAllVWVHMax();
    
    $(window).on('load', function () {
        nav.showRemovableSections();
    });
});