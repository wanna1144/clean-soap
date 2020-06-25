<header>
  <div class="login">
    <div class="center clear">
      <ul class="login_list clear">
        <li><a href="cart.php">장바구니</a></li>
        <li><a href="mypage.php">마이페이지</a></li>
        <li><a href="join.php">회원가입</a></li>
        <li><a href="login.php">로그인</a></li>
      </ul>
    </div>
  </div>

  <div class="pc_header">
    <div class="center clear">
      <h2>clean soap</h2>
      <a href="index.php" class="logo"><img src="img/cleansoap_logo.png" alt=""></a>
      <ul class="gnb">
        <li>
          <a href="brandstory.php">BRAND&nbsp;&nbsp;STORY</a>
          <ul class="sub_gnb">
            <li><a href="brandstory.php">브랜드 스토리</a></li>
            <li><a href="shop_page.php">매장 안내</a></li>
          </ul>
        </li>
        <li>
          <a href="store.php">STORE</a>
          <ul class="sub_gnb">
            <li><a href="#" onclick="store(1)">신제품</a></li>
            <li><a href="#" onclick="store(2)">건성</a></li>
            <li><a href="#" onclick="store(3)">지성</a></li>
            <li><a href="#" onclick="store(4)">복합성</a></li>
            <li><a href="#" onclick="store(5)">민감성</a></li>
          </ul>
        </li>
        <li>
          <a href="review.php">REVIEW</a>
          <ul class="sub_gnb">
            <li><a href="review.php">사용후기</a></li>
          </ul>
        </li>
        <li>
          <a href="event.php">EVENT</a>
          <ul class="sub_gnb">
            <li><a href="event.php">이벤트</a></li>
            <li><a href="point.php">적립안내</a></li>
          </ul>
        </li>
        <!-- <li>
          <a href="FAQ.php">C/S&nbsp;&nbsp;CENTER</a>
          <ul class="sub_gnb">
            <li><a href="FAQ.php">FAQ</a></li>
            <li><a href="Q&A.php">Q&A</a></li>
          </ul>
        </li> -->
      </ul>
      <div class="search_box">
        <input type="text" name="" value="">
        <a href="#"><i class="fa fa-search"></i></a>
      </div>
      <div class="mobile">
        <ul class="m_gnb clear">
          <li><a href="#"><i class="fa fa-bars"></i></a></li>
          <li><a href="#"><i class="fa fa-search"></i></a></li>
          <li><a href="login.php"><i class="fa fa-user"></i></a></li>
        </ul>
      </div>

      <div class="m_menu_back">

      </div>
      <div class="m_menu">
        <a href="#"><i class="fa fa-times"></i></a>
        <ul>
          <li class="m_menu_toggle">
            <div class="m_button">
              <div class="float clear">
                <a href="#">BRAND&nbsp;&nbsp;STORY</a>
                <a class="angle" href="#"><i id="angle" class="fa fa-angle-down"></i></a>
              </div>
              <div class="m_toggle">
                <ul>
                  <li><a href="brandstory.php">브랜드 스토리</a></li>
                  <li><a href="shop_page.php">매장 안내</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="m_menu_toggle">
            <div class="m_button">
              <div class="float clear">
                <a href="#">STORE</a>
                <a class="angle" href="#"><i id="angle" class="fa fa-angle-down"></i></a>
              </div>
              <div class="m_toggle">
                <ul>
                  <li><a href="#" onclick="store(1)">신제품</a></li>
                  <li><a href="#" onclick="store(2)">건성</a></li>
                  <li><a href="#" onclick="store(3)">지성</a></li>
                  <li><a href="#" onclick="store(4)">복합성</a></li>
                  <li><a href="#" onclick="store(5)">민감성</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="m_menu_toggle">
            <div class="m_button">
              <div class="float clear">
                <a href="#">REVIEW</a>
                <a class="angle" href="#"><i id="angle" class="fa fa-angle-down"></i></a>
              </div>
              <div class="m_toggle">
                <ul>
                  <li><a href="review.php">사용후기</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="m_menu_toggle">
            <div class="m_button">
              <div class="float clear">
                <a href="#">EVENT</a>
                <a class="angle" href="#"><i id="angle" class="fa fa-angle-down"></i></a>
              </div>
              <div class="m_toggle">
                <ul>
                  <li><a href="event.php">이벤트</a></li>
                  <li><a href="point.php">적립안내</a></li>
                </ul>
              </div>
            </div>
          </li>
          <!-- <li class="m_menu_toggle">
            <div class="m_button">
              <div class="float clear">
                <a href="#">C/S&nbsp;&nbsp;CENTER</a>
                <a class="angle" href="#"><i id="angle" class="fa fa-angle-down"></i></a>
              </div>
              <div class="m_toggle">
                <ul>
                  <li><a href="FAQ.php">FAQ</a></li>
                  <li><a href="Q&A.php">Q&amp;A</a></li>
                </ul>
              </div>
            </div>
          </li> -->


        </ul>
      </div>

    </div>
  </div>
</header>

  <script type="text/javascript" src=js/jquery.js></script>
  <script type="text/javascript">


    function store(index){
      window.location.href="store.php?index="+index;
    }

    $(document).ready(function(){

      $(".fa-bars").click(function(){
        $(".m_menu").animate({left: "0"},220);
        $(".m_menu_back").show();
      });

      $(".fa-times").click(function(e){
        e.preventDefault();
        $(".m_menu").animate({left: "100%"});
        $(".m_menu_back").hide();
      });

      $(".m_menu_back").click(function(e){
        e.preventDefault();
        $(".m_menu").animate({left: "100%"});
        $(".m_menu_back").hide();
      });

      $(".m_button").on("click", function() {
        if ($(this).hasClass("act")) {
          $(this).removeClass("act");
          $(this)
            .find(".m_toggle")
            .slideUp(500);
          $(this).find("#angle").attr("class", "fa fa-angle-down")
        } else {
          $(".m_button").removeClass("act");
          $(".m_button").find("#angle").attr("class", "fa fa-angle-down")
          $(this).addClass("act");
          $(".m_toggle").slideUp(500);
          $(this)
            .find(".m_toggle")
            .slideDown(500);
          $(this).find("#angle").attr("class", "fa fa-angle-up")
        }
      });

      $(window).on("scroll", function(){
        var scroll = $(window).scrollTop();

        if(scroll>50){
          $("header").addClass("small");
        }else {
          $("header").removeClass("small");
        }
      });


    });



    </script>
