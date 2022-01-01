// 這段會影響到button先關掉
// const discount = document.getElementById('coupon_code');
// const payment_btn = document.querySelector('.hc-payment');
// const trash_btn = document.querySelectorAll('.hc-trash');

// payment_btn.addEventListener('click', function (event) {
//     console.log('折價卷代碼:', discount.value);
// });


//加入商品至購物車
$('button#btn_set_cart').click(function (event){
    
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
    $.post('setCart.php', objProduct, function(obj){
        if(obj['success']){
            alert(`商品已加入購物車`);

            //之後會回傳 obj['count_products']，放到網頁上
            $('span#count_products').text(obj['count_products']);
        }
        console.log(obj);
    },'json');
    
});
