const dashboard = document.getElementById('dashboard')
const nav = document.getElementById('nav')

nav_height = nav.getBoundingClientRect().height
viewport_height = window.innerHeight

dashboard.style.height = viewport_height - nav_height +'px'

