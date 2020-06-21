<?php
    require_once'scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/sanpham.scss');
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
    <title>Document</title>
</head>

<body>
    <div class="type-sanpham">
        <div class="container">
            <div class="title-table p-2 border">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <span>Danh sách sản phẩm</span>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right ">
                        <button type="button" class="btn btn-success">Thêm mới</button>
                    </div>
                </div>
            </div>
            <div>
                <table class="table border type-table">
                    <tr class="font-weight-bold">
                        <td>
                            <em class="fa fa-cog"></em>
                        </td>

                        <td>Mã sản phẩm</td>
                        <td>Hình ảnh</td>
                        <td>Tên sản phẩm</td>

                        <td> Loại sản phẩm</td>
                        <td>Giá cũ</td>
                        <td>Giá mới</td>

                        <td>Mô tả</td>

                        <td>Số lượng</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-outline-secondary" data-toggle="modal" href='danhsachsanpham.php'>
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a class="btn btn-danger" data-toggle="modal" href="comment.php">
                                <em class="fa fa-trash"></em>
                            </a>
                        </td>

                        <td>qưeqwe</td>
                        <td class="anh-san-pham"><img src="img/anh-1.png" alt=""></td>
                        <td>qưeqwe</td>

                        <td> adasdasd</td>
                        <td>adadad</td>
                        <td>ádasd</td>

                        <td>adad</td>

                        <td>ádaad</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>