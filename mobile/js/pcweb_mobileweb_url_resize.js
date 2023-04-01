let ua = window.navigator.userAgent.toLowerCase();
let mobileWindowWidth

if(/iphone/.test(ua) || /android/.test(ua) || /opera/.test(ua) || /bada/.test(ua) || /ipad/.test(ua) || /windows ce/.test(ua)) {
document.location.replace("http://ryu7897.dothome.co.kr/kizuna_rwd");
}


window.addEventListener('resize', ()=>{
let windowSize=window.innerWidth;

if(windowSize>=480){
  window.location.replace("http://ryu7897.dothome.co.kr/kizuna_rwd")
}


})
	