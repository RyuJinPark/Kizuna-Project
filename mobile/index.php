<? include_once $_SERVER["DOCUMENT_ROOT"]."/kizuna_rwd/mobile/inc/start.html" ?>
    <link rel="stylesheet" href="/kizuna_rwd/mobile/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="/kizuna_rwd/mobile/js/pcweb_mobileweb_url_resize.js"></script> -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            var swiper = new Swiper(".mySwiper", {});
        })
    </script>



</head>
<body>
<? include_once $_SERVER["DOCUMENT_ROOT"]."/kizuna_rwd/mobile/inc/header.html" ?>
    <!-- 헤더 끝 -->
    <!-- 메인 -->
    <main>
        <div id="visual_wrap" class="swiper mySwiper">
        <ul class="visual_list swiper-wrapper">
        <li class="swiper-slide">
            <section class="main_visual">
            <h2 class="hidden">비주얼 영역</h2>
                <p class="visual_title">일본과 한국을 잇다.</p>
                <p class="visual_text">kizuna의 여러정보들을 확인해보세요!</p>
                <p class="visual_text">자세히보기 > </p>
            </section>
        </li>
        <li class="swiper-slide">
            <section class="main_visual">
            <h2 class="hidden">비주얼 영역</h2>
                <p class="visual_title">일본과 한국을 잇다.</p>
                <p class="visual_text">kizuna의 여러정보들을 확인해보세요!</p>
                <p class="visual_text">자세히보기 > </p>
            </section>
        </li>
        </ul>
        </div>
