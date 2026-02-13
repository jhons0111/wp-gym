function gymWordpress(){
    if(document.querySelector('.swiper')){
        const options = {
            loop: true
        }
        new Swiper('.swiper', options)
    }
}

document.addEventListener('DOMContentLoaded', gymWordpress)

// anime js

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');

if ( textWrapper ){

    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    anime.timeline({loop: true})
        .add({
            targets: '.ml2 .letter',
            scale: [4,1],
            opacity: [0,1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70*i
        }).add({
            targets: '.ml2',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
}
