window.addEventListener('load',()=>{
  const header=document.querySelector('header')
  const mobileMenuWrap=document.querySelector('#mobilemenu')
  const menuBtn=document.querySelector('#menu_btn')
  const closeBtn=document.querySelector('#mobileclose_btn')
  const grayLayer=document.createElement('div')
  grayLayer.id='mobile_graylayer'

  const mobileMenu=document.querySelectorAll('#mobilemenu_list>li>a')

  let selectedMenu=null;
  let closeHeight=50; // 메뉴 닫혀있을 떄 높이
  let openHeight=null; // 서브 메뉴 갯수에 따라 열리는 높이가 다름.
  let mobileMenuWidth=window.innerWidth*0.8;

  init()
  initEvent()

  function init(){
  gsap.set(mobileMenuWrap, {width:mobileMenuWidth, left:-mobileMenuWidth, display:'none'})
  }

  function initEvent(){
      menuBtn.addEventListener('click', mobileMenuOpen)
      closeBtn.addEventListener('click', mobileMenuClose)
      for(const item of mobileMenu){
          item.addEventListener('click', subMenuOpen)
      }
  }

  function mobileMenuOpen(){
      gsap.set(grayLayer, {display:'block'})
      header.append(grayLayer)

      gsap.set('body,html', {overflow:'hidden'})
      gsap.set(mobileMenuWrap, {display:'block'})
      gsap.to(mobileMenuWrap, {left:0, duration:.3, ease:'power1.out'})
  }

  function mobileMenuClose(){
      if(selectedMenu!=null && selectedMenu!=this){
          gsap.set(selectedMenu.parentElement, {height:closeHeight})//선택된 서브메뉴의 부모개체에
          selectedMenu.nextElementSibling.classList.remove('mobile_selected')//셀렉트 해제
      }
      selectedMenu=null;

      gsap.set(grayLayer, {display:'none'})
      gsap.to(mobileMenuWrap, {left:-mobileMenuWidth, duration:.3, ease:'power1.out', onComplete:()=>{
          gsap.set(mobileMenuWrap, {display:'none'})
          gsap.set('body,html', {overflow:'visible'})// 메뉴 클로즈 시 다시 스크롤이 되도록
      }})
  }

  function subMenuOpen(){
      if(selectedMenu!=null && selectedMenu!=this){
          gsap.to(selectedMenu.parentElement, {height:closeHeight, duration:.3, ease:'power1.out'})//선택된 서브메뉴의 부모개체에
          selectedMenu.nextElementSibling.classList.remove('mobile_selected')//셀렉트 해제
      }
      if(selectedMenu!=this){
          selectedMenu=this;
          openHeight=closeHeight+(closeHeight*selectedMenu.nextElementSibling.nextElementSibling.children.length)
          // 선택된 메인메뉴의 다음다음 요소의 자식요소의 갯수 x 닫힌 li의 높이값
          gsap.to(selectedMenu.parentElement, {height:openHeight, duration:.3, ease:'power1.out'})
          selectedMenu.nextElementSibling.classList.add('mobile_selected')
      }
  }

})