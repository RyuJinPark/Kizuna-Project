<? include_once $_SERVER["DOCUMENT_ROOT"]."/kizuna_rwd/inc/start.html" ?>
  <link rel="stylesheet" href="/kizuna_rwd/css/main.css">
  <script src="/kizuna_rwd/js/slide_visual.js"></script>
  <script src="/kizuna_rwd/js/contentsEffect.js"></script>
  <script>
     let ua = window.navigator.userAgent.toLowerCase();
	    let mobileWindowWidth

	    if(/iphone/.test(ua) || /android/.test(ua) || /opera/.test(ua) || /bada/.test(ua) || /ipad/.test(ua) || /windows ce/.test(ua)) {
	    document.location.replace("http://ryu7897.dothome.co.kr/kizuna_rwd/mobile/");
    	}


      window.addEventListener('resize', ()=>{
        let windowSize=window.innerWidth;

        if(windowSize<=768){
          window.location.replace("http://ryu7897.dothome.co.kr/kizuna_rwd/mobile")
        }


      })
  </script>
</head>
<body>
  <!-- 바로가기메뉴 시작 -->
  <? include_once $_SERVER["DOCUMENT_ROOT"]."/kizuna_rwd/inc/header.html" ?>
  <!-- 상단영역끝 -->
  <!-- 비주얼영역시작 -->
  <div id="visual_wrap">
    <h2 class="hidden">메인베너영역</h2>
    <ul id="visual_list">
      <li id="visual_1">
        <section class="visual">
          <h3 class="hidden">메인베너페이지1</h3>
          <p class="visual_title">일본과 <span class="text_point">인연</span>을 맺자!</p>
          <p class="visual_text">
            일본이 어려우신가요?<br>
            일본인과 대화하기 두렵다구요?<br>
            걱정하지 마세요!<br>
            여러 파트너들이 여러분들을 기다리고 있습니다.
          </p>
            <p class="join_box">
              <a href="/kizuna_rwd/partner/partner.php" target="_blank" title="파트너 페이지 바로가기">
                <i class="fa-solid fa-user-group" id="join_svg"></i>
                Join Us
            </a>
            </p>
        </section>
      </li>
      <li id="visual_2">
        <section class="visual">
          <h3 class="hidden">메인베너페이지2</h3>
          <p class="visual_title">일본에서 <span class="text_point">성장</span>하라!</p>
          <p class="visual_text">
            일본에서 유학을 고민하시는분!<br>
            일본에서 유학을 하고계시는분!<br>
            여러분들을 위한 모임을 가져보세요!
          </p>
            <p class="join_box">
              <a href="#">
                <i class="fa-solid fa-user-group" id="join_svg_2"></i>
                Join Us
            </a>
            </p>
        </section>
      </li>
      <li id="visual_3">
        <section class="visual">
          <h3 class="hidden">메인베너페이지3</h3>
          <p class="visual_title">일본에서 <span class="text_point">성공</span>하라!</p>
          <p class="visual_text">
            일본에서 취업을 고민하시는분!<br>
            일본에서 근무를 하고계시는분!<br>
            여러분의 정보를 교환해보세요!
          </p>
            <p class="join_box">
              <a href="#">
                <i class="fa-solid fa-user-group" id="join_svg_3"></i>
                Join Us
                </a>
            </p>
        </section>
      </li>
    </ul>
        <button id="back_btn"><i class="fa-solid fa-chevron-left fa-3x"></i></button>
        <button id="next_btn"><i class="fa-solid fa-chevron-right fa-3x"></i></button>
  </div>
  <!-- 비주얼영역 끝 -->
  <!-- 컨텐츠 시작 -->
