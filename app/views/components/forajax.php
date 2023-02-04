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
          <input id="nom" placeholder="nom du produit" type="text">
        </th>
        <td class=" py-1">
          <input id="description" placeholder="descritpion" type="text">
        </td>
        <td class=" py-1">
          <input id="categoriename" placeholder="categorie" type="text">
        </td>
        <td class=" py-1 ">
        <div class="flex items-center">
            <input id="quantite" class="shadow-sm rounded p-2 mr-2 w-32" placeholder="Quantite" type="text">
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
            <input id="prix_vente" class="shadow-sm rounded p-2 mr-2 w-32" placeholder="prix vente" type="text">
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
            <tbody id="table_body">
              <?php if(!empty($data))foreach ($data as $value) { ?>
               
              
              <tr class="bg-white border-b border-[#8cd0e3] hover:bg-[#e3fafa] transition-all">
                <th scope="row" class="w-20 font-medium text-gray-900 whitespace-nowrap ">
                  <div class="w-10 h-10 border border-[#e3fafa]">

                    <img src="data:image/jpeg;base64,<?= base64_encode($value['photo']) ?>" alt="" srcset="">
                  </div>
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                  <?=$value['nom'];?>
                </th>
                <td class="px-6 py-4">
                    <?=$value['description'];?>
                </td>
                <td class="px-6 py-4">
                  <?=$value['categoriename'];?>
                </td>
                <td class="px-6 py-4 ">
                <?=$value['quantite'];?>
                </td>
                <td class="px-6 py-4 ">
                <?=$value['prix_vente'];?>
                </td>
                <td class="flex justify-around mt-2">
                  <a href="<?=ROOT?>product/switchFavorit/<?=$value["id"];?>" class="w-8 h-8 p-1 bg-white text-[#5ec8e6] hover:text-[#479ab0] ">
                    <svg  xmlns="http://www.w3.org/2000/svg" fill="<?php if($value['favoris']=== 'true') {echo '#5ec8e6';} else echo 'none';?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    
                  </a>
                  <a href="<?=ROOT?>product/edit/<?=$value["id"];?>" class="w-8 h-8 p-1 bg-white text-[#5ec8e6] hover:text-[#479ab0] ">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                    
                  </a>
                  <a href="<?=ROOT?>product/delete/<?=$value['id'];?>" class="w-8 h-8 p-1 bg-white text-[#5ec8e6] hover:text-[#479ab0] ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    
                  </a>
                </td>
              </tr>
              <?php }; ?>
            </tbody>
          </table>
        </div>
      </div>
      <script src="<?=ROOT?>public/src/fetchProducts.js"></script>