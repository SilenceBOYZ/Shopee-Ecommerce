<?php
$sql_slider = "Select * from slider";
$sql_banner = "Select * from banner";
$load_slider = mysqli_query($connect, $sql_slider);
$load_banner = mysqli_query($connect, $sql_banner);
$row_count = mysqli_num_rows($load_slider);
?>



<div class="banner-content">
  <div class="slider">
    <div id="carouselExampleDark" class="carousel carousel-dark slide slider-img">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <?php for ($i = 1; $i <= $row_count; $i++) {
          $row = mysqli_fetch_array($load_slider);
          if ($i == 1) { ?>
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="admin/modules/slider/upload/<?php echo ($row["hinhanhslide"]); ?>" class="d-block w-100 image-slider" alt="...">
            </div>
          <?php } else { ?>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="admin/modules/slider/upload/<?php echo ($row["hinhanhslide"]); ?>" class="d-block w-100 image-slider" alt="...">
            </div>
        <?php }
        } ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>  


  <div class="banner-image">
    <?php
    for ($i = 1; $i <= 2; $i++) {
      $row2 = mysqli_fetch_array($load_banner);
    ?>
      <img class="image-bn-small" src="admin/modules/banner/upload/<?php echo ($row2["hinhanhbanner"]); ?>">
    <?php } ?>
  </div>

</div>