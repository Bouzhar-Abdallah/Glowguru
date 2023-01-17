window.addEventListener("scroll", ()=>{
    const nav = document.getElementById('nav')
    const navheight = nav.getBoundingClientRect().height
    if(window.pageYOffset>navheight){
        nav.classList.add('sticky')
    }else{
        nav.classList.remove('sticky')
    }
})
