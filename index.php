<?php
require_once 'models.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
      <header id="header" class="top-head">
         <!-- Static navbar -->
          <?php
          include 'nav_bar.php';
          ?>
      </header>
      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Tìm kiếm đối tác của bạn ở đây</h1>
                     <h4>Chưa bao giờ dễ dàng đến thế</h4>
                     <div class="product-sh">
                        <div class="col-sm-9">
                           <div class="form-sh">
                              <input id="index-search" type="text" placeholder="Tìm kiếm sản phẩm" >
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="form-sh"> <button onclick="search()" class="btn btn-primary" style="padding: 20px">Tìm kiếm</button> </div>
                        </div>
                        <p>Hoặc click<a href="category.php?type=all"> vào đây </a></p>
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="category.php?type=Ghế gỗ">
                        <div class="box-img">
                           <h4>Ghế gỗ</h4>
                           <img src="images/product/1.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="category.php?type=Ghế nệm">
                        <div class="box-img">
                           <h4>Ghế nệm</h4>
                           <img src="images/product/2.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="category.php?type=Ghế gỗ không tay">
                        <div class="box-img">
                           <h4>Ghế gỗ không tay</h4>
                           <img src="images/product/4.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="category.php?type=Sofa">
                        <div class="box-img">
                           <h4>Sofa</h4>
                           <img src="images/product/5.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="categories_link">
                     <a href="category.php?type=all">Tất cả danh mục</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="cat-main-box">
         <div class="container">
            <div class="row panel-row">
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/xpann-icon.jpg" class="icon-small" alt="">
                        <h4>Dẫn lối</h4>
                        <p>Nội thất toàn cầu, giá nội địa
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/create-icon.jpg" class="icon-small" alt="">
                        <h4>Sáng tạo</h4>
                        <p>Sáng tạo với vô vàn kiểu dáng khác nhau
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/get-icon.jpg" class="icon-small" alt="">
                        <h4>Ý tưởng</h4>
                        <p>Cảm hứng là khởi đầu cho mọi ý tưởng
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products_exciting_box">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="exciting_box f_pd">
                     <img src="images/exciting_img-01.jpg" class="icon-small" alt="" />
                     <h4>Khám phá những điều <strong>thú vị</strong>
                     </h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris..
                     </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                  <div class="exciting_box l_pd">
                     <img src="images/exciting_img-02.jpg" class="icon-small" alt="" />
                     <h4><strong>Trở thành cộng tác viên Chamb</strong> và phát triển sự nghiệp ngay hôm nay</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris..
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="start-free-box">
         <div class="container">
            <div class="row">
               <div class="container">
                  <div class="main-start-box">
                     <div class="free-box-a clearfix">
                        <div class="col-md-6 col-sm-6">
                           <div class="left-a-f">
                              <h3>Một nền tảng bán hàng toàn quốc</h3>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="right-a-f">
                              <p>Chamb là nhà phân phối duy nhất mà tôi tin dùng. Sản phẩm của Chamb đã xuất hiện toàn quốc, không ngừng phát triển sang toàn lục địa
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="main-start-box">
                  <div class="bg_img_left"><img src="images/bg_img1.png" alt="#" /></div>
                  <div class="container">
                     <div class="buyer-box clearfix">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                           <div class="left-buyer">
                              <img class="img-responsive" src="images/creat_pro.png" alt="#" />
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                           <div class="right-buyer">
                              <h4>Người mua</h4>
                              <h2>Đặt hàng ngay<br>
                                 <span>Với kênh cung cấp uy tín nhất<span>
                              </h2>
                              <p>Never worry about sales or income ftom outbound
                                 channels. with chamb your store is directly
                                 connected to thousands of interested in your
                                 products.
                              </p>
                               <a href="register.php">Tạo tài khoản ngay </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="bg_img_right"><img src="images/bg_img1.png" alt="#" /></div>
               <div class="main-start-box">
                  <div class="container">
                     <div class="supplier clearfix">
                        <div class="col-md-5 col-sm-6">
                           <div class="left-supplier">
                              <h4>Cộng tác viên</h4>
                              <h2>Phát triển doanh nghiệp <br><span>Theo hướng của bạn</span></h2>
                              <p>Never worry about sales or income ftom outbound
                                 channels. with chamb your store is directly
                                 connected to thousands of interested in your
                                 products.
                              </p>
                              .
                              <a href="#">Trở thành cộng tác viên</a>
                           </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                           <div class="right-supplier">
                              <img class="img-responsive" src="images/supplier-pc-img.png" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products">
         <div class="main-products">
            <h2>SẢN PHẨM NỔI BẬT</h2>
            <div class="product-slidr">
               <div class="slider">
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr1.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Table with Lights</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr2.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr3.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Wood Sofaplatform</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr4.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Wall Sticker</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr1.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr2.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr3.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include('footer.php') ?>
      <script>
          function search() {
              name = $("#index-search").val();
              window.location.assign('category.php?type=all&name='+name);
          }
      </script>
      <!--main js-->
      <script src="js/jquery-1.12.4.min.js"></script>
      <!--bootstrap js--> 
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap-select.min.js"></script>
      <script src="js/slick.min.js"></script>
      <script src="js/wow.min.js"></script>
      <!--custom js--> 
      <script src="js/custom.js"></script>
   </body>
</html>