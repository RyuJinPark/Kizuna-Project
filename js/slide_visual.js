window.addEventListener('load',()=>{
    const visual=document.querySelectorAll('#visual_list>li')
    const visualTitle=document.querySelectorAll('.visual_title')
    const visualText=document.querySelectorAll('.visual_text')
    const visualJoin=document.querySelectorAll('.join_box') 
   
    const nextBtn=document.querySelector('#next_btn')
    const prevBtn=document.querySelector('#back_btn')
    const visualWrap=document.querySelector('#visual_wrap')
    
    let visualWidth=window.innerWidth;
    let currentIndex=0;
    let nextIndex=null;
    let timer=null;
  
    let isSlide=false; 
  
     gsap.set(visual, {opacity:0})
     gsap.set(visual[0], {opacity:1})  
  
     autoSilde() // 임시 비활성화!
    
    
    nextBtn.addEventListener('click', slideNextVisual)
    prevBtn.addEventListener('click', slidePrevVisual)
    visualWrap.addEventListener('mouseleave', autoSilde)
    visualWrap.addEventListener('mouseenter', stopSilde)
  
  
    function slideNextVisual(){
      if(isSlide==false){
          isSlide=true;
          nextIndex=currentIndex+1;
         
          if(nextIndex>=visual.length){
          nextIndex=0;
          }
  
          gsap.to(visual[currentIndex], {opacity:0, duration:1, ease:'circ.out'})    
          
  
          gsap.set(visual[nextIndex], {opacity:0, scale:1.5})
          gsap.set(visualTitle[nextIndex], {translateY:-50, opacity:0})
          gsap.set(visualText[nextIndex], {translateY:50, opacity:0})
          gsap.set(visualJoin[nextIndex], {translateY:50, opacity:0})
  
          gsap.to(visual[nextIndex], {opacity:1, scale:1, duration:1, ease:'circ.out', onComplete:()=>{
              gsap.to(visualTitle[nextIndex], {translateY:0, opacity:1, duration:0.8, ease:'power1.out'})
              gsap.to(visualText[nextIndex], {translateY:0, opacity:1, duration:0.8, ease:'power1.out'})
              gsap.to(visualJoin[nextIndex], {translateY:0, delay:.2, opacity:1, duration:0.8, ease:'power1.out'})
              isSlide=false;
          }})
          currentIndex=nextIndex;   
      }
    }
    function slidePrevVisual(){
      if(isSlide==false){
          isSlide=true;
          nextIndex=currentIndex-1;
         
          if(nextIndex<0){
          nextIndex=visual.length-1;
          }
  
          gsap.to(visual[currentIndex], {opacity:0, duration:1, ease:'circ.out'})    
          
  
          gsap.set(visual[nextIndex], {opacity:0, scale:1.5})
          gsap.set(visualTitle[nextIndex], {translateY:-50, opacity:0})
          gsap.set(visualText[nextIndex], {translateY:50, opacity:0})
          gsap.set(visualJoin[nextIndex], {translateY:50, opacity:0})
  
          gsap.to(visual[nextIndex], {opacity:1, scale:1, duration:1, ease:'circ.out', onComplete:()=>{
              gsap.to(visualTitle[nextIndex], {translateY:0, opacity:1, duration:0.8, ease:'power1.out'})
              gsap.to(visualText[nextIndex], {translateY:0, opacity:1, duration:0.8, ease:'power1.out'})
              gsap.to(visualJoin[nextIndex], {translateY:0, delay:.2, opacity:1, duration:0.8, ease:'power1.out'})
              isSlide=false;
          }})
          currentIndex=nextIndex;   
      }
    }
  

  
    function autoSilde(){
      timer=setInterval(slideNextVisual, 3000)
    }
  
    function stopSilde(){
      clearInterval(timer)
    }
  
  
  
  
  })