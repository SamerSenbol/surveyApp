<?php
include "./includes/html-start.php";
?>
    <div class="container">
        <div class="row justify-content-md-center">
            <h3>ياترى في حدا متلى حابب يشتغل كشوفير سيارة شحن او باص بس في كتير عوائق عم تواجهو؟</h3>
            <h3>خلينا نوصل صوتنا للجهات المعنية بالسويد حتى يلاقولنا حل ويساعدونا</h3>
            <form action="insert.php" method="POST">
                <div class="form-group"> <br><br>
                    <h6>اذا كنت ترغب بمتابعة كل مايتعلق بهذا الشأن يمكنك ترك رقمك او ايميلك وسنعلمك بكل جديد</h6>
                    <label for="exampleInputEmail1">Tel</label>
                    <input type="text" name="Tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="رقم الموبايل">
                    <small id="emailHelp" class="form-text text-muted">.لن نشارك رقم الموبايل الخاص بك مع أي شخص آخر</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email address</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputPassword1" placeholder="الإيميل">
                    <small id="emailHelp" class="form-text text-muted">.لن نشارك الإيميل الخاص بك مع أي شخص آخر</small>
                </div>
                <h6>شارك فصوتك يحدث فرقاً</h6>
                <button type="submit" name="submit" class="btn btn-primary">نعم</button><br><br>
            </form>
        </div>
        <div class="row justify-content-md-center">
            <div class="whatsup">
                <h6>شارك التصويت مع الأصدقاء عبر الواتس أب</h6>
                <a data-text="شارك فصوتك يحدث فرقاً" data-link="http://www.doitonline.se/" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large">مشاركة</a>
            </div>
        </div>
    </div>
    
<?php
include "./includes/html-end.php";