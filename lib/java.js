// slide show 
const slides = document.getElementsByClassName('slide');
let currentIndex = 0;

function switchSlides(){
let nextIndex = currentIndex + 1;

if(nextIndex == slides.length){
    nextIndex = 0;
}
slides[currentIndex].style.display = 'none';
slides[nextIndex].style.display = 'block';

currentIndex = nextIndex;

console.log("Slide switch");
}
setInterval(switchSlides, 2000);

// hamburger menu 


