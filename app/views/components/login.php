<div class="bg-cadethhh mt-40 flex items-center justify-center">
    <form class="flex flex-col p-10 container lg:w-1/3 border border-cadethh bg-white" action="" method="post">
        <h1 class="capitalize font-bold text-2xl">entrez vous identifients</h1>
        <?php if (!empty($data)) { ?>
            <div class="bg-red-200 py-3 px-2 ">
                <?= $data['errors']['email']; ?>
            </div>
        <?php } ?>

        <div class="mt-2 flex flex-col">
            <label class="capitalize" for="x">e-mail :
            </label>
            <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="email" id="email" value="<?php if (!empty($data['email'])) echo $data['email']; ?>">
        </div>
        <div class="mt-2 flex flex-col">
            <label class="capitalize" for="x">mot de passe :
            </label>
            <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="password" name="password" id="password">
        </div>
        <div class="mt-3 grid place-items-center">
            <button class="text-white bg-[#8cd0e3] hover:bg-[#399ab5] transition-all duration-500 relative py-2 px-4 capitalize font-bold tracking-widest" id="encore">
                <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
                submit
            </button>
            
        </div>

    </form>
</div>