<div id="content_wrap">
  <h2 class="hidden">컨텐츠영역</h2>
    <section id="partner">
      <h3 class="content_title">Partner</h3>
      <p class="content_text">
        더 이상의 두려움은 no! 당신만의 유대관계를 만들어나가보세요!
      </p>
      <ul id="partner_list">
        <li>
            <p class="partner_pic">
              <a href="#">
                <img src="/kizuna_rwd/images/partner_1.png" alt="1번 파트너 츠키">
              </a>
            </p>
            <p class="partner_name">
              <a href="#">Tsuki</a>
            </p>
            <p class="partner_text">
              <a href="#">안녕하세요. 츠키라고 합니다!
              도쿄에 호텔에서 근무하고 있어요!
              이 분야에서 활약해보고 싶으신 분들 
              언제든지 환영입니다~! 
              편하게 요청해주세요!!
              </a>
            </p>
        </li>
        <li>
            <p class="partner_pic">
              <a href="#">
                <img src="/kizuna_rwd/images/partner_2.png" alt="2번 파트너 유키">
              </a>
            </p>
            <p class="partner_name">
              <a href="#">Yuki</a>
            </p>
            <p class="partner_text">
              <a href="#">안녕하세요! 유키입니다~
                홋카이도 사람이기 때문에 
                이곳에 대해서 궁금한게 있다면
                언제든 물어봐주세요!
              </a>
            </p>
        </li>
        <li>
            <p class="partner_pic">
              <a href="#">
                <img src="/kizuna_rwd/images/partner_3.png" alt="3번 파트너 타나카">
              </a>
            </p>
            <p class="partner_name">
              <a href="#">Tsuki</a>
            </p>
            <p class="partner_text">
              <a href="#">
                こんにちは！
                名古屋のIT企業で活躍中の田中です!
                名古屋やIT企業のすべてをお知らせます。
                一緒に行きませんか？
              </a>
            </p>
        </li>
        <li>
            <p class="partner_pic">
              <a href="#">
                <img src="/kizuna_rwd/images/partner_4.png" alt="4번 파트너 마츠다">
              </a>
            </p>
            <p class="partner_name">
              <a href="#">Tsuki</a>
            </p>
            <p class="partner_text">
              <a href="#">こんにちは！
                福岡で活躍中の松田と申します！
                僕もまだ大学生なので、役に立つかわかんないけど、頑張って手伝いますよ！
                気楽に話しかけてください！
              </a>
            </p>
        </li>
      </ul>
    </section>
    <!-- 파트너 컨텐츠 끝 -->
    <!-- 스터디 컨텐츠 시작 -->
  <div id="study_wrap">
    <section id="study">
      <h3 class="content_title_white">Study</h3>
      <p id="study_text">
        일본 입시 정보,단기 알바와 같은 유학 Tip들!<br>
        여러분의 성장 이야기를 전합니다!
      </p>
      <div id="study_left_wrap">
        <div id="part_time">
        <p class="study_content_title">지역별 알바 정보</p>
        <ul id="part_time_list">
          <li>
            <a href="#"><img src="/kizuna_rwd/images/study_tw1.png" alt="알바 구인1"></a>
            <ul class="tw_info">
              <li class="tw_text"><a href="#">映画館スタッフ</a></li>
              <li class="tw_text"><a href="#"><i class="fa-regular fa-building"></i> White Cine Quinto</a></li>
              <li class="tw_text"><a href="#"><i class="fa-solid fa-location-dot"></i> 東京都 渋谷区</a></li>
              <li class="tw_text"><a href="#"><i class="fa-solid fa-yen-sign"></i> 時給 1,072円</a></li>
            </ul>
          </li>
          <li>
            <a href="#"><img src="/kizuna_rwd/images/study_tw2.png" alt="알바 구인2"></a>
            <ul class="tw_info">
              <li class="tw_text"><a href="#">ホールスタッフ</a></li>
              <li class="tw_text"><a href="#"><i class="fa-regular fa-building"></i> やきとん居酒屋</a></li>
              <li class="tw_text"><a href="#"><i class="fa-solid fa-location-dot"></i> 大阪府 大阪市</a></li>
              <li class="tw_text"><a href="#"><i class="fa-solid fa-yen-sign"></i> 時給 1,500円</a></li>
            </ul>
          </li>
        </ul>
            </div>
            <div id="study_left_wrap_q">
                <p class="study_content_title">유학 Q&A</p>
                <ul id="q_list">
                   <li><a href="#">일본 어학연수 시, 필요한 경비는 어느정도 되나요?</a></li>
                   <li><a href="#">일본에서 숙식해결은 어떻게 하나요?</a></li>
                   <li><a href="#">아르바이트에는 어떤 조건이 필요하나요?</a></li>
                   <li><a href="#">자격 외 활동허가서는 어떻게 발급받나요?</a></li>
                   <li><a href="#">아르바이트를 구하는 방법에는 어떤 것들이 있나요?</a></li>
                   <li><a href="#">유학생들도 세금을 내나요?</a></li>
                </ul>
            </div>
        </div>
        <div id="study_right_wrap">
            <div id="exam_info">
                <p class="study_content_title">입시 정보</p>
                <ul class="info_list">
                  <li>
                    <p><a href="#"><img src="/kizuna_rwd/images/study_uniinfo1.png" alt="입시정보1"></a></p>
                    <p><a href="#">2023년 일본대학 입시 설명회</a></p>
                  </li>
                  <li>
                    <p><a href="#"><img src="/kizuna_rwd/images/study_uniinfi2.png" alt="입시정보2"></a></p>
                    <p><a href="#">[10월단기신청] 2022년도 10월</a></p>
                  </li>
                </ul>
            </div>
            <div id="study_review">
              <p class="study_content_title">후기</p>
              <ul class="info_list">
                <li>
                  <p><a href="#"><img src="/kizuna_rwd/images/study_re1.png" alt="유학후기1"></a></p>
                  <p><a href="#">21~22년 1년 간 도쿄 워홀 후기</a></p>
                </li>
                <li>
                  <p><a href="#"><img src="/kizuna_rwd/images/study_re2.png" alt="유학후기2"></a></p>
                  <p><a href="#">2022 2학기 치바대 단기 후기</a></p>
                </li>
              </ul>
            </div>
        </div>
    </section>
