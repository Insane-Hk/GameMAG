$(".scrollToBtn").click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 500, 'linear');
})

$(window).scroll(function () {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        $(".scrollToBtn").show();
    } else {
        $(".scrollToBtn").hide();
    }
});