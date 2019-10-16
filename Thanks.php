<?php
include "./includes/html-start.php";
?>
<h1>شكراً لكم على المشاركة</h1>
<h6>إذا كنت ترغب بمتابعة كل مايتعلق بهذا الشأن يمكنك ترك رقمك أو إيميلك وسنعلمك بكل جديد</h6>

<div class="col-8">
    <form action="insert.php" method="POST">
        <div class="form-group"> <br><br>
            <label for="exampleInputEmail1">Tel</label>
            <input type="text" name="Tel" class="form-control" id="exampleInputEmail1"
                aria-describedby="telHelp" placeholder="رقم الموبايل">
            <small id="telHelp" class="form-text text-muted">.لن نشارك رقم الموبايل الخاص بك مع أي شخص
                آخر</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email address</label>
            <input type="email" name="Email" class="form-control" id="exampleInputPassword1"
                placeholder="الإيميل">
            <small id="emailHelp" class="form-text text-muted">.لن نشارك الإيميل الخاص بك مع أي شخص
                آخر</small>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">ارسال</button><br><br>
    </form>
</div>

<?php
include "./includes/footer.php";
include "./includes/html-end.php";