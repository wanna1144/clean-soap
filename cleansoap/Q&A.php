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


    <link rel="stylesheet" href="css/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/header_footer_style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/FAQ.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/Q&A.css?v=<?php echo time(); ?>">

  </head>
  <body>

    <div class="wrap">

      <?php include "include/header.php" ?>
      <!------------------------------------>
      <!------------------------------------>

      <section class="center">
        <div class="bar_box">
          <div class="bar_txt">
            <div class="bar_txt_right">
              <p>Q&A</p>
              <p>자주 하는 질문</p>
            </div>
          </div>
          <div class="faq_button clear">
            <div class="faq_button_box clear">
              <div class="faq_button_detail">
                <span>1:1 상담</span>
              </div>
            </div>
          </div>
        </div>

      <section class="top_txt_sec">
        <div class="center">
          <div class="top_txt">
            <h2>TOP 10</h2>
          </div>
          <div class="listWrap">
            <div class="list">
              <ul class="detail_list">
                <li>
                  <p>쿠폰</p>
                  <p><span>Q.</span> 클린솝 쿠폰은 어떻게 사용하나요?</p>
                  <a href="#" class="angle">
                    <i id="angle" class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="down_list">
              <div class="down_list_detail">
                <p><span>A.</span> 클린솝 쿠폰은 온라인 혹은 오프라인 매장에서 사용 가능하다며 본품교환,할인구폰,제휴혜택 등으로 교환 가능합니다.</p>
                <div class="inlist">
                  <p>온라인:씨드 스토어</p>
                  <p>매장:뷰티포인트 카드 록은 앱카드 지참하여 결제 시 사용 요청</p>
                  <p>자세한 사용 및 주의사항은 클린솝스토어 내에서 부탁드립니다.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="listWrap">
            <div class="list">
              <ul class="detail_list">
                <li>
                  <p>교환문의</p>
                  <p><span>Q.</span> 교환은 어떻게 하나요?</p>
                  <a href="#" class="angle">
                    <i id="angle" class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="down_list">
              <div class="down_list_detail">
                <p><span>A.</span> 클린솝 쿠폰은 온라인 혹은 오프라인 매장에서 사용 가능하다며 본품교환,할인구폰,제휴혜택 등으로 교환 가능합니다.</p>
                <div class="inlist">
                  <p>온라인:씨드 스토어</p>
                  <p>매장:뷰티포인트 카드 록은 앱카드 지참하여 결제 시 사용 요청</p>
                  <p>자세한 사용 및 주의사항은 클린솝스토어 내에서 부탁드립니다.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <?php include "include/footer.php" ?>


    <!-- Livraries JS Files -->
    <script type="text/javascript" src=js/jquery.js></script>

    <!-- Main JS Files -->
    <script type="text/javascript" src=js/custom.js></script>
    <script type="text/javascript">

      $(document).ready(function(){

        $(".angle").on("click", function() {
          if ($(this).hasClass("on")) {
            $(this).removeClass("on");
            $(this).parent().parent().parent().siblings(".down_list").slideUp("fast");
            $(this).find("#angle").attr("class", "fa fa-angle-down");
          } else {
            $(".angle").removeClass("on");
            $(this).addClass("on");
            $("#angle").attr("class", "fa fa-angle-down");
            $(".down_list").slideUp(200);
            $(this).parent().parent().parent().siblings(".down_list").slideDown("fast");
            $(this).find("#angle").attr("class", "fa fa-angle-up");
          }
        });
      });

    </script>


  </body>
</html>
