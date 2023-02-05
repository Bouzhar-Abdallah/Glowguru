<div id="dashboard_view" class="border-2 border-[#5ec8e6]  overflow-y-scroll my-4  w-full">
  <div class="flex  flex-col  items-center ">
    <table class="min-w-full border-collapse block md:table">
      <thead class="block min-[1000px]:table-header-group">
        <tr class="border border-grey-500 md:border-none block min-[1000px]:table-row absolute -top-full min-[1000px]:top-auto -left-full min-[1000px]:left-auto  min-[1000px]:relative ">
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block min-[1000px]:table-cell w-24">photo</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block min-[1000px]:table-cell">nom</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block min-[1000px]:table-cell">description</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block min-[1000px]:table-cell w-32">categorie</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block min-[1000px]:table-cell w-24">quantite</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block min-[1000px]:table-cell w-24">prix vente</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block min-[1000px]:table-cell">Actions</th>
        </tr>
      </thead>
      <!-- search -->
      <tr class="bg-white border border-[#5ec8e6] min-[1000px]:border-none block md:table-row">
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block min-[1000px]:table-cell"></td>
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block min-[1000px]:table-cell">
          <input id="nom" placeholder="nom du produit" type="text" class="max-w-full">
        </td>
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block min-[1000px]:table-cell">
          <input id="description" placeholder="descritpion" type="text">
        </td>
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block min-[1000px]:table-cell">
          <input id="categoriename" placeholder="categorie" type="text" class="min-[1000px]:w-24">
        </td>
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block min-[1000px]:table-cell">
          <div class="flex items-center">
            <input id="quantite" class="shadow-sm rounded p-2 mr-2 min-[1000px]:w-12" placeholder="Quantite" type="text">
            <div class="relative">
              <input type="radio" id="greater_quanttite" name="quantite" value=">" class="hidden">
              <label for="greater_quanttite" class="cursor-pointer select-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

              </label>
              <input type="radio" id="inferior_quanttite" name="quantite" value="<" class="hidden">
              <label for="inferior_quanttite" class="cursor-pointer select-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

              </label>
            </div>
          </div>
        </td>
        <td class="p-2 md:border md:border-grey-500 text-left block min-[1000px]:table-cell ">
          <div class="flex items-center">
            <input id="prix_vente" class="shadow-sm rounded p-2 mr-2 min-[1000px]:w-12" placeholder="prix vente" type="text">
            <div class="relative">
              <input type="radio" id="greater_prix_vente" name="prix_vente" value=">" class="hidden">
              <label for="greater_prix_vente" class="cursor-pointer select-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

              </label>
              <input type="radio" id="inferior_prix_vente" name="prix_vente" value="<" class="hidden">
              <label for="inferior_prix_vente" class="cursor-pointer select-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

              </label>
            </div>
          </div>
        </td>
        <td class="p-2 md:border md:border-grey-500 text-left block min-[1000px]:table-cell min-[1000px]:w-32">
          
          
        </td>

      </tr>
      <!--  -->
      <tbody id="table_body" class="block md:table-row-group">


      </tbody>
    </table>
  </div>
</div>
<script src="<?= ROOT ?>public/src/fetchProducts.js"></script>