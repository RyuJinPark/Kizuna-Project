document.addEventListener('DOMContentLoaded',()=>{
    const tabMenu=document.querySelectorAll('#regional_list>li')
    const container=document.querySelector('#tap_container')

    let selectedTabMenu=tabMenu[0]

    init()
    initEvent()

    function init(){
        selectedTabMenu.classList.add('selected')
        axios.get('/kizuna_rwd/work/worktap_data/workdata0.html').then((response)=>{
            container.innerHTML=response.data
        })
    }

    function initEvent(){
        for(const item of tabMenu){
            item.addEventListener('click', clickTabMenu)
        }
    }

    function clickTabMenu(){
        let clickIndex=getIndex(this)
        activate(clickIndex)
        showAnotherContainer(clickIndex)
        
    }

    function getIndex(checkMenu){
        let checkIndex=0;
        while((checkMenu=checkMenu.previousElementSibling)!=null){
            checkIndex++
        }
        return checkIndex;
    }

    function activate(index){
        if(selectedTabMenu!=null && selectedTabMenu!=tabMenu[index]){
            selectedTabMenu.classList.remove('selected')
        }
        if(selectedTabMenu!=tabMenu[index]){
            selectedTabMenu=tabMenu[index]
            selectedTabMenu.classList.add('selected')
        }
    }

    function showAnotherContainer(index){
        axios.get('/kizuna_rwd/work/worktap_data/workdata'+index+'.html').then((response)=>{
            container.innerHTML=response.data
        })
    }


})