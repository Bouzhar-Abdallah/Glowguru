<div class="border-2 border-[#5ec8e6]  overflow-y-scroll my-4 p-5 w-full text-white">
    <h1 class="text-[#5ec8e6] my-3 font-bold text-xl">statistiques generales :</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

        <div class="  bg-[#8cd0e3] relative p-6">
            <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
            <p class=" ">Produit avec gain max</p>
            <div class="flex justify-between mt-4">
                <h3 class="text-lg font-medium"><?= $data['cards']['most_priftable_product']['nom'] ?></h3>
                <h3 class="text-lg font-bold "><?= $data['cards']['most_priftable_product']['gain'] ?> MAD</h3>
            </div>
        </div>

        <div class="  bg-[#8cd0e3] relative p-6">
            <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
            <p class=" ">Produit avec gain min</p>
            <div class="flex justify-between mt-4">
                <h3 class="text-lg font-bold "><?= $data['cards']['least_priftable_product']['nom'] ?></h3>
                <h3 class="text-lg font-medium"><?= $data['cards']['least_priftable_product']['gain'] ?> MAD</h3>
            </div>
        </div>

        <div class="  bg-[#8cd0e3] relative p-6">
            <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
            <p class=" ">Produit plus chers</p>
            <div class="flex justify-between mt-4">
                <h3 class="text-lg font-bold "><?= $data['cards']['most_expenssive_item']['nom'] ?></h3>
                <h3 class="text-lg font-medium"><?= $data['cards']['most_expenssive_item']['prix_vente'] ?> MAD</h3>
            </div>
        </div>

        <div class="  bg-[#8cd0e3] relative p-6">
            <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
            <p class=" ">Produit min quantite</p>
            <div class="flex justify-between mt-4">
                <h3 class="text-lg font-bold "><?= $data['cards']['least_quantity']['nom'] ?></h3>
                <h3 class="text-lg font-medium"><?= $data['cards']['least_quantity']['quantite'] ?> pieces</h3>
            </div>
        </div>
    </div>



</div>