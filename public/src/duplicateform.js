const product_form = document.getElementById("product_form");
const form_parent = document.getElementById("form_parent");

const submit_form = document.getElementById("submit_form");
const form_duplicator = document.getElementById("form_duplicator");
let i = 1;

class formsHandlerClass {
  constructor() {
    this.count = 0;
    this.formAccepted = false;
  }
  incrimentCount() {
    this.count = this.count + 1;
  }
  duplicateForm() {
    this.incrimentCount();
    const div = document.createElement("div");
    div.innerHTML = product_form.innerHTML;
    const data_inputs = div.querySelectorAll(".data_inputs");
    const photos_feedback = div.querySelector("#photos_feedback-"+(this.count-1));
    photos_feedback.id= 'photos_feedback-'+this.count
    const feedback_message = div.querySelector("#feedback_message-"+(this.count-1));
    feedback_message.id= 'feedback_message-'+this.count
    data_inputs.forEach((input) => {
      let name = input.getAttribute("name");
      name = name.substring(0, name.length - 3);
      input.id = name + "-" + this.count;
      name = name + "[" + this.count + "]";
      input.setAttribute("name", name);
      //console.log(name);
    });
    div.classList = product_form.classList;
    div.classList.add("mt-5");
    div.classList.add("border-t");
    div.classList.add("pt-3");
    form_parent.appendChild(div);
  }

  inputStyleHandlerError(input) {
    input.placeholder = "ce champ est obligatoire";
    input.classList.add("border-2");
    input.style.borderColor = "#E84855";
    input.style.backgroundColor = "#FDEDEE";
  }

  inputStyleHandlerAccepted(input) {
    input.classList.remove("border-2");
    input.style.backgroundColor = "#FFFFFF";
  }
  isNumber(value) {
    return !isNaN(value);
  }
  validateAll(count) {
    let formsValidation = [];
    for (let i = 0; i <= count; i++) {
      formsValidation.push(this.validateForm(i));
    }
    return formsValidation.every(function (formValidation) {
      return formValidation === true;
    });
  }
  validateForm(count = "") {
    if (count === "") {
      count = this.count;
    }

    const nom = document.getElementById("nom-" + count);
    const prix_achat = document.getElementById("prix_achat-" + count);
    const prix_vente = document.getElementById("prix_vente-" + count);
    const quantite = document.getElementById("quantite-" + count);
    const categorie = document.getElementById("categorie-" + count);
    const description = document.getElementById("description-" + count);
    const photos = document.getElementById("photos[]-" + count);
    let files = photos.files;
    files = Array.from(files);

    var errors = [];

    if (files.length == 0) {
      errors.push("nom is required");
      this.inputStyleHandlerError(photos);
      const photos_feedback = document.getElementById(
        "photos_feedback-" + count
      );
      const feedback_message = document.getElementById(
        "feedback_message-" + count
      );
      feedback_message.innerText = "veuillez choisir une photo";
      photos_feedback.classList.remove("hidden");
    } else {
      this.inputStyleHandlerAccepted(photos);
      const photos_feedback = document.getElementById(
        "photos_feedback-" + count
      );
      photos_feedback.classList.add("hidden");
    }

    if (nom.value === "" || nom.value === "NULL") {
      errors.push("nom is required");
      this.inputStyleHandlerError(nom);
    } else {
      this.inputStyleHandlerAccepted(nom);
    }

    /*     if (prix_achat.value === "" || prix_achat.value === "NULL") {
      errors.push("nom is required");
      this.inputStyleHandlerError(prix_achat);
    } else {
      this.inputStyleHandlerAccepted(prix_achat);
    } */
    console.log(this.isNumber(prix_achat.value));
    if (
      !this.isNumber(prix_achat.value) ||
      prix_achat.value === "" ||
      prix_achat.value === "NULL"
    ) {
      errors.push("nom is required");
      this.inputStyleHandlerError(prix_achat);
    } else {
      this.inputStyleHandlerAccepted(prix_achat);
    }
    if (
      !this.isNumber(prix_vente.value) ||
      prix_vente.value === "" ||
      prix_vente.value === "NULL"
    ) {
      errors.push("nom is required");
      this.inputStyleHandlerError(prix_vente);
    } else {
      this.inputStyleHandlerAccepted(prix_vente);
    }
    if (
      !this.isNumber(quantite.value) ||
      quantite.value === "" ||
      quantite.value === "NULL"
    ) {
      errors.push("nom is required");
      this.inputStyleHandlerError(quantite);
    } else {
      this.inputStyleHandlerAccepted(quantite);
    }

    if (description.value === "" || description.value === "NULL") {
      errors.push("nom is required");
      this.inputStyleHandlerError(description);
    } else {
      this.inputStyleHandlerAccepted(description);
    }

    if (errors.length === 0) {
      if (this.formAccepted) {
        this.formAccepted = true;
      }
      return true;
    } else {
      this.formAccepted = false;
      return false;
    }
  }
}

let formsHandler = new formsHandlerClass();

form_duplicator.addEventListener("click", () => {
  if (formsHandler.validateForm()) {
    formsHandler.duplicateForm();
  }
});

submit_form.addEventListener("click", (e) => {
  let count = formsHandler.count;
  let validationResults = formsHandler.validateAll(count);

  if (!validationResults) {
    e.preventDefault();
  }

  
});

const input = document.getElementById("photos-0");
const upladed_images_div = document.getElementById("upladed_images_div-0");

/* 
input.addEventListener("change", ()=> {

    let files = input.files
    files = Array.from(files)
  
    files.forEach(file => {
        
        const img_element = document.createElement('img')
        img_element.classList.add('border','border-black','max-w-[50px]')
        upladed_images_div.appendChild(img_element)
    
      const reader = new FileReader();
      
      reader.onload = function() {
        img_element.src = reader.result
      };
      
      reader.readAsDataURL(file); 
    });

}); */