</div>
<!-- 스터디 컨텐츠 끝 -->
<!-- 취업 컨텐츠 시작 -->
<div id="work_wrap">
  <section id="work">
    <h3 class="content_title" id="work_title">Work</h3>
    <p class="content_text">
      일본의 지역별 취업정보와 세미나 정보등의 취업 Tip들!<br>
      여러분의 성공이야기를 전합니다.
    </p>
    <div id="work_left_wrap">
      <div id="work_info">
      <p class="work_content_title">지역별 취업 정보</p>
      <ul class="work_list">
        <li>
          <p><a href="#"><img src="/kizuna_rwd/images/work_info_1.png" alt="관동 구인"></a></p>
          <p class="info_text"><a href="#">관동 취업 정보</a></p>
        </li>
        <li>
          <p><a href="#"><img src="/kizuna_rwd/images/work_info_2.png" alt="관서 구인"></a></p>
          <p class="info_text"><a href="#">관서 취업 정보</a></p>
        </li>
      </ul>
      </div>
    <div id="work_left_wrap_tip">
      <p class="work_content_title">취업 Tip</p>
        <ul id="t_list">
          <li><a href="#">민폐를 끼치지 않기 위한 면접매너!</a></li>
          <li><a href="#">효과적인 자기 PR방법</a></li>
          <li><a href="#">처음이라도 괜찮아! 그룹 면접 대책 요령!</a></li>
          <li><a href="#">취업일정과 진행과정</a></li>
          <li><a href="#">취업성공전략 핵심 5가지!</a></li>
          <li><a href="#">효과적인 이력서 작성법!</a></li>
        </ul>
          </div>
      </div>
      <div id="work_right_wrap">
          <div id="semi_info">
              <p class="work_content_title">Web 세미나 정보</p>
              <ul class="work_list">
                <li>
                  <p><a href="#"><img src="/kizuna_rwd/images/work_semi_1.png" alt="세미나정보1"></a></p>
                  <p><a href="#">[森尾電機]WEB会社説明会</a></p>
                </li>
                <li>
                  <p><a href="#"><img src="/kizuna_rwd/images/work_semi_2.png" alt="세미나정보2"></a></p>
                  <p><a href="#">[ワイドレジャー]<br>WE ARE ”LEISURE”MAKERS!</a></p>
                </li>
              </ul>
          </div>
          <div id="work_review">
            <p class="work_content_title">후기</p>
            <ul class="work_list">
              <li>
                <p><a href="#"><img src="/kizuna_rwd/images/work_re_1.png" alt="취업후기1"></a></p>
                <p><a href="#">도쿄 도미인 호텔 취업 후기</a></p>
              </li>
              <li>
                <p><a href="#"><img src="/kizuna_rwd/images/work_re_2.png" alt="취업후기2"></a></p>
                <p><a href="#">나고야 웹개발 취업 후기</a></p>
              </li>
            </ul>
          </div>
      </div>
  </section>
