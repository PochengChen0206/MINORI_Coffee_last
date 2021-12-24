window.onload = function () {
    // ==================== header menu
    const navSlide = function () {
        const burger_btn = document.querySelector('.humburger');
        const menu = document.querySelector('.menu');
        // 點擊 humburger 彈出menu內容
        burger_btn.addEventListener('click', function () {
            menu.classList.toggle('menu-active');
        });
    }
    navSlide();
    // ==================== header-m menu
    const navSlide_m = function () {
        const burger_m_btn = document.querySelector('.humburger-m');
        const menu_m = document.querySelector('.menu-m');
        // 點擊 humburger 彈出menu內容
        burger_m_btn.addEventListener('click', function () {
            menu_m.classList.toggle('menu-m-active');
        });
    }
    navSlide_m();
    // ==================== search btn
    const search_btn = document.querySelector('.search-btn');
    const search_input = document.querySelector('.search-input');

    search_btn.addEventListener('click', function () {
        search_input.classList.toggle('search-active');
        search_input.focus();
        // 如果有active 文字就顯示，不然就消失
        if ($('.search-input').hasClass('search-active')) {
            $('.search-input').css('opacity', '1');
        } else {
            $('.search-input').css('opacity', '0');
        }
    });
    // ==================== header-m search btn
    const search_btn_m = document.querySelector('.search-m-btn');
    const search_input_m = document.querySelector('.search-m-input');

    search_btn_m.addEventListener('click', function () {
        search_input_m.classList.toggle('search-m-active');
        search_input_m.focus();
        if ($('.search-m-input').hasClass('search-m-active')) {
            $('.search-m-input').css('opacity', '1');
        } else {
            $('.search-m-input').css('opacity', '0');
        }
    });
    // ==================== header user btn
    const userBtn = document.querySelector(".user-btn");
    const signMenu = document.querySelector(".signOut-menu");

    userBtn.addEventListener('click', function () {
        signMenu.classList.toggle('signOut-dropdown-active');
    });
    // ==================== header-m user btn
    const userBtn_m = document.querySelector(".user-m-btn");
    const signMenu_m = document.querySelector(".signOut-menu-m");

    userBtn_m.addEventListener('click', function () {
        signMenu_m.classList.toggle('signOut-m-dropdown-active');
    });
    // ==================== drop
    $('.list-drop .first-list').click(function () {
        console.log($(this))
        $(this).siblings().toggle();
    })

};


// 選擇生日
$('input#birthdate').datepicker({
    dateFormat: 'yy-mm-dd'
});


//註冊
$('button#btn_register').click(function (event) {
    //避免元素的預設事件觸發
    event.preventDefault();

    //各自將 input 帶到變數中
    let input_name = $('input#name');
    let input_birthdate = $('input#birthdate');
    let input_phonenum = $('input#phonenum');
    let input_address = $('input#address');
    let input_email = $('input#email');
    let input_pwd = $('input#pwd');


    //判斷email 是否符合自訂格式
    let re = /\S+@\S+(\.\S+)+/;   // \S 代表非空格
    if (!re.test(input_email.val())) {
        input_email
            .addClass("border border-danger border-2")
            .tooltip({
                title: "請填寫完整的E-mail",
                placement: "top"
            })
            .tooltip('show');
        return false;
    } else {
        input_email
            .removeClass("border border-danger border-2")
            .tooltip()
            .tooltip('dispose');
    }

    //檢查密碼是否輸入
    if (input_pwd.val() == '') {
        alert(`請輸入密碼`);
        return false;
    }

    //檢查姓名是否輸入
    if (input_name.val() == '') {
        alert(`請輸入姓名`);
        return false;
    }

    //檢查生日是否輸入
    if (input_birthdate.val() == '') {
        alert(`請輸入生日`);
        return false;
    }

    //檢查手機是否輸入
    if (input_phonenum.val() == '') {
        alert(`請輸入手機號碼`);
        return false;
    }

    //檢查地址是否輸入
    if (input_address.val() == '') {
        alert(`請輸入通訊地址`);
        return false;
    }

    // //將所有欄位的值，整合在陣列當中
    // let arrValue = [input_pwd.val(), input_name.val(), input_birthdate.val(), input_address.val(),]


    // //判斷其他欄位是否填寫完成
    // if(arrValue.indexOf('') > -1){  //因為從零開始要大於-1
    //     alert(`請正確填寫欄位`);
    //     return false;
    // }

    //送出POST請求， 註冊帳號
    let objUser = {
        name: input_name.val(),
        birthdate: input_birthdate.val(),
        phonenum: input_phonenum.val(),
        address: input_address.val(),
        email: input_email.val(),
        pwd: input_pwd.val()
    };

    //header("Content-Type: application/json");因為有header所以直接傳回物件不需要再轉換
    $.post("insertUser.php", objUser, function (obj) {
        if (obj['success']) {
            //關閉 modal
            $('div#exampleModal').hide();

            //成功訊息
            alert(`${obj['info']}`);

            //當成功訊息執行時，等1秒後，執行自訂程式
            setTimeout(function(){
                // location.reload();
                location.href = 'signupFinish.php';
            }, 1000);
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
});

//登入  
//要先fn+ctrl+F5 清除快取
$('button#btn_login').click(function (event) {
    event.preventDefault();

    // 各自將 input 帶入變數中
    let input_email = $('input#email_login');
    let input_pwd = $('input#pwd_login');

    //檢查 email 是否輸入
    if (input_email.val() == '') {
        alert(`請輸入E-mail`);
        return false;
    }

    //檢查 pwd 是否輸入
    if (input_pwd.val() == '') {
        alert(`請輸入密碼`);
        return false;
    }

    //送出post請求 payload
    let objUser = {
        email: input_email.val(),
        pwd: input_pwd.val()
    };

    $.post("login.php", objUser, function (obj) {
        console.log('button#btn_login post');
        if (obj['success']) {
            //成功訊息
            alert(`${obj['info']}`);
            //當成功訊息執行時，等數秒，執行自訂程式
            setTimeout(function () {
                location.href = 'memberData.php';
            }, 1000);
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
});

//isActivated 要改為1 才可以成功登入


//登出
$('a#logout').click(function(event){
    event.preventDefault();

    $.get('logout.php', function(obj){
        if(obj['success']){
            alert(`${obj['info']}`);

            $('a#my_data').hide();
            $('a#products_order').hide();
            $('a#my_coupon').hide();


            setTimeout(function() {
                location.href = 'loginSignup.php';
            }, 500);
        }
    }, 'json');
});

// loginSignup頁進入註冊頁面
$('a#pc-signup').click(function(event){
    location.href = 'signupPage.php';
});


