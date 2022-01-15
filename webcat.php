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
    <title>Trang trại mèo cảnh</title>
    <link rel="shortcut icon" href="./img/PS_paw_logo_48f63a06-e9cf-4e19-a8f5-91c93a764bf5_32x32.png" type="image/png">
    <link rel="stylesheet" href="./css/webcat.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">  
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

            <li><a class="shopping" href="./giohang.php" title="Giỏ hàng"><i class="far fa-cart-plus"></i></a></li>
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
        <div class="photocat">
            <img src="./img/Banner-Mobile-Meo-Canh.jpg">
        </div>
        <div class="word">
            <h1 style="font-size: 130%; color:white; text-align: center ;">TRANG TRẠI MÈO CẢNH</h1>
        </div>
        <section id="cat">
            <div class="section-cat">
                <div class="picture">
                    <a href="./Meolongngan.php">
                        <img src="./img/cat/meo-anh-long-ngan.png" title="Mèo Anh lông ngắn" alt="meoanhlongngan">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>MÈO ANH</li>
                            <li class="unline-decoration-text">14.000.000đ</li>
                            <li class="normal">12.600.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-anh.png" title="Mèo Scottish Fold" alt="meo-Scottishfold">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>SCOTTISH FOLD</li>
                            <li class="unline-decoration-text">20.000.000đ</li>
                            <li class="normal">12.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./Meoxiem.php">
                        <img src="./img/cat/meo-xiem.png" title="Mèo Xiêm" alt="meoxiem">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>MÈO XIÊM</li>
                            <li class="unline-decoration-text">2.000.000đ</li>
                            <li class="normal">1.800.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-ba-tu.png" title="Mèo Ba Tư" alt="meobatu">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>MÈO BA TƯ</li>
                            <li class="unline-decoration-text">15.000.000đ</li>
                            <li class="normal">10.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/maincoon.png" title="Mèo Maine Coon" alt="mainecoon">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>MAINE COON</li>
                            <li class="unline-decoration-text">10.000.000đ</li>
                            <li class="normal">5.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-Scottish.jpg" title="Mèo Scottish" alt="meoscottish">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>SCOTTISH</li>
                            <li class="unline-decoration-text">30.000.000đ</li>
                            <li class="normal">20.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-Ragdoll-mat-xanh.png" title="Mèo Ragdoll" alt="meoRagdollmatxanh">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>RAGDOLL</li>
                            <li class="unline-decoration-text">15.000.000đ</li>
                            <li class="normal">12.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-bengal.jpg" alt="meobengal">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>BENGAL</li>
                            <li class="unline-decoration-text">22.000.000đ</li>
                            <li class="normal">15.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </main>
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
                    <h4><b></b><span style="font-size:90%;color:rgb(255, 130, 14);">ĐƯỜNG ĐẾN PET STORE</span><b></b>
                    </h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.343433065643!2d106.80230080187484!3d10.870012150562223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v1634649457242!5m2!1svi!2s"
                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
       

        </div>
    </footer>
</body>

</html>