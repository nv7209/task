<?php
$title = "Home";
include "layout/head.php";
include "layout/header.php";
?>
<div class="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2500">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/01_Bokaro_Steel_Plant.jpg" alt="First slide" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images\bokaro-hosts-international-automotive-steel-seminar.jpg" alt="Second slide" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images\steel-660_031215012132_042015031841_042115075257_030716013627.jpg" alt="Third slide" />
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div>
</div>
<div>

</div>
<div>

</div>
<?php
include "layout/footer.php";
?>