</div>
<!-- 취업 컨텐츠 끝 -->
<!-- 하우스 맵 컨텐츠 시작 -->
<div id="house_wrap">
    <section id="house_content">
      <h3 class="content_title" id="house_title">House</h3>
      <p class="content_text">부동산 가이드와 함께 지역별 매물 정보를 찾아보세요!</p>
      <div id="japan_map">
        <img src="/kizuna_rwd/images/japan_map.png" alt="일본지도" usemap="#japan_map">
        <map name="japan_map">
          <area target="_blank" alt="hokaido" title="hokaido" href="#" coords="549,67,623,66,623,145,547,146" shape="poly">
          <area target="_blank" alt="tohoku" title="tohoku" href="#" coords="484,253,555,254,556,329,482,327" shape="poly">
          <area target="_blank" alt="hokuriku" title="hokuriku" href="#" coords="326,288,400,287,403,361,323,362" shape="poly">
          <area target="_blank" alt="kanto" title="kanto" href="#" coords="427,412,502,411,503,489,428,489" shape="poly">
          <area target="_blank" alt="kansai" title="kansai" href="#" coords="262,464,338,464,338,537,262,538" shape="poly">
          <area target="_blank" alt="zukoku" title="zukoku" href="#" coords="126,352,201,351,202,424,126,425" shape="poly">
          <area target="_blank" alt="sigoku" title="sigoku" href="#" coords="142,509,216,509,216,578,142,578" shape="poly">
          <area target="_blank" alt="kyusyu" title="kyusyu" href="#" coords="4,473,78,473,77,548,4,549" shape="poly">
          <area target="_blank" alt="okinawa" title="okinawa" href="#" coords="289,589,364,587,364,661,289,661" shape="poly">
        </map>
        </div>
    <div id="house_info">
      <p class="house_text">
        지도에서 원하는 지역을 클릭하여 원하는 지역의 매물 정보를 찾아보세요!<br>
        <span class="house_point">잠깐!</span> 확인해보셨나요? 여러분을 위한 부동산 가이드!
      </p>
      <ul id="house_guide">
        <li>
          <a href="#"><p class="house_svg"><img src="/kizuna/images/serch_svg.png" alt="가이드아이콘1"></p></a>
          <a href="#"><p class="guide_text">방 찾기 가이드</p></a>
        </li>
        <li>
          <a href="#"><p class="house_svg"><img src="/kizuna/images/truck_svg.png" alt="가이드아이콘1"></p></a>
          <a href="#"><p class="guide_text">입주 가이드</p></a>
        </li>
        <li>
          <a href="#"><p class="house_svg"><img src="/kizuna/images/house_svg.png" alt="가이드아이콘1"></p></a>
          <a href="#"><p class="guide_text">생활 가이드</p></a>
        </li>
      </ul>
    </div>
  </section>
</div>
<!-- 하우스 맵 컨텐츠 끝 -->
<!-- 질문,문의 컨텐츠 시작 -->
<div id="faq_wrap">
  <div id="question_content">
    <section id="faq_content">
        <h3 class="head_title">자주묻는 질문</h3>
        <ul id="faq_list">
        <li>
            <a href="#"><i class="fa-solid fa-circle" style="font-size:10px; padding-left:5px;"></i>
            <span class="faq_text">가입조건은 어떻게 되나요?</span>
        </a>
        </li>
        <li>
            <a href="#"><i class="fa-solid fa-circle" style="font-size:10px; padding-left:5px;"></i>
            <span class="faq_text">회원정보수정은 어떻게 하나요?</span>
        </a>
        </li>
        <li>
            <a href="#"><i class="fa-solid fa-circle" style="font-size:10px; padding-left:5px;"></i>
            <span class="faq_text">파트너 신청은 유료인가요?</span>
        </a>
        </li>
        <li>
            <a href="#"><i class="fa-solid fa-circle" style="font-size:10px; padding-left:5px;"></i>
            <span class="faq_text">파트너와 연결이 안되요.</span>
        </a>
        </li>
        <li>
            <a href="#"><i class="fa-solid fa-circle" style="font-size:10px; padding-left:5px;"></i>
            <span class="faq_text">회원 탈퇴를 하고 싶어요.</span>
        </a>
        </li>       
        </ul>
    </section>
    <section id="que_wrap">
        <h3 class="head_title">1:1문의</h3>
        <form id="que_content">
        <fieldset>
            <legend class="hidden">1:1문의 영역</legend>
            <ul id="que_list">
            <li>
                <span class="que_text">아이디</span>
                <input type="text" name="qud_box" class="text_box" autocomplete="off" maxlength="12">
            </li>
            <li>
                <span class="que_text">연락처</span>
                <input type="text" name="qud_box" class="text_box" autocomplete="off" maxlength="13">
            </li>
            <li>
                <span id="que_big">문의내용</span>
                <textarea name="write_box" id="write_box" autocomplete="off" maxlength="200"></textarea>
            </li>
            </ul>
            <p class="agree_text">문의를 주시면 빠른 시일 내로 안내해 드리겠습니다.</p>
            <p id="check_text"><input type="checkbox" name="agree">개인정보 취급 방침에 동의합니다.</p>
            <input type="submit" class="inquiry_btn" value="문의하기">
        </fieldset>
        </form>
    </section>
</div>
</div>
<!-- 질문,문의 컨텐츠 끝 -->
</div>
<!-- 컨텐츠 끝 -->
<!-- 하단정보영역 -->
<? include_once $_SERVER["DOCUMENT_ROOT"]."/kizuna_rwd/inc/footer.html" ?>
<!-- 하단 정보영역 끝 -->
</body>
</html>