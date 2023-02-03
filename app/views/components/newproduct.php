<div id="dashboard_view" class="border-2 border-[#5ec8e6]  overflow-y-scroll my-4 p-5 w-full">
        <h1 class="text-[#399ab5] mb-4 capitalize font-extrabold tracking-widest text-3xl">ajout produits:</h1>
        <form action="<?=ROOT?>product/add" method="post" class=" text-white" enctype="multipart/form-data">
          <div id="form_parent" class="bg-[#8cd0e3] relative p-8">
            <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
            <div id="product_form" class="flex flex-col xl:flex-row gap-8">
              <div class="flex flex-col gap-3 xl:w-1/2">
                <div class="flex justify-between">
                  <label for="nom">Nom du produit :</label>
                  <input id="nom-0" class="data_inputs text-black w-1/2" name="nom[0]" type="text" value="">
                </div>
                <div class="flex justify-between">
                  <label for="prix_achat">Prix achat:</label>
                  <input id="prix_achat-0" class="data_inputs text-black w-1/2" name="prix_achat[0]" type="text" value="">
                </div>
                <div class="flex justify-between">
                  <label for="prix_vente">Prix vente:</label>
                  <input id="prix_vente-0" class="data_inputs text-black w-1/2" name="prix_vente[0]" type="text" value="">
                </div>
                <div class="flex justify-between">
                  <label for="quantite">quantite:</label>
                  <input id="quantite-0" class="data_inputs text-black w-1/2" name="quantite[0]" type="text" value="">
                </div>
                <div class="flex justify-between">
                  <label for="categorie_id">categorie :</label>
                  <select id="categorie-0" class="data_inputs w-1/2 text-black" name="categorie_id[0]" id="">
                    <?php foreach ($data as $value) {?>
                      <option value="<?=$value['id'];?>"><?=$value['nom'];?></option>
                    <?php };?>
                    
                  </select>
                </div>
              </div>
              <div class="flex flex-col gap-3 xl:w-1/2">
                <div class="flex">
                  <label class="w-40" for="description">description :</label>
                  <textarea id="description-0" class="data_input_description w-full h-16 text-black" name="description[0]" id="" rows=""></textarea>
                </div>
                
                <input class="data_input_photos mt-3 ml-auto" type="file" name="photos[][0]" multiple id="">
              </div>
            </div>

          </div>
          <div class="mt-3">
            <button type="button" id="form_duplicator"
              class="bg-[#8cd0e3] hover:bg-[#399ab5] transition-all duration-500 relative py-2 px-4 mr-3 capitalize font-bold tracking-widest"
              >
              <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
              encore
            </button>
            <button id="submit_form"
              class="bg-[#8cd0e3] hover:bg-[#399ab5] transition-all duration-500 relative py-2 px-4 capitalize font-bold tracking-widest"
              >
              <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
              submit
            </button>

          </div>
        </form>
      </div>
      <script src="<?=ROOT?>public/src/duplicateform.js"></script>