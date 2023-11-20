<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/query.css">
  <link rel="stylesheet" href="css/singleproduct.css">
  <link rel="stylesheet" href="css/categories.css">
  <script src="js/bootstrap.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <title>Shoppee</title>
</head>

<body>
  <?php
  include("config.php");
  include("modules/categories/headerCatergories.php");
  ?>
  <main>
    <section class="banner fix-categories">
    </section>

    <section class="main-content">
      <?php
      include("modules/categories/product.php");
      ?>
    </section>


  </main>
  <?php
  include("modules/footer.php");
  ?>


</body>

</html>