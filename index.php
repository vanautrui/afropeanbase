<html>
<?php
    include("include.fragment.html");
?>
<body>
<div class="onboard">
    <div class="row justify-content-center">
        <img src="assets/bigger_cut.png" style="height: 100%; width: auto;">
    </div>
</div>

<div class="offboard">
    <?php
        include("header.fragment.html");
    ?>
    <div class="container">
      <h2 class="text-center">Upcoming Events:</h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="assets/bannernew.jpg" style="width:100%;">
              </div>

              <div class="item">
                <img src="assets/banner3.jpg" style="width:100%;">
              </div>

              <div class="item">
                <img src="assets/banner.jpg" style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr>
    <h1 class="text-center">Past Events:</h1>
    

</div>

    <!-- <div class="mycontainer container-fluid">
        <div class="m-3"></div>
        <h1 class="text-center">Upcoming Events:</h1>

        <div class="row justify-content-center">
            <img
                    src="https://tickets.afropeanbase.com/wp-content/uploads/2019/02/https_cdn.evbuc_.com_images_56062838_220840326330_1_original.20190131-220610.jpeg"
                    style="max-width:100%;"
            />
        </div>
        <hr>
        <h1 class="text-center">
            Past Events:
        </h1>
    </div> -->

</body>
</html>
