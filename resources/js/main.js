let navbarCustom = document.querySelector(".navbarCustom")
window.addEventListener("scroll", () => {
    if(window.scrollY > 0){
        navbarCustom.classList.add('navBg')
    }else{
        navbarCustom.classList.remove('navBg')
    }
})