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
    <link rel="stylesheet" href="css/mypage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>">
  </head>
  <body>

    <div class="wrap">

      <?php include "include/header.php" ?>
      <!------------------------------------>
      <!------------------------------------>


      <section class="mypage_sec">
        <div class="center">

          <div class="sub_tit">
            <h2>마이페이지</h2>
          </div>
          <div class="my_info clear">
            <div class="my_con clear">
              <div class="m_text clear">
                <div class="txt">
                  <p>이원화님의</p>
                  <span>현재 회원등급은 <em>[신규회원]</em> 입니다.</span>
                </div>
                <button type="button" name="button">회원정보수정</button>
              </div>
              <div class="m_img clear">
                <div class="coupon">
                  <div class="float clear">
                    <div class="img">
                      <img src="img/icon_coupon.png" alt="">
                    </div>
                    <div class="text">
                      <p>쿠폰</p>
                    </div>
                  </div>
                  <div class="number">
                    <b>0장</b>
                  </div>
                </div>
                <div class="point">
                  <div class="float clear">
                    <div class="img">
                      <img src="img/icon_mileage.png" alt="">
                    </div>
                    <div class="text">
                      <p>적립금</p>
                    </div>
                  </div>
                  <div class="number">
                    <b>5,000원</b>
                  </div>
                </div>
                <div class="money">
                  <div class="float clear">
                    <div class="img">
                      <img src="img/icon_emoney.png" alt="">
                    </div>
                    <div class="text">
                      <p>예치금</p>
                    </div>
                  </div>
                  <div class="number">
                    <b>0원</b>
                  </div>
                </div>
                <div class="total">
                  <div class="float clear">
                    <div class="img">
                      <img src="img/icon_total.png" alt="">
                    </div>
                    <div class="text">
                      <p>총 누적금액</p>
                    </div>
                  </div>
                  <div class="number">
                    <b>0원</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="my_order">
            <div class="up">
              <h3>나의 주문처리 현황</h3>
            </div>
            <div class="down clear">
              <div class="d_con1">
                <p>배송준비중</p>
                <b>0</b>
              </div>
              <div class="d_con2">
                <p>배송중</p>
                <b>0</b>
              </div>
              <div class="d_con3">
                <p>배송완료</p>
                <b>0</b>
              </div>
            </div>
          </div>

        </div> <!-- end center -->
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
