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
            <p>ياترى في حدا متلى حابب يشتغل كشوفير سيارة شحن او باص بس في كتير عوائق
            عم تواجهو؟خلينا نوصل صوتنا للجهات المعنية بالسويد لحى يلاقولنا حل ويساعدونا</p> <br><br>
            <form action="insert.php" method="POST">
                <div class="form-group">

                    <h6>اذا كنت ترغب بمتابعة كل مايتعلق بهذا الشأن يمكنك ترك رقمك او ايميلك وسنعلمك بكل جديد</h6>
                    <label for="exampleInputEmail1">Tel</label>
                    <input type="text" name="Tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tel">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your Tel with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email address</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">نعم</button>
                <h6>شارك فصوتك يحدث فرقاً</h6>
            </form>
        </div>
            <a data-text="شارك فصوتك يحدث فرقاً" data-link="http://www.doitonline.se/" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large">Share</a>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</body>
</html>