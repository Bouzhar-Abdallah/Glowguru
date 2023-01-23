  <!-- slider start -->
  
  <!-- end slider -->

  <!-- grid start -->
  <div class="m-10">
    <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-5">
      <!-- card -->
      <?php if(!empty($data))foreach ($data as  $value) { ?>
        <div class="bg-white lg:mx-4 overflow-hidden">
          <div class="relative">
            <div class="absolute opacity-0 hover:opacity-100 hover:bg-black/10 w-full h-full grid place-items-center transition-all duration-300">
              <a href="<?=ROOT?>home/product/<?= $value['id'] ?>" class="border px-4 py-2 bg-white/30 border-black hover:bg-white transition-all duration-500 cursor-pointer font-medium">Check it out</a>
            </div>
            <img class="w-full" src="data:image/jpeg;base64,<?= base64_encode($value['photo']) ?>" alt="Card Image">
          </div>
          <div class="p-4 flex justify-between">
            <div class="">
              <h2 class="text-lg font-medium text-gray-900"><?= $value['nom'] ?></h2>
              <p class="text-gray-600"><?= $value['description'] ?></p>
            </div>
            <p><?= $value['prix_vente'] ?> MAD</p>
          </div>
        </div>
      <?php }; ?>
      <!-- card -->
    </div>
  </div>
  <!-- grid end -->