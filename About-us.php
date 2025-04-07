<?php
session_start(); 
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>About us</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="About-us.css" media="screen">
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
    <meta name="twitter:title" content="About us">
    <meta name="twitter:description" content="corelia_project">
    <meta property="og:title" content="About us">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-eb68"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Home.php" class="u-image u-logo u-image-1" data-image-width="1646" data-image-height="896" title="Home">
          <img src="images/CoreliaProject_MasterLogo_Colour_PNG.png" class="u-logo-image u-logo-image-1">
        </a>
        <a href="register_form.php" class="u-border-2 u-border-active-palette-2-dark-1 u-border-hover-palette-2-base u-border-palette-1-base u-btn u-button-style u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-1" ></a>
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
    <section class="u-clearfix u-section-1" id="sec-e0a2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/CoreliaProject_MasterLogo_Colour_PNG.png" alt="" data-image-width="1646" data-image-height="896">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-default u-text-1">About Us</h2>
                  <p class="u-text u-text-2">
                    The background of the Corelia project is to recognize the current situation of female composers in the classical industry and to propose solutions to overcome it. 
                    The Corelia project is aware that there is no centralized database for female composers, and it is currently difficult to find or search for information on work by female composers. 
                    Therefore, a centralized database web will help spread women composers' work. 
                    In addition, while sharing content related to various female composers on the web page, 
                    We believe the project will create more opportunities to improve awareness of the contribution of classical industries to female composers.<br>
                  </p>
                  <a href="#carousel_d34d" class="u-btn u-button-style u-dialog-link u-hover-palette-1-dark-1 u-palette-1-base u-btn-1"><span class="u-icon"><img></span>&nbsp;Contact us
                  </a>
                  <a href="https://www.gofundme.com/f/corelia-project" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2" target="_blank"><span class="u-icon"><img></span>Donate Corelia project now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

  <section class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-dialog-section-4" id="carousel_d34d">
      <div class="u-container-style u-dialog u-shape-rectangle u-white u-dialog-1">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <div class="u-align-center u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
            <div class="u-container-layout u-container-layout-2">
              <h3 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-palette-5-dark-2 u-text-1">&nbsp;<br> Write a message
              </h3>
              <div class="u-form u-form-1">
                <form enctype="multipart/form-data" method="POST" action="">
                <div class="u-form-group u-form-name u-form-group-1">
                    <label for="name-9cc4" class="u-form-control-hidden u-label">Name</label>
                    <input type="text" placeholder="Enter your Name" id="name-9cc4" name="sender_name" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="">
                  </div>
                  <div class="u-form-email u-form-group u-form-group-2">
                    <label for="email-9cc4" class="u-form-control-hidden u-label">Email</label>
                    <input type="email" placeholder="Enter your email" id="email-9cc4" name="sender_email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="">
                  </div>
                  <div class="u-form-group u-form-textarea u-form-group-3">
                    <label for="textarea-5b72" class="u-label">Message</label>
                    <textarea rows="4" cols="50" id="textarea-5b72" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
                  </div>       
                  <br><label>Add attachment: <input type="file" name="my_files[]" multiple/></label> <br>
                  <br><label><input class="u-black u-btn u-btn-submit u-button-style u-btn-1" type="submit" name="button" value="Submit" /></label>
              </form>
              </div>
            </div>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-50 u-icon-1">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 409.806 409.806" ><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4e2d"></use></svg>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 409.806 409.806" x="0px" y="0px" id="svg-4e2d" style="enable-background:new 0 0 409.806 409.806;"><g><g><path d="M228.929,205.01L404.596,29.343c6.78-6.548,6.968-17.352,0.42-24.132c-6.548-6.78-17.352-6.968-24.132-0.42    c-0.142,0.137-0.282,0.277-0.42,0.42L204.796,180.878L29.129,5.21c-6.78-6.548-17.584-6.36-24.132,0.42    c-6.388,6.614-6.388,17.099,0,23.713L180.664,205.01L4.997,380.677c-6.663,6.664-6.663,17.468,0,24.132    c6.664,6.662,17.468,6.662,24.132,0l175.667-175.667l175.667,175.667c6.78,6.548,17.584,6.36,24.132-0.42    c6.387-6.614,6.387-17.099,0-23.712L228.929,205.01z"></path>
</g>
</g></svg>
      </button>
      </div>
    </section><style> .u-dialog-section-4 {
  min-height: 947px;
}

.u-dialog-section-4 .u-dialog-1 {
  width: 800px;
  min-height: 456px;
  height: auto;
  margin: 60px auto;
}

.u-dialog-section-4 .u-container-layout-1 {
  padding: 30px;
}

.u-dialog-section-4 .u-group-1 {
  min-height: 396px;
  height: auto;
  margin-top: 0;
  margin-bottom: 0;
}

.u-dialog-section-4 .u-container-layout-2 {
  padding: 16px 30px 0;
}

.u-dialog-section-4 .u-text-1 {
  font-weight: 700;
  font-size: 3rem;
  line-height: 1;
  margin: 0;
}

.u-dialog-section-4 .u-form-1 {
  height: 207px;
  width: 680px;
  margin: 14px 0 0;
}

.u-dialog-section-4 .u-form-group-1 {
  width: 100%;
}

.u-dialog-section-4 .u-form-group-2 {
  width: 100%;
}

.u-dialog-section-4 .u-form-group-3 {
  margin-left: 0;
}