<!-- 상기 마크업 portrait 상태 일 때 display:block; -->
<!-- 하기 landscape 상태 일 때 display:block; -->
        <div id="visual_land_wrap" class="swiper mySwiper">
        <ul class="visual_list swiper-wrapper">
        <li class="swiper-slide">
            <section class="main_visual">
            <h2 class="hidden">비주얼 영역</h2>
                <p class="visual_title">일본과 한국을 잇다.</p>
                <p class="visual_text">kizuna의 여러정보들을 확인해보세요!</p>
                <p class="visual_text">자세히보기 > </p>
            </section>
        </li>
        <li class="swiper-slide">
            <section class="main_visual">
            <h2 class="hidden">비주얼 영역</h2>
                <p class="visual_title">일본과 한국을 잇다.</p>
                <p class="visual_text">kizuna의 여러정보들을 확인해보세요!</p>
                <p class="visual_text">자세히보기 > </p>
            </section>
        </li>
        </ul>
        </div>
        <!-- 비주얼 끝 -->
        <section id="quickmenu_wrap">
            <h2 class="hidden">컨텐츠 바로가기 버튼 리스트</h2>
            <ul id="quickmenu_list">
                <li>
                    <p class="quick_img"><a href="/kizuna_rwd/mobile/partner/partner.php"><img src="/kizuna_rwd/mobile/images/content_list1.png" alt="빠른메뉴버튼"></a></p>
                    <p class="quick_text"><a href="#">Partner</a></p>
                </li>
                <li>
                    <p class="quick_img"><a href="#"><img src="/kizuna_rwd/mobile/images/content_list2.png" alt="빠른메뉴버튼"></a></p>
                    <p class="quick_text"><a href="#">Study</a></p>
                </li>
                <li>
                    <p class="quick_img"><a href="/kizuna_rwd/mobile/work/work.php"><img src="/kizuna_rwd/mobile/images/content_list3.png" alt="빠른메뉴버튼"></a></p>
                    <p class="quick_text"><a href="#">Work</a></p>
                </li>
                <li>
                    <p class="quick_img"><a href="#"><img src="/kizuna_rwd/mobile/images/content_list4.png" alt="빠른메뉴버튼"></a></p>
                    <p class="quick_text"><a href="#">House</a></p>
                </li>
            </ul>
        </section>
        <!-- 퀵 메뉴 버튼 끝 -->
        <section id="m_partner_wrap">
            <h2 class="m_content_title">Partner</h2>
            <p class="m_content_text">여러분만의 파트너를 찾아 새로운 인연을 쌓아보세요!</p>
            <ul id="partner_list">
                <li>
                    <p class="partner_pic">
                      <a href="#">
                        <img src="/kizuna_rwd/mobile/images/m_partner1.png" alt="1번 파트너 츠키">
                      </a>
                    </p>
                    <p class="partner_name">
                      <a href="#">Tsuki</a>
                    </p>
                    <p class="partner_text">
                      <a href="#">
                        안녕하세요. 츠키라고 합니다!
                        신청은 언제든 환영입니다.
                      </a>
                    </p>
                </li>
                <li>
                    <p class="partner_pic">
                      <a href="#">
                        <img src="/kizuna_rwd/mobile/images/m_partner2.png" alt="2번 파트너 유키">
                      </a>
                    </p>
                    <p class="partner_name">
                      <a href="#">Tanaka</a>
                    </p>
                    <p class="partner_text">
                      <a href="#">こんにちは！
                        名古屋のIT企業で活躍中の田中です!
                      </a>
                    </p>
                </li>
                <li>
                    <p class="partner_pic">
                      <a href="#">
                        <img src="/kizuna_rwd/mobile/images/m_partner3.png" alt="3번 파트너 타나카">
                      </a>
                    </p>
                    <p class="partner_name">
                      <a href="#">Matsuda</a>
                    </p>
                    <p class="partner_text">
                      <a href="#">
                        こんにちは！
                        福岡で活躍中の松田と申します！                        
                      </a>
                    </p>
                </li>
            </ul>
        </section>
        <!-- 파트너 끝 -->
        <section id="m_study_wrap">
          <h2 class="m_content_title_w">Study</h2>
          <p class="m_content_text_w">일본의 입시정보와 여러분의 성장이야기를 전합니다.</p>
          <h3 class="sw_title_w">입시 정보</h3>
          <ul class="sw_content_list">
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_st_info1.png" alt="입시정보1"></a></p>
              <p class="sw_text_w"><a href="#">23년 일본 입시</a></p>
            </li>
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_st_info2.png" alt="입시정보2"></a></p>
              <p class="sw_text_w"><a href="#">[10월]단기 신청</a></p>
            </li>
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_st_info3.png" alt="입시정보3"></a></p>
              <p class="sw_text_w"><a href="#">와세다 입시설명</a></p>
            </li>
          </ul>
          <h3 class="sw_title_w">후기</h3>
          <ul class="sw_content_list">
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_st_review1.png" alt="유학후기1"></a></p>
              <p class="sw_text_w"><a href="#">치바대 단기유학</a></p>
            </li>
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_st_review2.png" alt="유학후기2"></a></p>
              <p class="sw_text_w"><a href="#">도쿄 워홀 후기</a></p>
            </li>
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_st_review3.png" alt="유학후기3"></a></p>
              <p class="sw_text_w"><a href="#">관서 지방 워홀</a></p>
            </li>
          </ul>
        </section>
        <!-- 스터디 끝 -->
        <section id="m_work_wrap">
          <h2 class="m_content_title">Work</h2>
          <p class="m_content_text">일본의 채용정보와 여러분의 성공이야기를 전합니다.</p>
          <h3 class="sw_title">지역별 채용정보</h3>
          <ul class="sw_content_list">
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_work_info1.png" alt="취업정보1"></a></p>
              <p class="sw_text"><a href="#">관동</a></p>
            </li>
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_work_info2.png" alt="취업정보2"></a></p>
              <p class="sw_text"><a href="#">관서</a></p>
            </li>
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_work_info3.png" alt="취업정보3"></a></p>
              <p class="sw_text"><a href="#">홋카이도</a></p>
            </li>
          </ul>
          <h3 class="sw_title">후기</h3>
          <ul class="sw_content_list">
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_work_review1.png" alt="취업후기1"></a></p>
              <p class="sw_text"><a href="#">도미인호텔 취업</a></p>
            </li>
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_work_review2.png" alt="취업후기2"></a></p>
              <p class="sw_text"><a href="#">나고야 웹 개발</a></p>
            </li>
            <li>
              <p class="sw_pic"><a href="#"><img src="/kizuna_rwd/mobile/images/m_work_review3.png" alt="취업후기3"></a></p>
              <p class="sw_text"><a href="#">유니클로 취업</a></p>
            </li>
          </ul>
        </section>
        <!-- 취업영역 끝 -->
        <section id="m_house_wrap">
          <h2 class="m_content_title">House</h2>
          <p class="m_content_text">부동산 가이드와 함께 지역별 매물 정보를 찾아보세요.</p>
          <ul class="sw_content_list">
            <li>
              <p class="sw_pic_r"><a href="#"><img src="/kizuna_rwd/mobile/images/m_house1.png" alt="하우스지역정보1"></a></p>
              <p class="sw_text"><a href="#">관동</a></p>
            </li>
            <li>
              <p class="sw_pic_r"><a href="#"><img src="/kizuna_rwd/mobile/images/m_house2.png" alt="하우스지역정보2"></a></p>
              <p class="sw_text"><a href="#">관서</a></p>
            </li>
            <li>
              <p class="sw_pic_r"><a href="#"><img src="/kizuna_rwd/mobile/images/m_house3.png" alt="하우스지역정보3"></a></p>
              <p class="sw_text"><a href="#">도호쿠</a></p>
            </li>
            <li>
              <p class="sw_pic_r"><a href="#"><img src="/kizuna_rwd/mobile/images/m_house4.png" alt="하우스지역정보4"></a></p>
              <p class="sw_text"><a href="#">홋카이도</a></p>
            </li>
            <li>
              <p class="sw_pic_r"><a href="#"><img src="/kizuna_rwd/mobile/images/m_house5.png" alt="하우스지역정보5"></a></p>
              <p class="sw_text"><a href="#">규슈</a></p>
            </li>
            <li>
              <p class="sw_pic_r"><a href="#"><img src="/kizuna_rwd/mobile/images/m_house6.png" alt="하우스지역정보6"></a></p>
              <p class="sw_text"><a href="#">그 외</a></p>
            </li>
          </ul>
        </section>
        <!-- 하우스 영역 끝 -->
        <section id="m_faq_wrap">
          <h2 class="m_content_title">FAQ</h2>
          <form id="faq_content">
            <fieldset>
                <legend class="hidden">1:1문의 영역</legend>
                <ul id="faq_list">
                <li>
                    <span class="faq_text">아이디</span>
                    <input type="text" name="faq_box" class="text_box" autocomplete="off" maxlength="12">
                </li>
                <li>
                    <span class="faq_text">연락처</span>
                    <input type="text" name="faq_box" class="text_box" autocomplete="off" maxlength="12">
                </li>
                <li>
                    <span id="faq_big">문의내용</span>
                    <textarea name="write_box" id="write_box" autocomplete="off" maxlength="100"></textarea>
                </li>
                </ul>
                <p class="agree_text">문의를 주시면 빠른 시일 내로 안내해 드리겠습니다.</p>
                <p id="check_text"><input type="checkbox" name="agree">개인정보 취급 방침에 동의합니다.</p>
                <input type="submit" class="inquiry_btn" value="문의하기">
            </fieldset>
            </form>
        </section>
    </main>
    <!-- 컨텐츠 영역 끝 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/kizuna_rwd/mobile/inc/footer.html" ?>
 

</body>
</html>