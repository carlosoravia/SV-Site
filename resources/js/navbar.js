window.onscroll = function(){scrollSpread()}

function scrollSpread(){
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
        let navbar = document.getElementById("nav");
        navbar.classList.remove("m-3")
    }else{
        let navbar = document.getElementById("nav");
        navbar.classList.add("m-3")
    }
}


