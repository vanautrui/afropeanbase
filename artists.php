<html>
<?php
    include("include.fragment.html");
?>
<body>
    <?php
        include("header.fragment.html");
    ?>
  <div class="container-fluid">

              <div class="artist"> SOCIAL MEDIA INFLUENCER</div>
              <div class="artist">MUSICIAN</div>
              <div class="artist">MODELS</div>
              <div class="artist">DANCERS </div>
              <div class="artist">MCs</div>
              <div class="artist">DJs</div>
    <div class="row justify-content-center" id="artist-showcase">


        <?php
            $artist_images=array(





                "https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/50851677_365804594216200_640813750537945088_n.jpg?_nc_cat=109&_nc_ht=scontent-frt3-1.xx&oh=9305ce4d195f855c0e2ebe9bb7ffe304&oe=5CF84DB9",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/45001814_317620695701257_7302716490908696576_n.jpg?_nc_cat=104&_nc_ht=scontent-amt2-1.xx&oh=b4b800c24efa6e25a8f71e30433c7da4&oe=5D188D4A",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/42681062_302537060542954_4239025823710969856_n.jpg?_nc_cat=109&_nc_ht=scontent-amt2-1.xx&oh=1cc4bea3a3eb76537ab49f9325530c46&oe=5D1F90CE",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/41964639_297740544355939_3245642339602923520_n.jpg?_nc_cat=103&_nc_ht=scontent-amt2-1.xx&oh=9ea04604bc3c85aecff5a991e5ea3a36&oe=5D1999FD",
                /*
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/42361342_299958194134174_8028274576171466752_n.jpg?_nc_cat=105&_nc_ht=scontent-amt2-1.xx&oh=23cd34d3f4068a69cd9b247dc1b4f9c9&oe=5D214E0B",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/39397733_277667043029956_176441066155671552_n.jpg?_nc_cat=102&_nc_ht=scontent-amt2-1.xx&oh=3a370690daddc42caf21f71fd80aa87b&oe=5CDD7E7B",
                "https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/33248932_205358353594159_8144813024780222464_n.jpg?_nc_cat=103&_nc_ht=scontent-amt2-1.xx&oh=c3bae6d4b4206e2a2a6eaf15941daaac&oe=5CDC0597"

                */








            );

            $artist_cards=array(
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/b893b81e326beadd74f7485259f13509/5D02EB0F/t51.2885-15/e35/43276462_281278195921601_3969613862627526195_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "George Alisigwe, Musician",
                        "https://www.instagram.com/georgealisigwe/",
                        "Musician"
                    ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/115dd31f26e5ecc05801c14240a39f37/5D1182D6/t51.2885-15/e35/49283519_130467431307660_4876612131884495674_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Ashlee Janelle, Influencer",
                        "https://www.instagram.com/ashleejanelle_/?hl=de",
                        "Influencer"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/d407807e8eea81e5b2f3067e836e971f/5D1FAC52/t51.2885-15/e35/49321467_114295019639008_4668579499900551510_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Sandra Lambeck, Influencer",
                        "https://www.instagram.com/sandralambeck/",
                        "Influencer"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/e82745fe0aa39c48f6eb4795730d5867/5D01EF56/t51.2885-15/e35/50766671_1276212509185851_3515962590560094321_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Maleek Berry, Musician",
                        "https://www.instagram.com/maleekberry/",
                        "Musician"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/aebe80f49a8b53e94f150f9ed104e14b/5D28C95B/t51.2885-15/e35/47299700_221287898758281_8289701074786164150_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Dj Noreuk",
                        "https://www.instagram.com/djnoreuk/",
                        "DJ"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/fe1dbc0fe7d8c4b38a4006eeb8371425/5D09B023/t51.2885-15/e35/29088214_159905824699168_3096507584593526784_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Dj Opanka (Belgium)",
                        "https://www.instagram.com/dj_opanka/",
                        "DJ"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/896eda16881253fdcb56aff8d917a774/5D24B9F5/t51.2885-15/e35/35001230_420203385127038_8198348907361599488_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Dj Emsi flybokoe (Holland)",
                        "https://www.instagram.com/emsiflybokoe/",
                        "DJ"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/009ed243913cc9cef3adb2ddc3dae605/5D0AD2E3/t51.2885-15/e35/38685614_225299354801820_2013045360544448512_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Dj FiiFii (UK)",
                        "https://www.instagram.com/fiifiidj/",
                        "DJ"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/9d833c7e1563533d81f053a83ad0c435/5D14C798/t51.2885-15/e35/42893187_2180284608671680_5300677682202467498_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Mariseya, Musician (Holland)",
                        "https://www.instagram.com/mrsmariseya/",
                        "Musician"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/966e3ef3e8ba4f9cfe945fb5f0805780/5D16FAE4/t51.2885-15/e35/50055471_618135025290121_3935962419101581898_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Yxng Bane, Musician (UK)",
                        "https://www.instagram.com/yxngbane/",
                        "Musician"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/6d8dd37914a1afaebaf95b5d5e103060/5D23BCCA/t51.2885-15/e35/40532420_1141520382664276_6587911135444336640_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Ms. Aba, Mc/Presenter (Holland)",
                        "https://www.instagram.com/ms.aba/",
                        "MC"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/c516ce2dbdca084a9be049596bc61155/5D1756AC/t51.2885-15/e35/39638154_259009211607919_8384076306991546368_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Kojo Funds, Musician (UK)",
                        "https://www.instagram.com/kojofunds/",
                        "Musician"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/0705d94442f84384268d1f41b85f0a2a/5D103138/t51.2885-15/e35/41725149_1779798485462158_4390871962259442420_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Deon Boakye, Musician (Italy)",
                        "https://www.instagram.com/deonboakye/",
                        "Musician"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/51be5bd866494e7eb07be6dc2049dd37/5D167C74/t51.2885-15/e35/19931776_320420575094867_5151541597690658816_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Joceappia, Fitness Model (Germany)",
                        "https://www.instagram.com/joceappia/",
                        "model"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/d30231264244f3f27ffa3c2a238b8aff/5D065E81/t51.2885-15/e35/15876307_1322151114522054_2270065364702330880_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Dj Brooke Bailey (Belgium)",
                        "https://www.instagram.com/dj_brookebailey/",
                        "DJ"
                ),
                array(
                        "https://scontent-frx5-1.cdninstagram.com/vp/09eda60904a2b6d27210627a946a33ad/5D204302/t51.2885-15/e35/28153281_766531886877105_7939512424095285248_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com",
                        "Maybeline Akua, Model (Amsterdam)",
                        "https://www.instagram.com/maybeline.akua/",
                        "model"
                )
            );

            for($i=0;$i<sizeof($artist_cards);$i++){

                echo "<div>";
                    echo "<a href='" . $artist_cards[$i][2] . "'>";
                        echo "<img class='artist_picture m-3' src='" . $artist_cards[$i][0] . "'>";
                    echo "</a>";
                    echo "<p class='text-center'>" . $artist_cards[$i][1] . "</p>";
                echo "</div>";

            }

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
