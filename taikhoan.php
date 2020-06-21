<?php
    require_once'scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/taikhoan.scss');
    $str = $scss->compile($str);
    file_put_contents('css/taikhoan.css', $str);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/taikhoan.css">
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
    <title>Binh luan</title>
</head>

<body>
    <div class="type-taikhoan">
        <div class="container">
            <div class="title-table border py-2 pl-2">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                    Tài khoản khách hàng
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li>
                        <a style="display: static" href="#">Tài khoản admin</a>
                    </li>
                </ul>
            </div>
            <div>
                <table class="table border">
                    <tr class="font-weight-bold">
                        <td>
                            <em class="fa fa-cog"></em>
                        </td>

                        <td>Khách Hàng</td>

                        <td> Sản Phẩm</td>
                        <td>Mã Sản Phẩm</td>
                        <td>Tiêu Đề</td>

                        <td>Nội Dung</td>

                    </tr>
                    <tr>
                        <td class=>
                            <a class="btn btn-danger" data-toggle="modal" href="comment.php">
                                <em class="fa fa-trash"></em>
                            </a>
                        </td>

                        <td>qưeqwe</td>

                        <td> adasdasd</td>
                        <td>adadad</td>
                        <td>ádasd</td>

                        <td>adad</td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>