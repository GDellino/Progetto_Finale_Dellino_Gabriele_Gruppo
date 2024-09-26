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


/* Chiamata Asincrona */
let firstNumber = document.querySelector('#firstNumber');
let secondNumber = document.querySelector('#secondNumber');
let thirdNumber = document.querySelector('#thirdNumber');

function createInterval(total, catchNumber , time ){
    let counter = 0;    
    let interval = setInterval( ()=>{
        if(counter < total){
            counter ++;
            catchNumber.innerHTML = counter;
        }else{
            clearInterval(interval);
        }
    }, time )
}

let check = true;
let observer = new IntersectionObserver( (entries)=>{
    entries.forEach( (el)=>{
        if(el.isIntersecting && check){
            createInterval(135, firstNumber, 50);
            createInterval(60, secondNumber, 50);
            createInterval(40, thirdNumber, 500);
            check = false;
        }
    })
} );

// chi deve osservare
observer.observe(firstNumber)