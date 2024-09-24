let navbarCustom = document.querySelector(".navbarCustom")
if( navbarCustom != null ){
    window.addEventListener("scroll", () => {
        if(window.scrollY >0){
            navbarCustom.classList.add('navBg')
        }else{
            navbarCustom.classList.remove('navBg')
        }
    })
}
