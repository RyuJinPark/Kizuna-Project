document.addEventListener('DOMContentLoaded',()=>{
  menuEffect()
})
function menuEffect(){
  const headerWrap=document.querySelector('#header_wrap')
  const mainMenu=document.querySelectorAll('#mainmenu_list>li>a')
  const subMenu=document.querySelectorAll('.submenu_list')

  let selectedMenu=null;

  initEvent()

  function initEvent(){
      for(const item of mainMenu){
          item.addEventListener('mouseenter', subMenuOn)
          item.addEventListener('focus', subMenuOn)
          //item.addEventListener('mouseenter', selectMenu)
      }
      for(const item of subMenu){
          item.addEventListener('mouseenter', subMenuOn)
          //item.addEventListener('mouseenter', selectMenu)
      }
      headerWrap.addEventListener('mouseleave', hideMenu)

      window.addEventListener('mousewheel', activateHeaderWrap)
  }
  
  function subMenuOn(){
      if(selectedMenu!=null && selectedMenu!=this){
      selectedMenu.parentElement.classList.remove('selected')
      }
      if(selectedMenu!=this){
          selectedMenu=this;
          selectedMenu.parentElement.classList.add('selected')
      }
      //mainmenu_list>li::after 설정값 활성화
      gsap.to(headerWrap, {height:350, duration:.1, ease:'power1.out'})
      gsap.set(subMenu, {display:'block', opacity:1})
      gsap.to(subMenu, {opacity:1, duration:.1, ease:'power1.out'})

  }
  function hideMenu(){
      if(selectedMenu!=null && selectedMenu!=this){
          selectedMenu.parentElement.classList.remove('selected')
          }
      gsap.to(subMenu, {opacity:0, duration:.1, ease:'power1.out'})
      gsap.set(subMenu, {display:'none', opacity:0})
      gsap.to(headerWrap, {height:137, duration:.1, ease:'power1.out'})
      selectedMenu=null;
  }

  function activateHeaderWrap(e){
    if(e.wheelDelta<=-120){
        gsap.to(headerWrap, {top:-137, opacity:0, duration:.5, ease:'power1.out'})
    }else if(e.wheelDelta>-120){
        gsap.to(headerWrap, {top:0, opacity:1, duration:.5, ease:'power1.out'})
    }
  }
}