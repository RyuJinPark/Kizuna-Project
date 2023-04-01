document.addEventListener('DOMContentLoaded',()=>{
    //const partnerWrap=document.querySelector('#partner')
    const partnerList=document.querySelectorAll('#partner_list>li')
    const partnerTitle=document.querySelector('#partner>.content_title')
    const partnerText=document.querySelector('#partner>.content_text')
    // 파트너 const 끝
    const studyContent=document.querySelector('#study')
    const partTimeListLi=document.querySelectorAll('#part_time_list>li')
    const examInfo=document.querySelectorAll('#exam_info>.info_list>li')
    const studyReview=document.querySelectorAll('#study_review>.info_list>li')
    const studyTipList=document.querySelectorAll('#q_list>li')
    //스터디 const 끝
    const workContent=document.querySelector('#work')
    const workListLi=document.querySelectorAll('#work_info>.work_list>li')
    const workTipList=document.querySelectorAll('#t_list>li')
    const semiWorkLi=document.querySelectorAll('#semi_info>.work_list>li')
    const workReviewLi=document.querySelectorAll('#work_review>.work_list>li')
    //워크 const 끝
    const houseTitle=document.querySelector('#house_content>.content_title')
    const houseText=document.querySelector('#house_content>.content_text')
    const japanMap=document.querySelector('#japan_map')
    const houseInfo=document.querySelector('#house_info')
    const houseGuide=document.querySelectorAll('#house_guide>li')
    //하우스 const 끝
    const faqWrapList=document.querySelectorAll('#question_content>section')

    
    gsap.set(partnerList, {opacity:0, translateY:100})
    gsap.set(partnerTitle, {opacity:0, translateY:100})
    gsap.set(partnerText, {opacity:0, translateY:100})
    // 파트너 gsap.to 끝
    gsap.set(studyContent, {opacity:0, translateY:100})
    gsap.set(partTimeListLi, {opacity:0, translateY:100})
    gsap.set(examInfo, {opacity:0, translateY:100})
    gsap.set(studyReview, {opacity:0, translateY:100})
    gsap.set(studyTipList, {opacity:0, translateY:100})
    //스터디 gsap.set 끝
    gsap.set(workContent, {opacity:0, translateY:100})
    gsap.set(workListLi, {opacity:0, translateY:100})
    gsap.set(workTipList, {opacity:0, translateY:100})
    gsap.set(semiWorkLi, {opacity:0, translateY:100})
    gsap.set(workReviewLi, {opacity:0, translateY:100})
    //워크 gsap.set 끝
    gsap.set(houseTitle, {opacity:0, translateY:100})
    gsap.set(houseText, {opacity:0, translateY:100})
    gsap.set(japanMap, {opacity:0, scale:0.5})
    gsap.set(houseInfo, {opacity:0, translateX:-100})
    //하우스 gsap.set끝
    gsap.set(faqWrapList, {opacity:0, translateY:100})
    

    //이벤트 함수
    window.addEventListener('scroll', showPartner)
    window.addEventListener('scroll', showStudy)
    window.addEventListener('scroll', showWork)
    window.addEventListener('scroll', showHouse)
    window.addEventListener('scroll', showFaq)


    function showPartner(){
        let scrollHeight=window.pageYOffset;
        let partnerLength=partnerList.length;
        if(scrollHeight>=400){
            gsap.to(partnerTitle, {opacity:1, translateY:0, duration:.3, ease:'power1.out'})
            gsap.to(partnerText, {opacity:1, translateY:0, delay:.2, duration:.3, ease:'power1.out'})
            for(let a=0; a<partnerLength; a++){
                gsap.to(partnerList[a], {opacity:1, translateY:0, delay:a*0.2, ease:'power1.out'})
            }
        }
    }

    function showStudy(){
      let scrollHeight=window.pageYOffset;
      if(scrollHeight>=800){
        gsap.to(studyContent, {opacity:1, translateY:0, duration:.5, ease:'power1.out'})
        gsap.to(partTimeListLi, {opacity:1, translateY:0, delay:.2, duration:.5, ease:'power1.out'})
        gsap.to(examInfo, {opacity:1, translateY:0, delay:.2, duration:.5, ease:'power1.out'})
        gsap.to(studyReview, {opacity:1, translateY:0, delay:.5, duration:.5, ease:'power1.out'})
        gsap.to(studyTipList, {opacity:1, translateY:0, delay:.5, duration:.5, ease:'power1.out'})
      }
    }

    function showWork(){
      let scrollHeight=window.pageYOffset;
      if(scrollHeight>=1800){
        gsap.to(workContent, {opacity:1, translateY:0, duration:.5, ease:'power1.out'})
        gsap.to(workListLi, {opacity:1, translateY:0, delay:.2, duration:.5, ease:'power1.out'})
        gsap.to(workTipList, {opacity:1, translateY:0, delay:.4, duration:.5, ease:'power1.out'})
        gsap.to(semiWorkLi, {opacity:1, translateY:0, delay:.2, duration:.5, ease:'power1.out'})
        gsap.to(workReviewLi, {opacity:1, translateY:0, delay:.4, duration:.5, ease:'power1.out'})
      }
    }

    function showHouse(){
        let scrollHeight=window.pageYOffset;
        if(scrollHeight>=2900){
            gsap.to(houseTitle, {opacity:1, translateY:0, duration:.3, ease:'power1.out'})
            gsap.to(houseText, {opacity:1, translateY:0, delay:.3, duration:.2, ease:'power1.out'})
            gsap.to(japanMap, {opacity:1, scale:1, delay:.4, duration:.6, ease:'circ.out'})
            gsap.to(houseInfo, {opacity:1, translateX:0, delay:.6, duration:.3, ease:'power1.out'})
        }
    }

    function showFaq(){
        let scrollHeight=window.pageYOffset;
        let faqWrapLength=faqWrapList.length;
        if(scrollHeight>=3600){
            for(let b=0; b<faqWrapLength; b++){
                gsap.to(faqWrapList[b], {opacity:1, translateY:0, delay:b*0.3, ease:'power1.out'})
            }
        }
    }
// 이벤트 함수 끝

    


    
//파트너 선택함수
    for(const item of partnerList){
        item.addEventListener('mouseenter', fadeInList)
        item.addEventListener('mouseleave', fadeOutList)
      }
//스터디 선택함수
    for(const item of partTimeListLi){
      item.addEventListener('mouseenter', scaleZoomIn)
      item.addEventListener('mouseleave', scaleZoomOut)
    }
    for(const item of examInfo){
      item.addEventListener('mouseenter', fadeInList)
      item.addEventListener('mouseleave', fadeOutList)
    }
    for(const item of studyReview){
      item.addEventListener('mouseenter', fadeInList)
      item.addEventListener('mouseleave', fadeOutList)
    }
  //워크 선택함수
  for(const item of workListLi){
    item.addEventListener('mouseenter', fadeInList)
    item.addEventListener('mouseleave', fadeOutList)
  }
  for(const item of semiWorkLi){
    item.addEventListener('mouseenter', fadeInList)
    item.addEventListener('mouseleave', fadeOutList)
  }
  for(const item of workReviewLi){
    item.addEventListener('mouseenter', fadeInList)
    item.addEventListener('mouseleave', fadeOutList)
  }
  for(const item of houseGuide){
    item.addEventListener('mouseenter', scaleChangeUp)
    item.addEventListener('mouseleave', scaleChangeDown)
  }

      
// 페이드 인&아웃 스케일 함수
      function fadeInList(){
        gsap.to(this,{translateY:-10, duration:.2, ease:'power1.out'})
      }
      function fadeOutList(){
        gsap.to(this,{translateY:0, duration:.2, ease:'power1.out'})
      }
      function scaleZoomIn(){
       this.children[0].classList.add('selected')
      }
      function scaleZoomOut(){
        this.children[0].classList.remove('selected')
      }
      function scaleChangeUp(){
        gsap.to(this, {scale:1.2, duration:.2, ease:'power1.out'})
      }
      function scaleChangeDown(){
        gsap.to(this, {scale:1.0, duration:.2, ease:'power1.out'})
      }


})