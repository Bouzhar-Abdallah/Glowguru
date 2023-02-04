function buildTable(data) {
  const table_body = document.getElementById("table_body");
  table_body.innerHTML = "";
  data.forEach((element) => {
    table_body.innerHTML += fillLine(element);
  });
}

function aucunProduit() {
  const table_body = document.getElementById("table_body");
  table_body.innerHTML = `
    <tr class="bg-white border-b border-[#8cd0e3] hover:bg-[#e3fafa] transition-all">
    <th></th>
    <th></th>
    <th></th>
    <th>
      <div class="">
        <h1>aucun produit trouvè</h1>
      </div>
    </th>
  </tr>
    `;
}

function fillLine(element) {
  return `
    
    <tr class="bg-white border-b border-[#8cd0e3] hover:bg-[#e3fafa] transition-all">
                <th scope="row" class="w-20 font-medium text-gray-900 whitespace-nowrap ">
                  <div class="w-10 h-10 border border-[#e3fafa]">

                    <img src="data:image/jpeg;base64,${
                      element["photo"]
                    }" alt="" srcset="">
                  </div>
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                ${element["nom"]}
                  
                </th>
                <td class="px-6 py-4">
                ${element["description"]}
                    
                </td>
                <td class="px-6 py-4">
                ${element["categoriename"]}
                  
                </td>
                <td class="px-6 py-4 ">
                ${element["quantite"]}
                
                </td>
                <td class="px-6 py-4 ">
                ${element["prix_vente"]}
                </td>
                <td class="flex justify-around mt-2">
                  <a href="http://localhost:8888/glowguru/product/switchFavorit/${
                    element["id"]
                  }" class="w-8 h-8 p-1 bg-white text-[#5ec8e6] hover:text-[#479ab0] ">
                    <svg  xmlns="http://www.w3.org/2000/svg"
                    fill="${
                      element["favoris"] === "true" ? "#5ec8e6" : "none"
                    }" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    
                  </a>
                  <a href="http://localhost:8888/glowguru/product/edit/${
                    element["id"]
                  }" class="w-8 h-8 p-1 bg-white text-[#5ec8e6] hover:text-[#479ab0] ">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                    
                  </a>
                  <a href="http://localhost:8888/glowguru/product/delete/${
                    element["id"]
                  }" class="w-8 h-8 p-1 bg-white text-[#5ec8e6] hover:text-[#479ab0] ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    
                  </a>
                </td>
              </tr>
    `;
}

class Search {
  data_search_params = {
    data_like: {
      nom: "",
      description: "",
      categoriename: "",
    },
    data_quantite: {
      quantite: "0",
      operator: ">",
    },
    data_prix: {
      prix_vente: "0",
      operator: ">",
    },
  };

  setSearchDataNom(newNom) {
    this.data_search_params.data_like.nom = newNom;
  }

  setSearchDatadescription(newDescription) {
    this.data_search_params.data_like.description = newDescription;
  }

  setSearchDataCategoriename(newCategoriename) {
    this.data_search_params.data_like.categoriename = newCategoriename;
  }

  setSearchDataQuantite(newQuantite) {
    this.data_search_params.data_quantite.quantite = newQuantite;
  }

  setSearchOperatorQuantite(newOperator) {
    this.data_search_params.data_quantite.operator = newOperator;
  }

  setSearchDataPrix_vente(newPrix_vente) {
    this.data_search_params.data_prix.prix_vente = newPrix_vente;
  }

  setSearchOperatorPrix_vente(newOperator) {
    this.data_search_params.data_prix.operator = newOperator;
  }

  getdata() {
    const xml = new XMLHttpRequest();

    xml.open(
      "POST",
      "http://localhost:8888/glowguru/dashboard/getProductsAjax",
      true
    );
    xml.setRequestHeader("Content-Type", "application/json");
    xml.onload = function () {
      const data = JSON.parse(this.response);
      if (data == "aucune data trouvè") {
        aucunProduit();
      } else {
        //console.log(data);
        buildTable(data);
      }
    };
    xml.send(JSON.stringify(this.data_search_params));
  }
}

let search = new Search();
search.getdata();
console.log(search.data_search_params);

const nom_input = document.getElementById("nom");
const description_input = document.getElementById("description");
const categoriename_input = document.getElementById("categoriename");
const quantite_input = document.getElementById("quantite");
const prix_vente_input = document.getElementById("prix_vente");

const greater_quntite_radio = document.getElementById("greater_quntite");
const inferior_quantite_radio = document.getElementById("inferior_quantite");
const greater_prix_vente_radio = document.getElementById("greater_prix_vente");
const inferior_prix_vente_radio = document.getElementById("inferior_prix_vente");



const quantiteRadioButtons = document.querySelectorAll('input[name="quantite"]');
const prixVenteRadioButtons = document.querySelectorAll('input[name="prix_vente"]');

quantiteRadioButtons.forEach(radioButton => {
  radioButton.addEventListener('change', (event) => {
    search.setSearchOperatorQuantite(event.target.value)
    search.getdata();
  });
});

prixVenteRadioButtons.forEach(radioButton => {
  radioButton.addEventListener('change', (event) => {
      search.setSearchOperatorPrix_vente(event.target.value)
      search.getdata();
  });
});



nom_input.addEventListener("input", (e) => {
  search.setSearchDataNom(e.target.value);
  search.getdata();
});

description_input.addEventListener("input", (e) => {
  search.setSearchDatadescription(e.target.value);
  search.getdata();
});

categoriename_input.addEventListener("input", (e) => {
  search.setSearchDataCategoriename(e.target.value);
  search.getdata();
});

quantite_input.addEventListener("input", (e) => {
  search.setSearchDataQuantite(e.target.value);
  search.getdata();
});

prix_vente_input.addEventListener("input", (e) => {
  search.setSearchDataPrix_vente(e.target.value);
  search.getdata();
});
