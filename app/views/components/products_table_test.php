<div id="dashboard_view" class="border-2 border-[#5ec8e6]  overflow-y-scroll my-4 p-5 w-full">
  <div class="flex  flex-col  items-center ">
    <table class="w-full text-sm text-left text-gray-500 ">
      <thead class="text-xs text-white tracking-wider uppercase bg-[#8cd0e3] ">
        <tr class="">
          <th scope="col" class="px-6 py-3">
            photo
          </th>
          <th scope="col" class="px-6 py-3">
            Produit
          </th>
          <th scope="col" class="px-6 py-3">
            Description
          </th>
          <th scope="col" class="px-6 py-3 w-40">
            Categorie
          </th>
          <th scope="col" class="px-6 py-3 w-40">
            quantite
          </th>
          <th scope="col" class="px-6 py-3 w-40">
            Prix vente
          </th>
          <th scope="col" class="px-6 py-3 w-28">
            Actions
          </th>
        </tr>
      </thead>
      <tr class="bg-white border-b border-[#8cd0e3] hover:bg-[#e3fafa] transition-all">
        <th scope="row" class="w-20 font-medium text-gray-900 whitespace-nowrap ">
          search :
        </th>
        <th scope="row" class=" py-1 font-medium text-gray-900 whitespace-nowrap ">
          <input placeholder="nom du produit" type="text">
        </th>
        <td class=" py-1">
          <input placeholder="descritpion" type="text">
        </td>
        <td class=" py-1">
          <input placeholder="ategorie" type="text">
        </td>
        <td class=" py-1 ">
          <div class="flex items-center">
            <input class="shadow-sm rounded p-2 mr-2 w-32" placeholder="Quantite" type="text">
            <div class="relative">
              <input type="radio" id="greater" name="searchOption" value="greater" class="hidden">
              <label for="greater" class="cursor-pointer select-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

              </label>
              <input type="radio" id="inferior" name="searchOption" value="inferior" class="hidden">
              <label for="inferior" class="cursor-pointer select-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

              </label>
            </div>
          </div>
        </td>
        <td class=" py-1 ">
          <div class="flex items-center">
            <input class="shadow-sm rounded p-2 mr-2 w-32" placeholder="prix vente" type="text">
            <div class="relative">
              <input type="radio" id="greater" name="searchOption" value="greater" class="hidden">
              <label for="greater" class="cursor-pointer select-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

              </label>
              <input type="radio" id="inferior" name="searchOption" value="inferior" class="hidden">
              <label for="inferior" class="cursor-pointer select-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

              </label>
            </div>
          </div>
        </td>
        <td class="flex justify-around mt-2">


        </td>
      </tr>
      <tbody>

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

      </tbody>
    </table>
  </div>
</div>