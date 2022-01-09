// ------------------------------ landing page effect
// splide
document.addEventListener('DOMContentLoaded', function () {
    var splide = new Splide('.splide');
    splide.mount();
});
// goTop 
$(function () {
    var topBtn = $('#pagetop');
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).stop().scrollTop() > 200) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    topBtn.click(function () {
        $('body,html').stop().animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
// card animation
VanillaTilt.init(document.querySelectorAll(".hc-about-list-img"), {
    max: 15,
    speed: 400
});