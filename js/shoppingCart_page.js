//增加商品數量(購物車)
$('button.btn_plus').click(function (event) {
    // 計算數量
    let btn = $(this);
    let index = btn.attr('data-index');
    let prod_price = btn.attr('data-prod-price');
    let input_qty = $(`input.qty[data-index="${index}"]`);
    let prod_times = btn.attr('data-prod-times')
    input_qty.val(parseInt(input_qty.val()) + 1);

    //修改商品金額
    $(`span[data-index="${index}"]`).text(parseInt(input_qty.val()) * prod_price * prod_times);

    let total = 0;
    let cartage = 0;

    // 更新總計  取得每一個index的element
    $(`input.qty`).each(function (index, element) {
        total += (parseInt($(element).val()) * $(element).attr('data-prod-price') * prod_times);
    });

    if (total > 1300) {
        cartage = 0
    } else {
        cartage = 120;
    }
    
    $('span#total').text(total);
    $('span#cartage').text(cartage);

    let difference = 0;
    if (total > 1300) {
        $('span#difference').addClass('pc-hide');  
    } else {
        $('span#difference').removeClass('pc-hide');
        difference = 1300 - total;
    }
    $('span#difference').text(difference);

    let amountTotal = total + cartage;
    $('span#amountTotal').text(amountTotal);
});

//減少商品數量(購物車)
$('button.btn_minus').click(function (event) {
    let btn = $(this);
    let index = btn.attr('data-index');
    let prod_price = btn.attr('data-prod-price');
    let input_qty = $(`input.qty[data-index="${index}"]`);
    let prod_times = btn.attr('data-prod-times');
    if (parseInt(input_qty.val()) - 1 < 1) return false;
    input_qty.val(parseInt(input_qty.val()) - 1);

    //修改商品金額
    $(`span[data-index="${index}"]`).text(parseInt(input_qty.val()) * prod_price * prod_times);

    let total = 0;
    let cartage = 0;

    // 更新總計
    $(`input.qty`).each(function (index, element) {
        total += (parseInt($(element).val()) * $(element).attr('data-prod-price') * prod_times);
    });

    if (total > 1300) {
        cartage = 0
    } else {
        cartage = 120;
    }
    
    $('span#total').text(total);
    $('span#cartage').text(cartage);

    let difference = 0;
    
    if (total > 1300) {
        $('span#difference').addClass('pc-hide');
    } else {
        
        $('span#difference').removeClass('pc-hide');
        difference = 1300 - total;
    }
    $('span#difference').text(difference);

    let amountTotal = total + cartage;
    $('span#amountTotal').text(amountTotal);
});

//刪除購物車內商品
$('a.delete').click(function (event) {
    event.preventDefault();

    //取得刪除用的購物車索引
    let index = $(this).attr('data-index');

    $.get('deleteItem.php', { index: index }, function (obj) {
        if(obj['success']){
            location.reload();
        }else{
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');

});


//確認優惠代碼是否可用
$('a#check_coupon_code').click(function(event){
    event.preventDefault();

    //取得優惠代碼
    let code = $('input[name="coupon_code"]').val();

    //如果代碼為空，就不往下執行
    if(code == ''){
        alert(`請輸入優惠代碼`);
        return false;
    };

    $.post("checkCoupon.php", {code:code}, function(obj){
        alert(`${obj['info']}`);
        console.log(obj);
    },'json')
});


//填入收件人資訊
$('input#member_info').click(function(event){
    // console.log('hi');

    $.get('autofillin.php', function (obj) {
    
        $('input#r-email').val(obj.data.email);
        $('input#r-name').val(obj.data.name);
        $('input#r-phnum').val(obj.data.phone_number);
        $('input#r-address').val(obj.data.address);

        if (obj['success']) {
            // alert(`填入會員資料成功`);
        } else {
            alert(`${obj['info']}`);
        }
    }, 'json');
});

//點擊icon進入購物車
$('div.shopping-card').click(function(event){
    // console.log('hi');
    location.href = 'shoppingCart_page.php';
});

