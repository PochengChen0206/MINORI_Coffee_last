<!-- div.container-fluid 的結尾-->
<!-- </div> -->

<!-- 浮動視窗 -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content" style="background: #1C1C1C;">
         <div class="modal-header" style="border-bottom: 1px solid #95720C;">
            <h5 class="modal-title" id="exampleModalLabel" style="color: #95720C;">註冊帳號</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form class="row g-3" id="myForm">
               <div class="col-md-6">
                  <label for="inputEmail4" class="form-label" style="color: #95720C;">姓名</label>
                  <input type="text" class="form-control" id="name" placeholder="請填寫您的姓名">
               </div>
               <div class="col-md-6">
                  <label for="inputPassword4" class="form-label" style="color: #95720C;">生日</label>
                  <input type="text" class="form-control" id="birthdate" placeholder="請填寫您的生日">
               </div>
               <div class="col-md-12 mt-2">
                  <label for="inputEmail4" class="form-label" style="color: #95720C;">手機號碼</label>
                  <input type="text" class="form-control" id="phonenum" placeholder="請填寫您的手機號碼">
               </div>
               <div class="col-12 mt-2">
                  <label for="inputAddress" class="form-label" style="color: #95720C;">通訊地址</label>
                  <input type="text" class="form-control" id="address" placeholder="請填寫您的通訊地址">
               </div>
               <div class="col-md-12 mt-2">
                  <label for="inputEmail4" class="form-label" style="color: #95720C;">Email(設定為帳號)</label>
                  <input type="email" class="form-control" id="email" placeholder="請填寫您的Email">
               </div>
               <div class="col-12 mt-2">
                  <label for="inputPassword4" class="form-label" style="color: #95720C;">密碼</label>
                  <input type="password" class="form-control" id="pwd" placeholder="請填寫您的密碼">
               </div>
               <div class="col-12 mt-3 text-right">
                  <button type="submit" class="btn btn-outline-warning px-4" id="btn_register">註冊</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jquery UI-->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<!-- awesome-->
<script src="js/all.min.js"></script>

<!-- lightbox-->
<script src="js/lightbox.js"></script>

<!-- custom -->
<script src="js/custom.js"></script>
</body>

</html>