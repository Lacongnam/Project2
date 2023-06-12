<?php
if (!isset($_SESSION['idadmin'])) {
  header('Location: /Project3/ckhachhang/dangnhap');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CNTV STORE</title>
  <link href="css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="/Project3/public/css/quanli.css">
</head>

<body>
  <div class="logoql">
    <img src="/Project3/public/image/hinhlogo/logo1.png" alt="">
    <h1>TRANG QUẢN LÝ WEBSITE</h1>
  </div>
  <div class="row">
    <div class="col-8 hinh">
      <img src="/Project3/public/image/hinhbia/quanli.png" alt="">
    </div>
    <div class="col-4">
      <div class="row text-center">
        <div class="col-12 my-2">
          <a href="/Project3/ckhachhang/danhsachkhachhang/" class="btn btn-primary" style="font-size:25px;">QUẢN LÍ KHÁCH HÀNG</a>
        </div>
        <div class="col-12 mt-5">
          <a href="/Project3/cquanlimt/tatcasanpham/" class="btn btn-outline-primary" style="font-size:25px;">QUẢN LÍ SẢN PHẨM</a>
        </div>
      </div>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>