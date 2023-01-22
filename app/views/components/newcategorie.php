<div id="dashboard_view" class="border-2 border-[#5ec8e6]  overflow-y-scroll my-4 p-5 w-full">
        <h1 class="text-[#399ab5] mb-4 capitalize font-extrabold tracking-widest text-3xl">ajout categorie:</h1>
        <form action="test.php" method="post" class=" text-white">
        <div class="bg-[#8cd0e3] relative p-8">
          <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
            <div class="flex flex-col xl:flex-row gap-8">
              <div class="flex flex-col gap-3 xl:w-1/2">
                <div class="flex justify-between">
                  <label for="name">Nom du categorie :</label>
                  <input class="text-black w-1/2" name="name" type="text">
                </div>
                
                
              </div>
              <div class="flex gap-3 xl:w-1/2">
                <label class="w-40" for="">description :</label>
                <textarea class="w-full h-16 text-black" name="" id=""  rows=""></textarea>
              </div>
            </div>
            <input class="mt-3" type="file" name="" id="">

          </div>
          <div class="mt-3">
            <button class="bg-[#8cd0e3] hover:bg-[#399ab5] transition-all duration-500 relative py-2 px-4 capitalize font-bold tracking-widest" id="encore">
              <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
              submit
            </button>
            
          </div>
        </form>
        </div>