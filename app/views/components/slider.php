<div class="bg-[#f3f8fe] pb-8 my-8">
    <div class="grid place-items-center my-8 pt-10">
      <h1 class=" text-3xl font-bold">New Arrivals</h1>
      <h1 class="text-center text-lg font-light px-4">Our Cold Weather Staples Will Help Keep Skin Hydrated & Happy All
        Winter Long</h1>
    </div>
    <section class=" flex items-center justify-around lg:mx-12">
      <button id="left" class=" mx-4 bg-white hover:bg-slate-100\ rounded-full w-8 h-8 grid place-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path class="w-5 h-5" stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />

        </svg>
      </button>

      <div id="carousel" class="relative overflow-hidden w-full">

        <div id="slider" class="flex absolute transition-all ease-in-out duration-200 cursor-pointer">
        
        <!-- slider card -->
        <?php foreach ($data as $value) { ?>
          
          <div class="mx-0.5 relative bg-white">
            <div class="test relative">
              <?php foreach ($value['photo'] as $key => $photo) {?>
              
                <?php if ($key === 0) {?>
                  <img class="absolute " src="data:image/jpeg;base64,<?= base64_encode($photo['photo']) ?>" alt="" srcset="">
                <?php }else if($key === 1){?>

                  <img class="seocnd_image absolute z-10 hidden" src="data:image/jpeg;base64,<?= base64_encode($photo['photo']) ?>" alt="" srcset="">
                <?php }; ?>
             
             <?php }
               ?>
              <!-- <img class="absolute " src="./src/images/first.webp" alt="" srcset=""> -->
            </div>
            
            <div class="flex flex-col items-center capitalize my-2 gap-0.5 relative py-2">
              <h1 class="font-bold text-xl text-center relative text-gray-900"><?=$value['nom']?></h1>
              <h1 class="font-normal text-sm text-center text-gray-600"><?=$value['description']?></h1>
              <div class="hidden">
              <?=$value['prix_vente']?> MAD
              </div>
            </div>
          </div>
          <?php }; ?>
        <!-- slider card -->

        </div>
      </div>


      <button id="right" class=" mx-4 bg-white hover:bg-slate-100\ rounded-full w-8 h-8 grid place-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path class="w-5 h-5" stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
        </svg>
      </button>
    </section>
  </div>
  <script src="<?=ROOT?>public/src/script.js"></script>