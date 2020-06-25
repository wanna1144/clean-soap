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
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Noto+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css' rel='stylesheet' type='text/css'>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/header_footer_style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>">
  </head>
  <body>

    <div class="wrap">

      <?php include "include/header.php" ?>
      <!------------------------------------>
      <!------------------------------------>



      <section class="login_sec">
        <div class="center">

          <div class="sub_tit">
            <h2>로그인</h2>
          </div>

          <div class="login_form clear">
            <form class="" action="" method="post">
              <div class="box_left clear">
                <h3>회원 로그인</h3>
                <div class="left">
                  <div class="box_form">
                    <div>
                      <input class="id" type="text" placeholder="아이디">
                    </div>
                    <div>
                      <input type="password" placeholder="비밀번호">
                    </div>
                  </div>
                </div>
                <button type="button" name="button">로그인</button>
              </div>
            </form>

            <form class="" action="" method="post">
              <div class="box_right">
                <h3>비회원 주문조회</h3>
                <div class="right">
                  <div class="box_form">
                    <div>
                      <input class="id" type="text" placeholder="주문번호">
                    </div>
                    <div>
                      <input type="text" placeholder="전화번호">
                    </div>
                  </div>
                </div>
                <button type="button" name="button">주문조회</button>
              </div>
            </form>
          </div>

          <div class="login_join">
            <div class="sec_bac">
              <div class="membership">
                <p>회원가입시 적립금 5,000원 지급!</p>
                <a href="#">회원가입</a>
              </div>
              <div class="id_find">
                <p>아이디/비밀번호를 잊어버리셨나요?</p>
                <a href="#">아이디/비밀번호 찾기</a>
              </div>
            </div>
          </div>

          <div class="benefit_sec clear">
            <div class="benefit clear">
              <p>CLEAN SOAP 회원만의</p>
              <span>특별한 혜택</span>
            </div>
            <div class="point clear">
              <div class="point_img">
                <img src="img/point.png" alt="">
              </div>
              <div class="p_letter">
                <p>혜택 1.</p>
                <span>가입시 현금처럼 사용가능한<br>적립금 5,000원 지급</span>
              </div>
            </div>
            <div class="gift clear">
              <div class="gift_img">
                <img src="img/gift.png" alt="">
              </div>
              <div class="g_letter">
                <p>혜택 2.</p>
                <span>생일쿠폰, 적립금, 세일정보등<br>다양한 혜택 제공</span>
              </div>
            </div>
          </div>

        </div>
      </section>



      <!------------------------------------>
      <!------------------------------------>
      <?php include "include/footer.php" ?>

    </div>

    <!-- Livraries JS Files -->
    <script type="text/javascript" src=js/jquery.js></script>

    <!-- Main JS Files -->
    <script type="text/javascript" src=js/custom.js></script>

  </body>
</html>