.u-dialog-section-4 .u-form-group-4 {
  width: 100%;
}

.u-dialog-section-4 .u-btn-1 {
  background-image: none;
  border-style: none;
  text-transform: uppercase;
  font-weight: 700;
  padding-left: 50px;
  padding-right: 50px;
  letter-spacing: 2px;
}

.u-dialog-section-4 .u-icon-1 {
  width: 16px;
  height: 16px;
  left: auto;
  top: 14px;
  position: absolute;
  right: 14px;
}

@media (max-width: 1199px) {
  .u-dialog-section-4 .u-group-1 {
    height: auto;
  }
}

@media (max-width: 991px) {
  .u-dialog-section-4 .u-dialog-1 {
    width: 720px;
  }

  .u-dialog-section-4 .u-container-layout-2 {
    padding-right: 0;
    padding-bottom: 0;
  }

  .u-dialog-section-4 .u-form-1 {
    width: 600px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-4 .u-dialog-1 {
    width: 540px;
  }

  .u-dialog-section-4 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-dialog-section-4 .u-container-layout-2 {
    padding-left: 20px;
  }

  .u-dialog-section-4 .u-form-1 {
    width: 500px;
  }
}

@media (max-width: 575px) {
   .u-dialog-section-4 {
    min-height: 1341px;
  }

  .u-dialog-section-4 .u-dialog-1 {
    width: 340px;
    min-height: 686px;
    margin-top: 246px;
  }

  .u-dialog-section-4 .u-container-layout-1 {
    padding-top: 40px;
    padding-left: 25px;
    padding-right: 25px;
  }

  .u-dialog-section-4 .u-container-layout-2 {
    padding-left: 10px;
  }

  .u-dialog-section-4 .u-form-1 {
    width: 300px;
  }
}</style>
</body></html>

<?php
 $recipient_email    = "minji222324@gmail.com"; //recepient
 $from_email         = "103510175@student.swin.edu.au"; //from email using site domain.
 
 if($_POST){
     
     //php validation, exit outputting json string
     if(empty($_POST["sender_name"])){
         print 'Name is too short or empty!';
         exit;
     }
     if(!filter_var($_POST["sender_email"], FILTER_VALIDATE_EMAIL)){ //email validation
         print 'Please enter a valid email!';
         exit;
     }
     if(empty($_POST["message"])){ //check emtpy message
         print 'Too short message! Please enter something.';
         exit;
     }
 
     $sender_name    = filter_var($_POST["sender_name"], FILTER_SANITIZE_STRING); //capture sender name
     $sender_email   = filter_var($_POST["sender_email"], FILTER_SANITIZE_STRING); //capture sender emai
     $message        = filter_var($_POST["message"], FILTER_SANITIZE_STRING); //capture message
 
     $attachments = $_FILES['my_files'];
     
     $file_count = count($attachments['name']); //count total files attached
     $boundary = md5("sanwebe.com"); 
     
     //construct a message body to be sent to recipient
     $message_body =  "Message from $sender_name\n";
     $message_body .=  "------------------------------\n";
     $message_body .=  "$message\n";
     $message_body .=  "------------------------------\n";
     $message_body .=  "$sender_name\n";
     $message_body .=  "$sender_email\n";

     
     if($file_count > 0){ //if attachment exists
         //header
         $headers = "MIME-Version: 1.0\r\n"; 
         $headers .= "From:".$from_email."\r\n"; 
         $headers .= "Reply-To: ".$sender_email."" . "\r\n";
         $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
         
         //message text
         $body = "--$boundary\r\n";
         $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
         $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
         $body .= chunk_split(base64_encode($message_body)); 
 
         //attachments
         for ($x = 0; $x < $file_count; $x++){       
             if(!empty($attachments['name'][$x])){
                 
                 if($attachments['error'][$x]>0) //exit script and output error if we encounter any
                 {
                     $mymsg = array( 
                     1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini", 
                     2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form", 
                     3=>"The uploaded file was only partially uploaded", 
                     4=>"No file was uploaded", 
                     6=>"Missing a temporary folder" ); 
                     print  $mymsg[$attachments['error'][$x]]; 
                     exit;
                 }
                 
                 //get file info
                 $file_name = $attachments['name'][$x];
                 $file_size = $attachments['size'][$x];
                 $file_type = $attachments['type'][$x];
                 
                 //read file 
                 $handle = fopen($attachments['tmp_name'][$x], "r");
                 $content = fread($handle, $file_size);
                 fclose($handle);
                 $encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)
                 
                 $body .= "--$boundary\r\n";
                 $body .="Content-Type: $file_type; name=".$file_name."\r\n";
                 $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
                 $body .="Content-Transfer-Encoding: base64\r\n";
                 $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
                 $body .= $encoded_content; 
             }
         }
 
     }else{ //send plain email otherwise
        $headers = "From:".$from_email."\r\n".
         "Reply-To: ".$sender_email. "\n" .
         "X-Mailer: PHP/" . phpversion();
         $body = $message_body;
     }
     $subject = "Email From Crorelia Project Website" ;
     $sentMail = mail($recipient_email, $subject, $body, $headers);
     if($sentMail) //output success or failure messages
     {       
      echo '<script>alert("Thanks for your message, we will contact you through the entered email soon")</script>';
         exit;
     }else{
         //print 'Could not send mail! Please check your PHP mail configuration.';  
         exit; 
     }
 }
?>
