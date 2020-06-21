<?php
    require_once'scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/binhluan.scss');
    $str = $scss->compile($str);
    file_put_contents('css/binhluan.css', $str);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/binhluan.css">
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
    <div class="type-binhluan">
        <div class="container">
            <div class="title-table border py-2 pl-2">
                <span>Danh sách bình luận sản phẩm</span>
            </div>
            <div>
                <table class="table border">
                    <tr class="font-weight-bold">
                        <td class="text-center">
                            <em class="fa fa-cog"></em>
                        </td>

                        <td class="text-center">Khách Hàng</td>

                        <td style="width:20%" class="text-center"> Sản Phẩm</td>
                        <td class="text-center">Mã Sản Phẩm</td>
                        <td style="width:20%" class="text-center">Tiêu Đề</td>

                        <td style="width:25%">Nội Dung</td>

                        <td class="text-center">Điểm</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="btn btn-danger" data-toggle="modal" href="comment.php">
                                <em class="fa fa-trash"></em>
                            </a>
                        </td>

                        <td class="text-center">qưeqwe</td>

                        <td style="width:20%" class="text-center"> adasdasd</td>
                        <td class="text-center">adadad</td>
                        <td style="width:20%" class="text-center">ádasd</td>

                        <td style="width:25%">adad</td>

                        <td class="text-center">ádaad</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>