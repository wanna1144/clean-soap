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
    <link rel="stylesheet" href="css/join.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>">
  </head>
  <body>

    <div class="wrap">

      <?php include "include/header.php" ?>
      <!------------------------------------>
      <!------------------------------------>


      <section class="join_sec">
        <div class="center">

          <div class="sub_tit">
            <h2>회원가입</h2>
          </div>

          <div class="join_form">
            <form class="" action="" method="post">
              <div class="form">
                <p class="clear">
                  <span class="col1">아이디</span>
                  <span class="col2 id"><input type="text" name="id"></span>
                  <span class="col3"><button type="button" name="button" onclick="">중복확인</button></span>
                </p>
              </div>
              <div class="form">
                <p class="clear">
                  <span class="col1">이름</span>
                  <span class="col2"><input type="text" name="name"></span>
                </p>
              </div>
              <div class="form">
                <p class="clear">
                  <span class="col1">비밀번호</span>
                  <span class="col2"><input type="password" name="pass"></span>
                </p>
              </div>
              <div class="form">
                <p class="clear">
                  <span class="col1">비밀번호 확인</span>
                  <span class="col2"><input type="password" name="pass_confirm"></span>
                </p>
              </div>
              <div class="form">
                <p class="clear">
                  <span class="col1">이메일</span>
                  <span class="col2 email">
                    <input type="text" name="email1" class="email1">
                    <i>@</i>
                    <input type="text" name="email2" class="email2">
                  </span>
                </p>
              </div>
              <div class="form form_btn clear">
                <em class="join_btn"><i class="fa fa-pencil-square-o"></i>회원가입</em>
                <em class="login_btn"><i class="fa fa-lock"></i>로그인</em>
              </div>
            </form>
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
