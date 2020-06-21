<?php
    require_once'scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/cauhinh.scss');
    $str = $scss->compile($str);
    file_put_contents('css/cauhinh.css', $str);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cauhinh.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>cau hinh</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-12">
                <ul class="pl-0">
                    <li class="dm-title">Danh Mục</li>
                    <li class="dm-content"><a href="#">Banner</a></li>
                    <li class="dm-content"><a href="#">Hiển Thị</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-xs-12">
                <div>
                    <div class="infor">Thông Tin</div>
                </div>
                <div>
                    <div class="infor mt-2 website">Website<i class="fa fa-caret-down"></i></div><br>
                    <div class="row">
                        <div class="logo col-md-4">
                            Logo website:
                            <div class="img-logo">
                                <img src="img/logo-fahasha.png" alt="#">
                            </div>
                        </div>
                        <div class="col-md-4">
                            Address:
                            <textarea name="textarea" id="" cols="30"
                                rows="10">Lầu 7, 387-389 Hai Bà Trưng Quận 3 TP HCM Công Ty Cổ Phần Phát Hành Sách TP HCM - FAHASA 60 - 62 Lê Lợi, Quận 1, TP. HCM, Việt Nam</textarea>
                        </div>
                        <div class="col-md-4">
                            Content:
                            <textarea name="textarea" id="" cols="30"
                                rows="10">Fahasa.com nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống Fahasa trên toàn quốc.</textarea>
                        </div>
                        <div class="button pr-4">
                            <button type="button" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>