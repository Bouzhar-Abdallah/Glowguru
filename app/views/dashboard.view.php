<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100&display=swap"
      rel="stylesheet"
    /> -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <link rel="stylesheet" href="./src/style.css"> -->

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100&family=Secular+One&display=swap');

    .font-Raleway {
      font-family: Raleway;
    }

    .font-secular {
      font-family: 'Secular One';
    }
  </style>
  <title>Document</title>
</head>

<body class="font-Raleway ">
  <div class="relative w-full h-screen">
  <?php require_once 'components/admin_navbar.php'; ?>
  
  <div id="dashboard" class="row-start-2 flex relative">
      <?php require_once 'components/admin_dashboard_menu.php'; ?>
      
      <?php require_once $componentfile; ?>
      
    </div>
  </div>






</body>

</html>
<script src="<?=ROOT?>public/src/dashboard.js"></script>