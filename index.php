<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shoppee VietNam</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/query.css">
  <link rel="stylesheet" href="css/singleproduct.css">
  <script src="js/bootstrap.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>
  <?php
  include("config.php");
  include("modules/header.php");
  ?>

  <main>
    <section class="banner">
      <div class="container">
        <?php
          include("modules/banner.php");
          include("modules/itemcollection.php");
        ?>
      </div>
    </section>

    <section class="main-content">
      <?php
        include("modules/categories.php");
        include("modules/flashsale.php");
        include("modules/mall.php");
        include("modules/hotitem.php");
        include("modules/product.php");
      ?>
    </section>


  </main>
  <?php
  
  include("modules/footer.php");
  ?>  

</body>

</html>