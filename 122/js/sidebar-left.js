$(document).ready(function (e) {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $(".pricing_tables").toggleClass("toggled");
    });
});