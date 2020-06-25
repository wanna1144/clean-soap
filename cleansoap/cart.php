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
    <link rel="stylesheet" href="css/cart.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>">
  </head>
  <body>

    <div class="wrap">

      <?php include "include/header.php" ?>
      <!------------------------------------>
      <!------------------------------------>


      <section class="cart_sec">
        <div class="center">
          <div class="cart">
            <h2><i class="fa fa-shopping-bag"></i> 장바구니</h2>
            <div class="cart_list clear">
              <ul>
                <li class="pro_list clear">
                  <div class="list clear">
                    <div class="checkbox">
                      <input type="checkbox" name="" value="">
                    </div>
                    <div class="sum">
                      <div class="sum_up">
                        <div class="img">
                          <img src="img/best1.jpg" alt="">
                        </div>
                        <div class="product_name">
                          <p>clean soap</p>
                        </div>
                      </div>
                      <div class="price">
                        <ul class="clear">
                          <li>18,000원</li>
                          <li class="multi_img"><img src="img/icon_multi_order.jpg" alt=""></li>
                          <li>
                            <div class="qua_content">
                              <div class="qua_input">
                                <i class="input-number-decrement">–</i><input class="input-number" type="text" value="1" min="0" max="10"><i class="input-number-increment">+</i>
                              </div>
                            </div>
                          </li>
                          <li class="equal_img"><img src="img/icon_equal_order.jpg" alt=""></li>
                          <li>18,000원</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="c_btn">
                    <a href="#">삭제</a>
                  </div>
                </li>
                <li class="pro_list clear">
                  <div class="list clear">
                    <div class="checkbox">
                      <input type="checkbox" name="" value="">
                    </div>
                    <div class="sum">
                      <div class="sum_up">
                        <div class="img">
                          <img src="img/best1.jpg" alt="">
                        </div>
                        <div class="product_name">
                          <p>clean soap</p>
                        </div>
                      </div>
                      <div class="price">
                        <ul class="clear">
                          <li>18,000원</li>
                          <li class="multi_img"><img src="img/icon_multi_order.jpg" alt=""></li>
                          <li>
                            <div class="qua_content">
                              <div class="qua_input">
                                <i class="input-number-decrement">–</i><input class="input-number" type="text" value="1" min="0" max="10"><i class="input-number-increment">+</i>
                              </div>
                            </div>
                          </li>
                          <li class="equal_img"><img src="img/icon_equal_order.jpg" alt=""></li>
                          <li>18,000원</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="c_btn">
                    <a href="#">삭제</a>
                  </div>
                </li>
              </ul>

            </div>




          </div>

          <div class="total">
            <div class="inTotal">
              <ul class="clear">
                <li class="num">
                  <span>총 주문금액</span>
                  <p><strong>36,000</strong>원</p>
                </li>
                <li class="plus"><img src="img/icon_view_plus.jpg" alt=""></li>
                <li class="num">
                  <span>배송비</span>
                  <p><strong>2,500</strong>원</p>
                </li>
                <li class="equal"><img src="img\icon_equal_order.jpg" alt=""></li>
                <li class="num total_w">
                  <span>총 결제예상금액</span>
                  <p><strong>38,500</strong>원</p>
                </li>
              </ul>
            </div>
            <div class="inText">
              <p>주문/결제 시 쿠폰을 사용하시면 결제 예상금액이 변경될 수 있습니다.</p>
            </div>
          </div>

          <div class="btn">
            <a href="#" class="choice">선택상품 구매하기</a>
            <a href="#" class="all">전체상품 구매하기</a>
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
