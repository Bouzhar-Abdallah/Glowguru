const product_form = document.getElementById('product_form')
const form_parent = document.getElementById('form_parent')

const form_duplicator= document.getElementById('form_duplicator')
let i = 1;
form_duplicator.addEventListener("click", ()=>{
    const div = document.createElement('div')
    div.innerHTML = product_form.innerHTML
    const data_inputs = div.querySelectorAll('.data_inputs')
    data_inputs.forEach((input)=>{
        let name =  input.getAttribute('name');
        name = name.substring(0, name.length - 3);
        name = name + `[${i}]`
        input.setAttribute('name', name)
        console.log(name);
    })
    i++;
    div.classList = product_form.classList
    div.classList.add('mt-5')
    div.classList.add('border-t')
    div.classList.add('pt-3')
    form_parent.appendChild(div)
    
})
