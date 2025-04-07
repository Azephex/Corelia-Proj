<?php
session_start(); 
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Music List</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Music-List.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.18.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "corelia_project",
		"logo": "images/CoreliaProject_MasterLogo_Colour_PNG.png",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://instagram.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Music List">
    <meta name="twitter:description" content="corelia_project">
    <meta property="og:title" content="Music List">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-eb68"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Home.php" class="u-image u-logo u-image-1" data-image-width="1646" data-image-height="896" title="Home">
          <img src="images/CoreliaProject_MasterLogo_Colour_PNG.png" class="u-logo-image u-logo-image-1">
        </a>
        <a href="register_form.php" class="u-border-2 u-border-active-palette-2-dark-1 u-border-hover-palette-2-base u-border-palette-1-base u-btn u-button-style u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-1" > </a>
        <?php
        if (!isset($_SESSION["user"])){
        echo "<a href='login_form.php' class='u-border-2 u-border-active-palette-2-dark-1 u-border-hover-palette-2-base u-border-palette-1-base u-btn u-button-style u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-2'> Login </a>";
        }
        else {
        echo "<a href='logout.php' class='u-border-2 u-border-active-palette-2-dark-1 u-border-hover-palette-2-base u-border-palette-1-base u-btn u-button-style u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-2'> Logout </a>";
        }
        ?>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
              </g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-2-base" href="Composer_profile.php" style="padding: 10px 20px;">Composer Profile</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-2-base" href="repository.php"  style="padding: 10px 20px;">Repository list</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-2-base" href="MapMarker.php" style="padding: 10px 20px;">Map</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-2-base" href="Music-List.php" style="padding: 10px 20px;">Music List</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-2-base" href="index.php"  style="padding: 10px 20px;">Blog</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-2-base"  href="forum-page/index.php"  style="padding: 10px 20px;">Forum</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-2-base" href="About-us.php" style="padding: 10px 20px;">About us</a>
          </li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Composer_profile.php">Composer Profile</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="repository.php" >Repository list</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Music-List.php">Music List</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" >Blog</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="forum-page/index.php" >Forum</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-us.php">About us</a>
                </li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-9217">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/CoreliaProject_SubLogo_Colour_JPG.jpg" alt="" data-image-width="1516" data-image-height="580">
        <h1 class="u-text u-text-default u-text-2">Curated music list</h1>
        <p class="u-text u-text-2">The purpose of the page is to provide a curated listening list according to instrument and composers.  
        This will connect with Spotify to make it possible for you to listen to music.</p>


        <?php 
                //echo $_SESSION["user"]; 
                if(isset($_SESSION["user"])){
                if($_SESSION["user"] == 'ADMIN1'){
                  echo "<a href ='addList.php' style='float: right; padding-right: 20px; padding: 5px;'>Check more list</a>";
                }
                else{
                  echo "Nothing"; 
                }}
                           
                ?>
  
      </div>
    </section>



    <section class="u-carousel u-slide u-block-33f9-1" id="carousel_f533" data-interval="5000" data-u-ride="carousel">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-33f9-2">
        <li data-u-target="#carousel_f533" data-u-slide-to="0" class="u-active u-grey-30"></li>
        <li data-u-target="#carousel_f533" class="u-grey-30" data-u-slide-to="1"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-carousel-item u-clearfix u-section-2-1">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
              <div class="u-layout">
                <div class="u-layout-col">
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" src="" data-image-width="1280" data-image-height="853">
                        <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                      </div>
                      <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-bottom u-container-layout-2">
                          <h2 class="u-text u-text-1">Clarinet Playlist&nbsp;</h2>
                          <?php  

                          //Clarinet playlist 
                          $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
                          Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
                          mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

                          $ID = 135;

                          $secondString = "select w.name, c.name from work w, composer c, instruments_in_work i where c.id = w.composer_id and i.work_id = w.id and i.instrument_id=135";
                          $secondResult = @mysqli_query($DBConnect , $secondString)
                          Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

                          $row = mysqli_fetch_row($secondResult);
                          echo "<div class='gfg'>";
                          while ($row) {
                            
                            echo "<p class='u-text u-text-2'> # $row[0] by  $row[1]&nbsp;</p>";
                       
                            $row = mysqli_fetch_row($secondResult);
                          }
                          echo "</div>";
                  ?>

            
                          <a href="https://open.spotify.com/album/1zzyArbnxBPmMcyhW7nqTi?si=hVGl4i-zT_K5MhPOqTZZiA" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-1" target="_blank"> Connect to spotify</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-3">
                        <div class="u-container-layout u-valign-bottom u-container-layout-3">
                          <h2 class="u-text u-text-3">Oboe playlist</h2>
                            <style>
          
                            div.gfg {
                                margin:5px;
                                padding:5px;
                              
                                width: 3500px;
                                height: 200px;
                                overflow: auto;
                                text-align:justify;
                            }
                            </style>
                          <?php  

                            //Oboe playlist 
                            $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
                            Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
                            mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

                            $ID = 54;

                            $secondString = "select w.name, c.name from work w, composer c, instruments_in_work i where c.id = w.composer_id and i.work_id = w.id and i.instrument_id=54";
                            $secondResult = @mysqli_query($DBConnect , $secondString)
                            Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

                            $row = mysqli_fetch_row($secondResult);
                            echo "<div class='gfg'>";
                            while ($row) {
                              
                              echo "<p class='u-text u-text-4'> # $row[0] by  $row[1]&nbsp;</p>";
                             
                              $row = mysqli_fetch_row($secondResult);
                            }
                            echo "</div>";
                            ?>
                  
                          <a href="https://open.spotify.com/playlist/2roeBuC7xLAk0peBT73Xxw?si=2923e7dc43984bf6" class="u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-2" target="_blank">Connect to spotify</a>
                        </div>
                      </div>
                      <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-2" src="" data-image-width="1280" data-image-height="852">
                        <div class="u-container-layout u-valign-middle u-container-layout-4"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-section-2-2">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
              <div class="u-layout">
                <div class="u-layout-col">
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" src="" data-image-width="1280" data-image-height="853">
                        <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                      </div>
                      <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                          <h2 class="u-text u-text-1">Mary-kouyoumdjian playlist&nbsp;</h2>
                          <?php  

                                //Clarinet playlist 
                                $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
                                Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
                                mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

                                $ID = 92;

                                $secondString = "select w.name, c.name from work w, composer c where c.id = 92 and w.composer_id = 92";
                                $secondResult = @mysqli_query($DBConnect , $secondString)
                                Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

                                $row = mysqli_fetch_row($secondResult);
                                echo "<div class='gfg'>";
                                while ($row) {
                                  
                                  echo "<p class='u-text u-text-2'> # $row[0] by  $row[1]&nbsp;</p>";
                                
                                  $row = mysqli_fetch_row($secondResult);
                                }
                                echo "</div>";


                                ?>
                          <a href="https://open.spotify.com/artist/6exfLeOnAj36TaDKcOOR4c?si=NuB_wKXRSCm6Ru4GGwCAwQ" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-1" target="_blank"> Connect to spotify</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-3">
                          <h2 class="u-text u-text-3"> Smith, Alice Mary music list&nbsp;</h2>
                               <?php  

                                //Clarinet playlist 
                                $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
                                Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
                                mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

                                $ID = 92;

                                $secondString = "select w.name, c.name from work w, composer c where c.id = 136 and w.composer_id = 136";
                                $secondResult = @mysqli_query($DBConnect , $secondString)
                                Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

                                $row = mysqli_fetch_row($secondResult);
                                echo "<div class='gfg'>";
                                while ($row) {
                                  
                                  echo "<p class='u-text u-text-4'> # $row[0] by  $row[1]&nbsp;</p>";
                                
                                  $row = mysqli_fetch_row($secondResult);
                                }
                                echo "</div>";


                                ?>
                          <a href="https://open.spotify.com/album/2WZyEkHUmYFjefgbb97ig8?si=Ait2Hzp5ToSs6GG8qd74Ag" class="u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-2" target="_blank">Connect to spotify</a>
                        </div>
                      </div>
                      <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-2" src="" data-image-width="1280" data-image-height="851">
                        <div class="u-container-layout u-valign-middle u-container-layout-4"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-33f9-5" href="#carousel_f533" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-33f9-6" href="#carousel_f533" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-custom-color-2 u-footer u-footer" id="sec-a90e"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/CoreliaProject_MasterLogo_ReversedWhite_PNG.png" alt="" data-image-width="1813" data-image-height="1156">
        <p class="u-small-text u-text u-text-variant u-text-1">Contact us</p>
        <div class="u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-white"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 97.75 97.75" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fc9a"></use></svg><svg class="u-svg-content" viewBox="0 0 97.75 97.75" x="0px" y="0px" id="svg-fc9a" style="enable-background:new 0 0 97.75 97.75;"><g><path d="M48.875,0C21.882,0,0,21.882,0,48.875S21.882,97.75,48.875,97.75S97.75,75.868,97.75,48.875S75.868,0,48.875,0z    M67.521,24.89l-6.76,0.003c-5.301,0-6.326,2.519-6.326,6.215v8.15h12.641L67.07,52.023H54.436v32.758H41.251V52.023H30.229V39.258   h11.022v-9.414c0-10.925,6.675-16.875,16.42-16.875l9.851,0.015V24.89L67.521,24.89z"></path>
