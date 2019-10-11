<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>
<body>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</body>
</html>