<div id="dashboard_view" class="border-2 border-[#5ec8e6]  overflow-y-scroll my-4 p-5 w-full">
    <h1 class="text-[#399ab5] mb-4 capitalize font-extrabold tracking-widest text-3xl">ajout un nouveau admin :</h1>
    <form action="" method="post" class=" text-white">
<h1 class="text-black">
    <?=$failure?>
</h1>
        <div class="grid grid-cols-1  lg:grid-cols-2 gap-4 bg-[#8cd0e3] relative p-8">
            <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
            <div class="flex flex-col gap-4">

                <div class="flex justify-between">
                    <label for="nom">Nom :</label>
                    <input class="border text-black w-1/2" name="nom" type="text" value="">
                </div>
                <div class="flex justify-between">
                    <label for="nom">Prenom :</label>
                    <input class="border text-black w-1/2" name="prenom" type="text">
                </div>
                <div class="flex justify-between">
                    <label for="nom">Email :</label>
                    <input class="border text-black w-1/2" name="email" type="text">
                </div>
            </div>
            <div class="flex flex-col gap-4">

                <div class="flex justify-between ">
                    <label for="nom">mot de passe :</label>
                    <input id="password-1" class="text-black w-1/2" name="password-1" type="password">
                </div>
                <div class="flex justify-between">
                    <label for="nom">Confirmer mot de passe :</label>
                    <input id="password-2" class="text-black w-1/2" name="password-2" type="password">
                </div>

                <h1 id="password_check" class="w-fit mx-auto text-black py-2 px-4"></h1>

            </div>

        </div>
        <div class="mt-3">
            <button class="bg-[#8cd0e3] hover:bg-[#399ab5] transition-all duration-500 relative py-2 px-4 capitalize font-bold tracking-widest" id="submit">
                <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
                submit
            </button>

        </div>
    </form>
</div>
<script src="<?= ROOT ?>public/src/passwords.js"></script>