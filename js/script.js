$(".scrollToBtn").click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 500, 'linear');
})

function getheight(){
    var d= document.documentElement;
    var b= document.body;
    var who= d.offsetHeight? d: b ;
    return Math.max(who.scrollHeight,who.offsetHeight);
}

$(window).scroll(function () {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        $(".scrollToBtn").show();
    } else {
        $(".scrollToBtn").hide();
    }

    var scrollHeight = $(document).height() - document.body.clientHeight;
	var scrollPosition = $(window).height() + $(window).scrollTop() - document.body.clientHeight;

    var percent = scrollPosition / scrollHeight * 100;

    $(".progress .progress-bar").css("width", `${percent}%`);
});