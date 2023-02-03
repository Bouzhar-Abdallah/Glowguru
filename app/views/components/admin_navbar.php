<nav id="nav" class="row-start-1 flex items-center p-2 justify-between bg-[#8cd0e3] text-white top-0 ">
  <div class="w-10 h-10 grid place-items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
    </svg>
  </div>


  <div class="mx-auto">
    <a href="<?= ROOT ?>home">
      <div class="flex flex-col justify-center items-center">
        <h1 class="text-4xl font-medium relative font-secular my-1">GlowGuru <span class="text-sm absolute top-1">&copy</span></h1>
      </div>
    </a>
    <hr class="shadow-xl">

  </div>
  <div class="mx-3 grid place-items-center">
    <a href="<?= ROOT ?>logout">
      <h1 class="text-xl font-medium">logout</h1>
    </a>
    <h1>bonjour, <?php echo $_SESSION['Glowguru']['prenom'] ?></h1>
  </div>
</nav>