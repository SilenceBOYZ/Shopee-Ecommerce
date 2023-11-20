<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/adminstyle.css">
  <title>Document</title>
</head>

<body>
  <?php
  include("config.php");
  include("modules/menu.php");
  ?>
  <div class="content">
    <?php 
      include("modules/content.php");
    ?>
  </div>
</body>

</html>