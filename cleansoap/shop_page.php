<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <title>CLEAN SOAP</title>
    <meta name="keywords" content="크린솝, cleansoap, 새로운 비누, 민감한 비누, 아이와 함께, 천연비누, 착한 성분, 공식 웹사이트, 비건, 동물실험 안하는 비누">
    <meta name="descriptison" content="cleansoap은 동물실험을 하지 않는 천연비누 브랜드입니다. 민감한 피부도 아이도 모두 사용 할 수 있는 착한 성분을 사용합니다.">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">

    <!-- Google Fonts & Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/header_footer_style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/shop.css?v=<?php echo time(); ?>">


  </head>
  <body>

    <div class="wrap">

      <?php include "include/header.php" ?>
      <!------------------------------------>
      <!------------------------------------>

      <section class="shop_txt">
        <div class="center">
          <div class="shop_txt_box">
            <h2>매장안내</h2>
          </div>
          <div class="shop_txt_detail">
            <ul class="spot">
              <li value="kangnam">강남점</li>
              <li value="hongdae">홍대점</li>
            </ul>
          </div>
          <div class="shop_img_detail kangnam clear" >
            <img src="img/kangnam_img.jpg" alt="">
            <img src="img/mobile_img.jpg" alt="">
            <div class="img_txt_box kangnam clear" value="">
              <div class="img_under_box">
                <div class="top_txt">
                  <h3>강남점</p>
                  <p>GANGNAM 1ST OFFLINE SHOP</p>
                </div>
                <div class="line"></div>
                <div class="down_txt">
                  <p>서울특별시 서초구 서초대로78길 48</p>
                  <p>TEL.02-000-0000</p>
                  <p>MONDAY-SUNDAY / 11:30 - 21:30</p>
                </div>
              </div>
            </div>
          </div>
          <div class="shop_img_detail hongdae clear">
            <img src="img/hongdae_img.jpg" alt="">
            <img src="img/mobile(2)_img.jpg" alt="">
            <div class="img_txt_box kangnam clear" value="">
              <div class="img_under_box">
                <div class="top_txt">
                  <h3>홍대점</p>
                  <p>HONGDAE 20ND OFFLINE SHOP</p>
                </div>
                <div class="line"></div>
                <div class="down_txt">
                  <p>서울특별시 서초구 서초대로78길 48</p>
                  <p>TEL.02-000-0000</p>
                  <p>MONDAY-SUNDAY / 11:30 - 21:30</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include "include/footer.php" ?>

    </div>

    <!-- Livraries JS Files -->
    <script type="text/javascript" src=js/jquery.js></script>

    <!-- Main JS Files -->
    <script type="text/javascript" src=js/custom.js></script>
    <script type="text/javascript">

      $(document).ready(function(){

        $('.spot li').click(function(){
          $('.spot li').removeClass()
          $(this).addClass('on')
        });

      });

      $(document).ready(function(){

        $(".spot li").click(function(){
          var spotTxt=$(this).attr("value");
          $(".shop_img_detail").addClass("hide");
          $("."+spotTxt).removeClass("hide");
        })

        $(".spot li:nth-child(1)").trigger("click");

      });

    </script>



  </body>
</html>


















<!--  -->
