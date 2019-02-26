<html>
<?php
    include("include.fragment.html");
?>
<body>
    <?php
        include("header.fragment.html");
    ?>
  <div class="container">

    <div class="row" id="artist-showcase">
        <?php
            $artist_images=array(

                "https://scontent-frt3-2.xx.fbcdn.net/v/t1.0-9/52303441_376142526515740_5681651449482706944_n.jpg?_nc_cat=108&_nc_ht=scontent-frt3-2.xx&oh=3beb005b9d45d912516a7cd506baa399&oe=5D1A8CD2",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/51308511_371282657001727_8220953672427765760_n.jpg?_nc_cat=104&_nc_ht=scontent-amt2-1.xx&oh=5505908512a4bf22972a96bf19f9efc5&oe=5D26C585",
                "https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/50986168_368614330601893_674392925844537344_n.jpg?_nc_cat=103&_nc_ht=scontent-frt3-1.xx&oh=d235f19cc3effb02deee65732c254100&oe=5CF100A4",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/50853143_367582700705056_6163381398083207168_n.jpg?_nc_cat=107&_nc_ht=scontent-amt2-1.xx&oh=d0ece8888a7a891ac698c34726ebaab8&oe=5CEDBA97",
                "https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/50851677_365804594216200_640813750537945088_n.jpg?_nc_cat=109&_nc_ht=scontent-frt3-1.xx&oh=9305ce4d195f855c0e2ebe9bb7ffe304&oe=5CF84DB9",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/50271402_361134591349867_6921681019770765312_n.jpg?_nc_cat=108&_nc_ht=scontent-amt2-1.xx&oh=3759827f9fb9c2fe5bd438c477de10e1&oe=5D21D9A6",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/49937920_358739434922716_3048327813993070592_n.jpg?_nc_cat=110&_nc_ht=scontent-amt2-1.xx&oh=59ae3f8230aad3afa0be71adedd497e8&oe=5D1BA12B",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/49525731_357708728359120_5670956259361161216_n.jpg?_nc_cat=106&_nc_ht=scontent-amt2-1.xx&oh=663aaf6ae836e3fdaeb84686c533b83d&oe=5D2490D3",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/46112772_324484691681524_359162628628545536_n.jpg?_nc_cat=110&_nc_ht=scontent-amt2-1.xx&oh=63eed69edbeab786eaac1937b3cf780c&oe=5CDFA15A",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/45001814_317620695701257_7302716490908696576_n.jpg?_nc_cat=104&_nc_ht=scontent-amt2-1.xx&oh=b4b800c24efa6e25a8f71e30433c7da4&oe=5D188D4A",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/43626652_314716902658303_7708602866159583232_n.jpg?_nc_cat=103&_nc_ht=scontent-amt2-1.xx&oh=e22e940ee9cf27e1c959b298c7c30e77&oe=5D1A95B8",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/44074996_309111639885496_7354518744300781568_n.jpg?_nc_cat=106&_nc_ht=scontent-amt2-1.xx&oh=b198adfd9c32e3405b5bb093a268b860&oe=5D266AE4",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/43184436_305228086940518_3669770098089918464_n.jpg?_nc_cat=106&_nc_ht=scontent-amt2-1.xx&oh=23e5db4c1cb1b3cd284ec1f17752d190&oe=5CE4E677",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/42681062_302537060542954_4239025823710969856_n.jpg?_nc_cat=109&_nc_ht=scontent-amt2-1.xx&oh=1cc4bea3a3eb76537ab49f9325530c46&oe=5D1F90CE",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/42361342_299958194134174_8028274576171466752_n.jpg?_nc_cat=105&_nc_ht=scontent-amt2-1.xx&oh=23cd34d3f4068a69cd9b247dc1b4f9c9&oe=5D214E0B",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/41964639_297740544355939_3245642339602923520_n.jpg?_nc_cat=103&_nc_ht=scontent-amt2-1.xx&oh=9ea04604bc3c85aecff5a991e5ea3a36&oe=5D1999FD",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/41467924_293973444732649_8320292671096619008_n.jpg?_nc_cat=103&_nc_ht=scontent-amt2-1.xx&oh=7a4f52384dd256a96020ad1cea06ba59&oe=5D186238",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/39976778_284858972310763_3270684863681789952_n.jpg?_nc_cat=105&_nc_ht=scontent-amt2-1.xx&oh=8a0c6722b009a27d607fe7406bf16acc&oe=5D1E6658",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/39397733_277667043029956_176441066155671552_n.jpg?_nc_cat=102&_nc_ht=scontent-amt2-1.xx&oh=3a370690daddc42caf21f71fd80aa87b&oe=5CDD7E7B",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/33248932_205358353594159_8144813024780222464_n.jpg?_nc_cat=103&_nc_ht=scontent-amt2-1.xx&oh=c3bae6d4b4206e2a2a6eaf15941daaac&oe=5CDC0597"
            );

            for($i=0;$i<sizeof($artist_images);$i++){
                echo "<img class='artist_picture m-3' src=\"" . $artist_images[$i] . "\">";
            }
        ?>
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

  </div>
</body>
</html>
