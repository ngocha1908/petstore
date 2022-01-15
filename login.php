<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#f7882f">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/PS_paw_logo_48f63a06-e9cf-4e19-a8f5-91c93a764bf5_32x32.png" type="image/png">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>Đăng nhập</title>
  <link href="./css/doan.css" type="text/css" rel="stylesheet">
  <link href="./css/dangnhap.css" type="text/css" rel="stylesheet">
</head>
<body>
  <header>
     <!------------------- Header logo -------------------------------------->
     <div class="logo">
      <a href="./doan.php" title="Pet Store" rel="home">
        <img src="./img/Redesign-LogoPetStore-02-1.png" alt="Pet Store" />
    </div>

      <!------------------- MENU NAV-------------------------------------->
    <div class="menu">
      <li><a href="./doan.php">HOME</a></li>
      <li><a href="">THÚ CƯNG <i class="fa fa-caret-down"></i></a>
        <ul class="petmenu">
          <li><a href="./webdog.php">Chó Cảnh</a>
         
          </li>
          <li><a href="./webcat.php">Mèo Cảnh </a>
          </li>
          <li><a href="THÚ CƯNG KHÁC">Thú cưng khác</a>
            
          </li>
        </ul>
      </li>
      <li><a href="">PHỤ KIỆN <i class="fa fa-caret-down"></i></a>
        <ul class="phukien-menu">
          <li><a href="">Balo & túi sách</a></li>
          <li><a href="">Chuồng & nệm</a></li>
          <li><a href="">Dụng cụ vệ sinh</a></li>
          <li><a href="">Đồ chơi & phụ kiện huấn luyện</a></li>
          <li><a href="">Thức ăn</a></li>
          <li><a href="">Vật dụng ăn uống</a></li>
          <li><a href="">Vòng cổ & dây dẫn</a></li>
        </ul>
      </li>
      <li><a href="">DỊCH VỤ <i class="fa fa-caret-down"></i></a>
        <ul class="dichvumenu">
          <li><a href="">Trông giữ</a></li>
          <li><a href="">Dịch vụ làm đẹp</a></li>
          <li><a href="">Dịch vụ hỏa táng thú cưng</a></li>
        </ul>
      </li>
      <li><a href="">THÔNG TIN</a></li>
    </div>
    <div class="orthers">
      <li><input placeholder="Bạn muốn tìm gì..." type="search"></li>
        <!-------------PHP--------------------->
        <?php if(isset($user['username'])){?>
      <li><?php echo '<a href="logout.php" style="margin-right:10px; font-size:20px;"> '.$user['username'].' </a>';?>
    </li>
      <?php }else{ ?>
       <li><a href="login.php"><button id="userButton" class="dropbtn"><i class="fas fa-user"></i></button></a>
    </li>
      <?php } ?>

      <li><a class="shopping" href="./giohang.php"><i class="far fa-cart-plus"style="color: black;"></i></a></li>
    </div>
  </header>

<!---------------------Main---------------------------------------------------------->
  <main>
    <h1 style="color:aqua;">ĐĂNG NHẬP</h1>
    <form action="login_submit.php" method="POST">
    <div class="dnhap">
      <label><i class="fas fa-user" style="color:orange; margin-right: 5px;margin-bottom: 5px;"></i> Tên đăng nhập/Email <span style="color:crimson">*</span></label>
      <input type="text" name="username">
    </div>
    <div class="dnhap">
      <label><i class="fas fa-lock" style="color:orange; margin-right: 10px;"></i>Mật khẩu <span style="color:crimson">*</span></label>
      <input type="password" name="password" style="margin-top: 2px;">
    </div>
    <button class="dangnhap">Đăng nhập</button>
      <div class="dktk"><em>Bạn chưa có tài khoản?
        <a href="dangki.php" style="color: darkturquoise; text-decoration: underline;">Đăng ký</em></a>
    </div>
    <div class="auth-form__aside">
      <div class="auth-form__help">
        <span class="auth-form__help-link auth-form__help-forgot" style="font-size:20px;">Quên <a href="#" style="color: darkturquoise;"> mật khẩu?</a></span>
        <span class="auth-form__help-separate"></span>
        <a href="" class="auth-form__help-link" style="font-size:20px; margin-right: 50px;">Cần trợ giúp?</a>
      </div>
    </div>
</form>
  </main>
<!----------FOOTER------------------------------------>
  <footer>
    <div class="footerphoto">
      <img src="./img/footerphoto.png">
    </div>
   <section id="sectionfooter">
      <div class="footertitle">
        <div>
          <h4>VỀ CHÚNG TÔI</h4>
          <ul>
            <li><a href="">GIỚI THIỆU</a></li>
            <li><a href="">HỢP TÁC NHÂN GIỐNG</a></li>
            <li><a href="">CỬA HÀNG PHỤ KIỆN</a></li>
          </ul>
        </div>
        <div>
          <h4>HỖ TRỢ KHÁCH HÀNG</h4>
          <ul>
            <li><a href="">HƯỚNG DẪN MUA HÀNG</a></li>
            <li><a href="">CHÍNH SÁCH BẢO HÀNH</a></li>
            <li><a href="">ĐIỀU KHOẢN VÀ DỊCH VỤ</a></li>
            <li><a href="">MUA TRẢ GÓP 0%</a></li>
          </ul>
        </div>
        <div>
          <h4>THÔNG TIN LIÊN HỆ</h4>
          <ul>
            <li><a href=""><i class="fas fa-map-marker-alt"></i> KP6, LINH TRUNG, THỦ ĐỨC, TP HCM</a></li>
            <li><a href=""><i class="far fa-phone-alt"></i> Tư vấn mua: <span style="color: #e26e02;"><a
                    style="color: #e26e02;" href="tel:0123456789">0123 456 789</a></span></a></li>
          </ul>
        </div>
        <div>
          <h4><b></b><span style="font-size:90%;color:rgb(255, 130, 14);">ĐƯỜNG ĐẾN PET STORE</span><b></b></h4>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.343433065643!2d106.80230080187484!3d10.870012150562223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v1634649457242!5m2!1svi!2s"
            width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </section>
  </footer>

</body>
</html>