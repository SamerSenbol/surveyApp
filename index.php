<?php
include "./includes/html-start.php";
?>
    <div class="container">
        <div class="row justify-content-md-center">
            <h5>ياترى في حدا متلى حابب يشتغل كشوفير سيارة شحن او باص بس في كتير عوائق عم تواجهو؟</h5>
            <h5>خلينا نوصل صوتنا للجهات المعنية بالسويد حتى يلاقولنا حل ويساعدونا</h5>
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
                <h6>لمشاركة التصويت مع الأصدقاء عبر الواتس أب</h6>
                <a data-text="شارك فصوتك يحدث فرقاً" data-link="http://www.doitonline.se/" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large">مشاركة</a>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=356632788307657&autoLogAppEvents=1"></script>
            </div>
            <h6>لمشاركة التصويت مع الأصدقاء عبر الفيس بوك </h6>
            <div class="fb-share-button" data-href="http://www.doitonline.se/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.doitonline.se%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">مشاركة</a></div>
        </div>
    </div>
    
<?php
include "./includes/html-end.php";