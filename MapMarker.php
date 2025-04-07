<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Project" />
  <meta name="keywords" content="HTML5, tasks, Technology" />
  <meta name="author" content="Andres Meneses"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Technology Project Tool</title>
  <link href= "styles/stylehc.css" rel="stylesheet"/>
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />

<!--
  <link rel="stylesheet" href="nicepage.css" media="screen">
  
-->
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

</head>
<body>
   <header>
    <div class="header">
        
        <a href="index.html" class="logo"><img src="styles/images/logo.png"></a>
        <div class="header-right">
        <a href="index.html">Home</a> 
        
        
    </div>
    </div>
    </header>
    <main class="main">

    <article class="menu1">

<div class="columnright2">
    <div id='map'></div>
</div>
    </article>

</main>

<footer class="fot">
<p>Project</p>
</footer>


<script>

mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmVzdGhlcmV4IiwiYSI6ImNsMzhyaWRkZDAwNDAzanF5anFwcWpoMzgifQ.cj2d12HE6FK_SKNFRd9YSg';

const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/light-v10',
center: [22.28, 29.00],
zoom: 1.5
});

map.on('load', () => {
map.addSource('places', {

'type': 'geojson',
'data': {
'type': 'FeatureCollection',
'features': [
{
'type': 'Feature',
'properties': {
'description':
'<strong>British Composers : 4 </strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alice Mary Smith</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Cecilia McDowall</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Errollyn Wallen</a><br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Ruth Gipps</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [-0.118092, 51.509865]
}
},

{
'type': 'Feature',
'properties': {
'description':
'<strong>American Composers : 44</strong><p><a href="/Profile_detail.php?id=2" target="_blank" style="font-size:16px;">Adrienne Albert</a> <br> <a href="/Profile_detail.php?id=5" target="_blank" style="font-size:16px;">Mary Jeanne van Appledorn</a><br><a href="/Profile_detail.php?id=11" target="_blank" style="font-size:16px;">Regina Harris Baiocchi</a><br><a href="/Profile_detail.php?id=13" target="_blank" style="font-size:16px;">Marion Bauer</a><br><a href="/Profile_detail.php?id=15" target="_blank" style="font-size:16px;">Amy Beach</a> <br> <a href="/Profile_detail.php?id=17" target="_blank" style="font-size:16px;">Eve Beglarian</a><br><a href="/Profile_detail.php?id=18" target="_blank" style="font-size:16px;">Stephanie Berg</a><br><a href="/Profile_detail.php?id=19" target="_blank" style="font-size:16px;">Abbie Betinis</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [-74, 40.740121]
}
},

{
'type': 'Feature',
'properties': {
'description':
'<strong>Australian Composers : 2</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [151.2577974643729, -33.9004988253056]
}
},

{
'type': 'Feature',
'properties': {
'description':
'<strong>French Composers : 2</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [2.329762470469234, 48.8388721051183]
}
},

{
'type': 'Feature',
'properties': {
'description':
'<strong>German Composers : 2</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [13.38675369488152, 52.50944556254015]
}
},

{
'type': 'Feature',
'properties': {
'description':
'<strong>Israeli Composers : 2</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [34.779435972759075, 32.08634916623561]
}
},

{
'type': 'Feature',
'properties': {
'description':
'<strong>South Africa Composers : 2</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [18.4502722428264, -33.995594477241866]
}
}
,

{
'type': 'Feature',
'properties': {
'description':
'<strong>Jamaica Composers : 1</strong><p><a href="/Profile_detail.php?id=1" target="_blank" style="font-size:16px;">Eleonor Alberga</a> </p>'
},
'geometry': {
'type': 'Point',
'coordinates': [-76.79342550186843, 17.972251956484854]
}
},

{
'type': 'Feature',
'properties': {
'description':
'<strong>Ireland Composers : 2</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [-6.365182183105361, 53.30251047358365]
}
},

{
'type': 'Feature',
'properties': {
'description':
'<strong>Estonia Composers : 2</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [24.754464612540687, 59.40227435328174]
}
}

,

{
'type': 'Feature',
'properties': {
'description':
'<strong>Finland Composers : 2</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [24.911876192244847, 60.30893888434423]
}
}

,

{
'type': 'Feature',
'properties': {
'description':
'<strong>Serbia Composers : 2</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [20.44618922586679, 44.82135959520318]
}
}
,


{
'type': 'Feature',
'properties': {
'description':
'<strong>Cuba Composers : 1</strong><p><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a> <br> <a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a><br><a href="http://ec2-3-27-71-149.ap-southeast-2.compute.amazonaws.com/Profile_detail.html" target="_blank">Alison Bauld</a></p>'
},
'geometry': {
'type': 'Point',
'coordinates': [20.44618922586679, 44.82135959520318]
}
}



]
}
});
// Add a layer showing the places.

map.addLayer({
'id': 'places',
'type': 'circle',
'source': 'places',
'paint': {
'circle-color': '#4264fb',
'circle-radius': 10,
'circle-stroke-width': 2,
'circle-stroke-color': '#ffffff'
}
});



map.on('click', 'places',  (e) => {

const coordinates = e.features[0].geometry.coordinates.slice();
const description = e.features[0].properties.description;


while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
}

new mapboxgl.Popup()
.setLngLat(coordinates)
.setHTML(description)
.addTo(map);

});

map.on('mouseenter', 'places', () => {
map.getCanvas().style.cursor = 'pointer';
});

map.on('mouseleave', 'places', () => {
map.getCanvas().style.cursor = '';
});
});

for (const feature of geojson.features) {
// create a HTML element for each feature
const el = document.createElement('div');
el.className = 'marker';

// make a marker for each feature and add to the map
new mapboxgl.Marker(el)
.setLngLat(feature.geometry.coordinates)
.setPopup(
new mapboxgl.Popup({ offset: 25 }) // add popups
.setHTML(
`<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
)
)
.addTo(map);
}


</script>

</body>
</html>