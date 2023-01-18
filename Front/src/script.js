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
const carouselWidth = carousel.getBoundingClientRect().width

const cards = document.querySelectorAll(".test")
    cards.forEach((card)=>{
        card.style.width = ((carouselWidth-16)/4)+'px'
        
    })
console.log(window.innerWidth)
window.addEventListener("resize", ()=>{
    const carouselWidth = carousel.getBoundingClientRect().width
    const cards = document.querySelectorAll(".test")
    cards.forEach((card)=>{
        const colCount = Math.floor(carouselWidth/ 270)
        /* if (colCount>4) {
            colCount = 4
        } */
        card.style.width = ((carouselWidth-(colCount*4))/colCount)+'px'
        //console.log(card.getBoundingClientRect().width);
    })
    
})