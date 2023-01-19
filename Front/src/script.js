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
const left = document.getElementById('left')
const right = document.getElementById('right')
const carousel = document.getElementById('carousel')
const slider = document.getElementById('slider')
const cards = document.querySelectorAll(".test")

window.addEventListener("resize", adjustDimentions)
window.addEventListener("load", adjustDimentions)

/* manage hover */
    cards.forEach((card)=>{
        card.addEventListener("mouseover",()=>{
            const seocnd_image = card.querySelector(".seocnd_image")
            seocnd_image.classList.remove('hidden')
        })
        card.addEventListener("mouseleave",()=>{
            const seocnd_image = card.querySelector(".seocnd_image")
            seocnd_image.classList.add('hidden')
        })
    })


/* adjustment of height and width of cards in relation with the cards number */

function adjustDimentions() {
    const carouselWidth = carousel.getBoundingClientRect().width
    cards.forEach((card)=>{
        colCount = colsNumber()
        card.style.width = ((carouselWidth-(colCount*4))/colCount)+'px'
        card.style.height = ((carouselWidth-(colCount*4))/colCount)+'px'
        const sliderHeight = slider.clientHeight;
        carousel.style.height = sliderHeight + 'px';
    })
}

/* determmine card number depending on the viewport width */
function colsNumber() {
    const carouselWidth = carousel.getBoundingClientRect().width
    let colCount = Math.floor(carouselWidth/ 250)
        if (colCount>4) {
            colCount = 4
        }
        return colCount
}


let counter = 0

left.addEventListener("click", ()=>{
    if (counter>0) {
        counter --
        slide()
        console.log(counter);
    }
})

right.addEventListener("click", ()=>{
    if (counter<(cards.length-colsNumber())) {
        counter ++
        slide()
        console.log(counter);
    }
})


function slide() {
    slider.style.transform  = `translateX(-${counter*100/cards.length}%)`
}