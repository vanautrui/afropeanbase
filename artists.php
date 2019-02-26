<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include("header.html");
    ?>
  <div class="container">

    <div class="row" id="artist-showcase">

      <!--
      <div class="card">
        <img class="card-img-top artist_picture" src="https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/50986168_368614330601893_674392925844537344_n.jpg?_nc_cat=103&_nc_ht=scontent-frt3-1.xx&oh=d235f19cc3effb02deee65732c254100&oe=5CF100A4"/>
        <div class="card-body">
          <p class="card-text">
            Meet Afro-European<br>
            #socialmediainfluencer based in<br>
            #germany<br>
            Sandra Lambeck
          </p>
        </div>
      </div>
      -->

    </div>
    <script>
      /*put the css for the individual artist into the DOM
      with javascript to avoid writing alot of html*/

      var target = document.getElementById("artist-showcase");

      function makeartisthtml(myartist){
        var artist=
        "<div class='card m-3' style='max-width: 400px;'>\
          <img class='card-img-top artist-picture' src='"+myartist.imgsrc+"'/>\
          <div class='card-body'>\
            <p class='card-text'>\
              "+myartist.text+"\
            </p>\
          </div>\
        </div>";

        return artist;
      }

      var artists=[
        {
          imgsrc:"https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/50986168_368614330601893_674392925844537344_n.jpg?_nc_cat=103&_nc_ht=scontent-frt3-1.xx&oh=d235f19cc3effb02deee65732c254100&oe=5CF100A4",
          text:"Meet Afro-European<br>#socialmediainfluencer based in<br>#germany<br>Sandra Lambeck"
        },
        {
          imgsrc:"https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/50851677_365804594216200_640813750537945088_n.jpg?_nc_cat=109&_nc_ht=scontent-frt3-1.xx&oh=9305ce4d195f855c0e2ebe9bb7ffe304&oe=5CF84DB9",
          text:"Meet Afro-European#Musician <br>based in #holland<br> @thisis_alberthino"
        },
      ];

      //$("artist-showcase").append(makeartisthtml(artists[0]));
      for(var i=0; i<artists.length; i++){
        target.innerHTML+=makeartisthtml(artists[i]);
      }
    </script>

  </div>
</body>
</html>
