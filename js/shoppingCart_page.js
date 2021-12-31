const discount = document.getElementById('coupon_code');
const payment_btn = document.querySelector('.hc-payment');
const trash_btn = document.querySelectorAll('.hc-trash');

payment_btn.addEventListener('click', function (event) {
    console.log('折價卷代碼:', discount.value);
});
