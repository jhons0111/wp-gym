function gymWordpress(){
    if(document.querySelector('.swiper')){
        const options = {
            loop: true
        }
        new Swiper('.swiper', options)
    }
}

document.addEventListener('DOMContentLoaded', gymWordpress)