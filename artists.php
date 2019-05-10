<html>
<?php
    include("include.fragment.html");
?>
<body>
    <?php
        include("header.fragment.html");
    ?>

  <div class="container-fluid">

	<div class="row justify-content-center m-3">

		<div class="btn-group bg-afropean-dark fg-afropean " role="group">

			<a href="/artists.php?category=All"
				class="btn btn-secondary bg-afropean-dark fg-afropean">
				All
			</a>
			<a href="/artists.php?category=Influencer"
			  class="btn btn-secondary bg-afropean-dark fg-afropean">
			  Influencers
			</a>
			<a href="/artists.php?category=Musician"
			  class="btn btn-secondary bg-afropean-dark fg-afropean">
			  Musicians
			</a>
			<a href="/artists.php?category=MC"
			  class="btn btn-secondary bg-afropean-dark fg-afropean">
			  MC's
			</a>
			<a href="/artists.php?category=model"
			  class="btn btn-secondary bg-afropean-dark fg-afropean">
			  Models
			</a>
			<a href="/artists.php?category=dancer"
			  class="btn btn-secondary bg-afropean-dark fg-afropean">
			  Dancers
			</a>
			<a href="/artists.php?category=DJ"
			  class="btn btn-secondary bg-afropean-dark fg-afropean">
			  DJ's
			</a>
		</div>
	</div>

    <div class="row justify-content-center" id="artist-showcase">


        <?php

            $artist_cards=array(
                array(
                        "/monochrome/george_alisigwe.jpg",
                        "George Alisigwe, Musician",
                        "https://www.instagram.com/georgealisigwe/",
                        "Musician"
                    ),
                array(
                        "/monochrome/ashlee_janelle.jpg",
                        "Ashlee Janelle, Influencer",
                        "https://www.instagram.com/ashleejanelle_/?hl=de",
                        "Influencer"
                ),
                array(
                        "/monochrome/sandra_lambeck.jpg",
                        "Sandra Lambeck, Influencer",
                        "https://www.instagram.com/sandralambeck/",
                        "Influencer"
                ),
                array(
                        "/monochrome/maleek_berry.jpg",
                        "Maleek Berry, Musician",
                        "https://www.instagram.com/maleekberry/",
                        "Musician"
                ),
                array(
                        "/monochrome/dj_noreuk.jpg",
                        "Dj Noreuk",
                        "https://www.instagram.com/djnoreuk/",
                        "DJ"
                ),
                array(
                        "/monochrome/dj_opanka.jpg",
                        "Dj Opanka (Belgium)",
                        "https://www.instagram.com/dj_opanka/",
                        "DJ"
                ),
                array(
                        "/monochrome/dj_emsi_flybokoe.jpg",
                        "Dj Emsi flybokoe (Holland)",
                        "https://www.instagram.com/emsiflybokoe/",
                        "DJ"
                ),
                array(
                        "/monochrome/dj_fii_fii.jpg",
                        "Dj FiiFii (UK)",
                        "https://www.instagram.com/fiifiidj/",
                        "DJ"
                ),
                array(
                        "/monochrome/mariseya.jpg",
                        "Mariseya, Musician (Holland)",
                        "https://www.instagram.com/mrsmariseya/",
                        "Musician"
                ),
                array(
                        "/monochrome/ynxg_bane.jpg",
                        "Yxng Bane, Musician (UK)",
                        "https://www.instagram.com/yxngbane/",
                        "Musician"
                ),
                array(
                        "/monochrome/ms_aba.jpg",
                        "Ms. Aba, Mc/Presenter (Holland)",
                        "https://www.instagram.com/ms.aba/",
                        "MC"
                ),
                array(
                        "/monochrome/kojo_funds.jpg",
                        "Kojo Funds, Musician (UK)",
                        "https://www.instagram.com/kojofunds/",
                        "Musician"
                ),
                array(
                        "/monochrome/deon_boakye.jpg",
                        "Deon Boakye, Musician (Italy)",
                        "https://www.instagram.com/deonboakye/",
                        "Musician"
                ),
                array(
                        "/monochrome/joceappia.jpg",
                        "Joceappia, Fitness Model (Germany)",
                        "https://www.instagram.com/joceappia/",
                        "model"
                ),
                array(
                        "/monochrome/dj_brooke_bailey.jpg",
                        "Dj Brooke Bailey (Belgium)",
                        "https://www.instagram.com/dj_brookebailey/",
                        "DJ"
                ),
                array(
                        "/monochrome/maybeline_akua.jpg",
                        "Maybeline Akua, Model (Amsterdam)",
                        "https://www.instagram.com/maybeline.akua/",
                        "model"
                )
            );

            function make_artist_card($artist){
                return
                 "<div>"
                     ."<a href='" . $artist[2] . "'>"
                        . "<img class='artist_picture m-3' src='" . $artist[0] . "'>"
                    . "</a>"
                    . "<p class='text-center'>" . $artist[1] . "</p>"
                . "</div>";
            }




            function filter_print_artist($category,$artist_cards){
                for($i=0;$i<sizeof($artist_cards);$i++){
                    $artist = $artist_cards[$i];
                    if($artist[3]==$category || $category == "All"){
                        echo(make_artist_card($artist));
                    }
                }
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


    <div class="row justify-content-center ">
        <?php
			$category="All";
			if( isset($_GET["category"]) ){
				$category=$_GET["category"];
			}

            filter_print_artist($category,$artist_cards);
        ?>
    </div>


  </div>
</body>
</html>
