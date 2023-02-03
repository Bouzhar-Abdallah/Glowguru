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
  validateForm() {
    console.log(this.count);
    const nom = document.getElementById("nom-" + this.count);
    const prix_achat = document.getElementById("prix_achat-" + this.count);
    const prix_vente = document.getElementById("prix_vente-" + this.count);
    const quantite = document.getElementById("quantite-" + this.count);
    const categorie = document.getElementById("categorie-" + this.count);
    const description = document.getElementById("description-" + this.count);

    var errors = [];

    if (nom.value === "" || nom.value === "NULL") {
      errors.push("nom is required");
      this.inputStyleHandlerError(nom);
    } else {
      this.inputStyleHandlerAccepted(nom);
    }

    if (prix_achat.value === "" || prix_achat.value === "NULL") {
      errors.push("nom is required");
      this.inputStyleHandlerError(prix_achat);
    } else {
      this.inputStyleHandlerAccepted(prix_achat);
    }

    if (prix_vente.value === "" || prix_vente.value === "NULL") {
      errors.push("nom is required");
      this.inputStyleHandlerError(prix_vente);
    } else {
      this.inputStyleHandlerAccepted(prix_vente);
    }

    if (quantite.value === "" || quantite.value === "NULL") {
      errors.push("nom is required");
      this.inputStyleHandlerError(quantite);
    } else {
      this.inputStyleHandlerAccepted(quantite);
    }
    
    /* if (categorie.value === "" || categorie.value === "NULL") {
      errors.push("nom is required");
      this.inputStyleHandlerError(categorie);
    } else {
      this.inputStyleHandlerAccepted(categorie);
    } */
    if (description.value === "" || description.value === "NULL") {
      errors.push("nom is required");
      this.inputStyleHandlerError(description);
    } else {
      this.inputStyleHandlerAccepted(description);
    }

    if (errors.length === 0) {
      this.formAccepted = true;
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
  formsHandler.validateForm();
  if (!formsHandler.formAccepted) {
    e.preventDefault()
    console.log('prevented')
  }

  e.preventDefault()
});