</g></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-white"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fdce"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-fdce"><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm116.886719 199.601562c.113281 2.519532.167969 5.050782.167969 7.59375 0 77.644532-59.101563 167.179688-167.183594 167.183594h.003906-.003906c-33.183594 0-64.0625-9.726562-90.066406-26.394531 4.597656.542969 9.277343.8125 14.015624.8125 27.53125 0 52.867188-9.390625 72.980469-25.152344-25.722656-.476562-47.410156-17.464843-54.894531-40.8125 3.582031.6875 7.265625 1.0625 11.042969 1.0625 5.363281 0 10.558593-.722656 15.496093-2.070312-26.886718-5.382813-47.140624-29.144531-47.140624-57.597657 0-.265624 0-.503906.007812-.75 7.917969 4.402344 16.972656 7.050782 26.613281 7.347657-15.777343-10.527344-26.148437-28.523438-26.148437-48.910157 0-10.765624 2.910156-20.851562 7.957031-29.535156 28.976563 35.554688 72.28125 58.9375 121.117187 61.394532-1.007812-4.304688-1.527343-8.789063-1.527343-13.398438 0-32.4375 26.316406-58.753906 58.765625-58.753906 16.902344 0 32.167968 7.144531 42.890625 18.566406 13.386719-2.640625 25.957031-7.53125 37.3125-14.261719-4.394531 13.714844-13.707031 25.222657-25.839844 32.5 11.886719-1.421875 23.214844-4.574219 33.742187-9.253906-7.863281 11.785156-17.835937 22.136719-29.308593 30.429687zm0 0"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-white"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4885"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4885"><path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0"></path><path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"></path><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="Custom" title="Custom" href=""><span class="u-icon u-social-custom u-social-icon u-text-white u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6e12"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-6e12"><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0"></path></svg></span>
          </a>
        </div>
        <p class="u-small-text u-text u-text-variant u-text-2">@2022 Corelia project. All Rights Reserved.</p>
      </div></footer>
  
</body></html>