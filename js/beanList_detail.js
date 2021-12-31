//減少商品數量
$('button#pc_minus').click(function (event){
    let input_qty = $('input#qty');
    if(parseInt(input_qty.val()) - 1 < 1) return false;
    input_qty.val(parseInt(input_qty.val()) - 1);
});

//增加商品數量
$('button#pc_plus').click(function (event){
    let input_qty = $('input#qty');
    input_qty.val(parseInt(input_qty.val()) + 1);
});

//相關商品
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });