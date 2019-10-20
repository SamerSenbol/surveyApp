<?php
include "./includes/html-start.php";
?>
    <div class="container">
        <div class="row" id="hader">

            <div class="col-12">
                <img src="./images/header.jpg">
            </div>

        </div>

        <div class="row" id="message">

            <div class="col-12">
                
                <br><h5>مبادرة طيبه من أحد الإخوة المهندسين لتسهيل دخول الأشخاص الذين يرغبون بالعمل بمهنة سائق في السويد
                تم تقديم مخطط مشروع بهذا الشأن لبلدية ترولهتان في السويد وتم الحصول على موافقة مبدئية لهذا المشروع بشرط جمع
                أصوات لعدد لا بأس به من الأشخاص الذين يرغبون في الحصول على تصريح عمل في هذا المجال</h5><br><br>

                <h5>نرجو منكم دعم هذا المشروع عن طريق النشر او مشاركته مع من يرغب بالعمل ضمن المجالات التالية</h5>
                <h6> (Taxi förare)شوفير تاكسي -</h6>
                <h6> (Färdtjänst)خدمة نقل -</h6>
                <h6> (Busschaufför)شوفير باص -</h6>
                <h6> (Lastbilsförare)شوفير شحن -</h6>
                <h5>ولكم منا جزيل الشكر</h5>

            </div>

        </div>

        
        <div class="row" id="form">
            
            <div class="col-sm-12 col-md-4">
                <form action="insert.php" method="POST">
                    <br><h6>إذا كنت ترغب بمتابعة كل مايتعلق بهذا الشأن يمكنك ترك رقمك أو إيميلك وسنعلمك بكل جديد</h6>
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
include "./includes/html-end.php";