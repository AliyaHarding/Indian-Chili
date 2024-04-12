const nav = document.getElementById("nav");
let open = false;

function hamburgerMenu(){
    nav.style.transition = '0.2s';
    open = !open;
    if (open){
        nav.style.transform = "translateX(0px)";
    }else{
        nav.style.transform = "translateX(-1000px)";
    }
}
