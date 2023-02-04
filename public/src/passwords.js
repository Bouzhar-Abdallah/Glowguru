const password = document.getElementById('password-1')
const password_2 = document.getElementById('password-2')
const password_check = document.getElementById('password_check')

var passcheck = true
password_2.addEventListener('input', (e)=>{
    if(e.target.value == password.value){
        password_check.classList.remove('hidden')
        password_check.innerText = 'les mots de passe sont identiques'
        password_check.classList.remove('bg-[#FDECF0]')
        password_check.classList.add('bg-[#DAFFEF]')
        passcheck = true
        console.log(passcheck);
    }else {
        password_check.innerText = 'les mots de passe ne sont pas identiques'
        password_check.classList.remove('hidden')
        password_check.classList.remove('bg-[#DAFFEF]')
        password_check.classList.add('bg-[#FDECF0]')
        passcheck = false
        console.log(passcheck);
    }
});

password.addEventListener('input', (e)=>{
    if(e.target.value == password_2.value){
        password_check.classList.remove('hidden')
        password_check.innerText = 'les mots de passe sont identiques'
        password_check.classList.remove('bg-[#FDECF0]')
        password_check.classList.add('bg-[#DAFFEF]')
        passcheck = true
        console.log(passcheck);
    }else {
        password_check.innerText = 'les mots de passe ne sont pas identiques'
        password_check.classList.remove('hidden')
        password_check.classList.remove('bg-[#DAFFEF]')
        password_check.classList.add('bg-[#FDECF0]')
        passcheck = false
        console.log(passcheck);
    }
});

const submit = document.getElementById('submit')
submit.addEventListener('click', (e)=>{

    const inputs = document.querySelectorAll("input")
    document.querySelectorAll("input").forEach((input) =>{
        
            if(input.value == ''){
                passcheck = false
                input.style.borderColor = "#E84855"
                input.style.backgroundColor = "#FDEDEE"
                input.placeholder = "ce champ est obligatoire";
            }
    
    })
    if (!passcheck) {
        e.preventDefault()
    }
})


