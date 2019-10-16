<?php
include "./includes/html-start.php";
?>
    <div class="container">
        <div class="row" id="header">

            <div class="col-12">
                <h1>إستبيان</h1>
            </div>

        </div>

        <div class="row" id="message">

            <div class="col-12">
                <h5>مبادرة لجمع أصوات الأشخاص المتحدثين باللغة العربية الذين يرغبون في العمل في المجالات التالية</h5>
            </div>

            <div class="col-12">
                <h6> (Taxi förare)شوفير تاكسي -</h6>
                <h6> (Färdtjänst)خدمة نقل -</h6>
                <h6> (Busschaufför)شوفير باص -</h6>
                <h6> (Lastbilsförare)شوفير شحن -</h6>
            </div>

            <div class="col-12">
                <h5>لنوصل صوتنا إلى الجهات المسؤلة في السويد لإيجاد حل ومساعدتنا في الحصول على رخصة العمل ودخول سوق
                    العمل السويدي</h5>
            </div>

        </div>

        
        <div class="row" id="form">
            
            <div class="col-sm-12 col-md-4">
                <form action="insert.php" method="POST">
                    <div class="form-group"> <br><br>
                    <input type="text" name="Tel" class="form-control" id="exampleInputEmail1"
                    aria-describedby="telHelp" placeholder="رقم الموبايل">
                    <small id="telHelp" class="form-text text-muted">.لن نشارك رقم الموبايل الخاص بك مع أي شخص
                        آخر</small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="Email" class="form-control" id="exampleInputPassword1"
                        placeholder="الإيميل">
                        <small id="emailHelp" class="form-text text-muted">.لن نشارك الإيميل الخاص بك مع أي شخص
                            آخر</small>
                        </div>
                        <h6>شارك فصوتك يحدث فرقاً</h6>
                        <button type="submit" name="submit" class="btn btn-primary">نعم</button><br><br>
                        <h6>إذا كنت ترغب بمتابعة كل مايتعلق بهذا الشأن يمكنك ترك رقمك أو إيميلك وسنعلمك بكل جديد</h6>
                    </form>
                </div>
            </div>
            
            <div class="row" id="share">
    
                <div class="col-12">
                    <div id="fb-root">
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=356632788307657&autoLogAppEvents=1"></script>
                        </div>
                        <small>لمشاركة التصويت مع الأصدقاء عبر الفيس بوك </small>
    
                    <div class="fb-share-button" data-href="http://www.doitonline.se/" data-layout="button_count"
                        data-size="large"><a target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.doitonline.se%2F&amp;src=sdkpreparse"
                            class="fb-xfbml-parse-ignore">Share</a>
                    </div>
                    <div class="whatsup">
                        <small>لمشاركة التصويت مع الأصدقاء عبر الواتس أب</small>
                        <a data-text="شارك فصوتك يحدث فرقاً" data-link="http://www.doitonline.se/"
                            class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large">مشاركة</a>
                    </div>
    
                </div>
            </div>
        </div>  
        <?php
include "./includes/footer.php";
include "./includes/html-end.php";