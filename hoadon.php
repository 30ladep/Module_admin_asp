<?php
    require_once'scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/hoadon.scss');
    $str = $scss->compile($str);
    file_put_contents('css/hoadon.css', $str);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hoadon.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">
    <title>Document</title>
</head>

<body>
    <div class="type-hoadon">
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

                        <td>Hóa đơn</td>
                        <td>Mã khách hàng</td>
                        <td>Ngày lập</td>

                        <td>Địa chỉ nhận hàng</td>
                        <td>Số điện thoại</td>
                        <td>Tổng tiền</td>
                        <td>Trạng thái</td>

                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-outline-secondary" data-toggle="modal" href='#'>
                                <i class="fas fa-check"></i>
                            </a>
                            <a class="btn btn-danger" data-toggle="modal" href="#">
                                <em class="fa fa-trash"></em>
                            </a>
                        </td>

                        <td>qưeqwe</td>
                        <td>adasd</td>
                        <td>qưeqwe</td>

                        <td> adasdasd</td>
                        <td>adadad</td>
                        <td>ádasd</td>
                        <td class="bg-danger">ádasd</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>