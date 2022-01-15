<?php 
include 'config.php';
//$user = [];
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
//$user = $_SESSION['user'];
?>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">  
  <title>Thông tin mô tả</title>
  <link href="./css/css.css" type="text/css" rel="stylesheet">
</head>

<body>
  <header>
    <!------------------- Header logo -------------------------------------->
    <div class="logo">
      <a href="./doan.html" title="Pet Store" rel="home">
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
<!---------------------------------------ICON-BAR-------------------------------------------------->
<div class="icon-bar">
  <a href="https://www.facebook.com/" class="facebook" title="Follow on Facebook"><i class="fab fa-facebook"></i></a>
  <a href="https://www.youtube.com/channel/UCZsffo0QcIMCHKI6MMS-dQw/featured" class="youtube"
    title="Follow on Facebook"><i class="fab fa-youtube"></i></i></a>
  <a href="tel:0123456789" class="iconphone" title="Call us"><i class="fas fa-phone"></i></a>
  <a href="https://www.instagram.com/" class="ig" title="Follow on Instagram"><i class="fab fa-instagram"></i></a>
</div>

  <main>
    <div class="trangchu">
      <ul>
        <li><a href="">
        <li>Trang chủ /</a></li>

        <li><a href="">
        <li>Thú cưng /</a></li>

        <li><a href="">
        <li>Trang trại mèo cảnh /</a></li>
        <li><a href="">
        <li>Mèo xiêm</a></li>
        <li class="BD1"></li>
      </ul>
    </div>
    <div class="dong1">
      <p>Mèo xiêm</p>
    </div>
    <div class="cat1">
      <div class="image-cat1">
        <img width="500" height="400" src="./img/cat3.jpg" alt="Siamese kitty">
      </div>
      <div class="sale">
        <ul>
          <li class="unline-decoration-text">2.000.000đ</li>
          <li class="normal">1.800.000đ</li>

        </ul>
      </div>
      <div class="word1">
        <p>Giống Mèo: Mèo xiêm </p><br>
        <p>Màu sắc: Trắng và xám đen</p><br>
        <p>Độ tuổi: 4 tháng 20 ngày</p><br>
        <p>Nguồn gốc: Thái Lan</p><br>
        <p>Tình trạng: ổn định</p><br>
        <p>Sổ sức khỏe: có</p><br>
        <p>Tiêm vacxin: Đã tiêm 2 mũi</p>
      </div>
      <!-- The Modal -->
      <div class="giohang">
        <button id="cart">
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
          Thêm Vào Giỏ Hàng
        </button>
      </div>
      <div id="myModal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="modal-title">Bạn đã thêm vào giỏ hàng thành công!</span>
            <span class="close">&times;</span>
          </div>

          <div class="modal-body">
            <div class="cart-row" style="display: flex;">
              <div style="width: 30%;" class="text-left">Thú Cưng</div>
              <div style="width: 20%;" class="text-center">Giá</div>
              <div style="width: 20%;" class="text-center">Số Lượng</div>
            </div>
            <div class="cart-items">
              <div class="cart-row" style="display: flex; flex-wrap: nowrap;">
                <div class="cart-item cart-column" style="width: 30%;">
                  <img class="cart-item-image" src="./img/cat3.jpg" width="100" height="100">
                  <span class="cart-item-title">Mèo Xiêm</span>
                </div>
                <span class="cart-price cart-column" style="width: 20%; text-align: center; margin: 20px auto;">1800000đ</span>
                <div class="cart-quantity cart-column" style="width: 20%;">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button">Xóa</button>
                </div>
              </div>
            </div>
            <div class="cart-total" style="margin-top: 5px;">
              <strong class="cart-total-title">Tổng tiền thanh toán:</strong>
              <span class="cart-total-price">1800000VNĐ</span>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-footer">Đóng</button>
            <button type="button" class="btn btn-primary order"><a href="./giohang.php">Thanh Toán</a></button>
          </div>
        </div>
      </div>
      <!-- Java -->
      <script src="./js/main.js"></script>
      <div class="Mota">
        <p>Mô tả</p>
      </div>
      <div class="word3">
        <p>Mèo Xiêm (hay còn gọi là Siamese) là giống mèo lông ngắn phương Đông được công nhận. Được xem như một vị thần
          mang lại may mắn và loài mèo được nuôi phổ biến ở nhiều nước châu Âu và Đông Nam Á, là giống mèo rất thông
          minh chân tình và được đánh giá là người bạn đáng tin cậy đối với con người.</p>
      </div>
      <div class="Cat2">
        <div class="image-cat2">
          <img width="900" height="500" src="./img/cat4.jpg" alt="Siamese">
        </div>
      </div>
      <div class="word4">
        <p>Mèo Xiêm được phân làm hai loại: Truyền thống và hiện đại. Mỗi loại đều có một số đặc điểm khác nhau để nhận
          dạng. Cụ thể như sau:</p>
        <ul>
          <li><em>Mèo Xiêm hiện đại:</em> Có vẻ đẹp góc cạnh với thân hình dài, chân thẳng và cao, đầu với tai hình tam
            giác, đuôi thon dài.</li>
          <li><em>Mèo Xiêm cổ:</em> Thân hình khá mũm mĩm, cấu trúc xương lớn, mặt tròn.</li>
          <p></p><br>
          <p>Tuy có vài điểm khác nhau giữa mèo Xiêm truyền thống và hiện đại nhưng nhìn chung chúng đều có các đặc điểm
            nổi bật nhất của giống mèo này như:</p>
          <li>Đôi mắt xanh, to, có hình quả hạnh nhân, rất sâu, đầy biểu cảm.</li>
          <li>Lông ngắn nhưng bóng và đẹp, mọc sắt thân. Màu lông của mèo Xiêm rất đa dạng như: Màu xanh nhẹ, màu xám
            hải cẩu, màu hoa tử đinh hương, màu socola, màu lông linh miêu, màu mai rùa (tortie).</li>
          <li>Hình dáng mũm mĩm, béo tròn so với giống mèo khác nhưng chúng vẫn uyển chuyển.</li>
        </ul>
      </div>
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
        

    </div>
    </footer>

  </main>