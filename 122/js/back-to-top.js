$().ready(function () {
    $(window).scroll(function () {
        var top = $(this).scrollTop();
        if (top > 200) {
            $('#back-to-top').fadeIn('slow');
        } else {
            document.getElementById('back-to-top').style.display = "none";
        }
    });
    $('#back-to-top').click(function () {
        $('body').animate({scrollTop: 0}, 800);
    });
});