//減少商品數量
$('button#pc_minus').click(function (event) {
  let input_qty = $('input#qty');
  if (parseInt(input_qty.val()) - 1 < 1) return false;
  input_qty.val(parseInt(input_qty.val()) - 1);
});

//增加商品數量
$('button#pc_plus').click(function (event) {
  let input_qty = $('input#qty');
  input_qty.val(parseInt(input_qty.val()) + 1);
});

//加入商品至購物車
$('button#btn_set_cart').click(function (event) {

  // 取得btn的jq物件
  let btn = $(this);
  // 送出POST請求，加入購物車
  let objProduct = {
    prod_id: btn.attr('data-prod-id'),
    prod_name: btn.attr('data-prod-name'),
    prod_price: btn.attr('data-prod-price'),
    // prod_size: btn.attr('data-prod-size'),
    // prod_grind: btn.attr('data-prod-grind'),
    prod_size: $('input#pc-size').val(),
    prod_grind: $('input#pc-grind').val(),
    prod_qty: $('input#qty').val()
  };
  $.post('setCart.php', objProduct, function (obj) {
    if (obj['success']) {
      alert(`商品已加入購物車`);

      //之後會回傳 obj['count_products']，放到網頁上
      $('span#count_products').text(obj['count_products']);

      //重新整理讓count_products可以計算
      location.reload();
    }
    console.log(obj);
  }, 'json');

});

// 立即購買
$('button#pc-asapBuy').click(function (event) {

  // let pcCart = $('div#count_products').val();

  // if (pcCart == '') {
  //   alert(`請將商品加入購物車`);
  //   return false;
  // }

  location.href = 'shoppingCart_page.php';

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



