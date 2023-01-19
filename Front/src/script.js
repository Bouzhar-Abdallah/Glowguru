/* window.addEventListener("scroll", ()=>{
    const nav = document.getElementById('nav')
    const navheight = nav.getBoundingClientRect().height
    if(window.pageYOffset>navheight){
        nav.classList.add('sticky')
    }else{
        nav.classList.remove('sticky')
    }
})
 */
const carousel = document.getElementById('carousel')
const slider = document.getElementById('slider')
const carouselWidth = carousel.getBoundingClientRect().width

const cards = document.querySelectorAll(".test")
    cards.forEach((card)=>{
        card.style.width = ((carouselWidth-16)/4)+'px'
        const childHeight = slider.clientHeight;
        carousel.style.height = childHeight + 'px';
    })


window.addEventListener("resize", ()=>{
    const carouselWidth = carousel.getBoundingClientRect().width
    const cards = document.querySelectorAll(".test")
    cards.forEach((card)=>{
        let colCount = Math.floor(carouselWidth/ 250)
        if (colCount>4) {
            colCount = 4
        }
        card.style.width = ((carouselWidth-(colCount*4))/colCount)+'px'
        const sliderHeight = slider.clientHeight;
        carousel.style.height = sliderHeight + 'px';


    })
    
})