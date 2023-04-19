
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>La Granja de Richard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, viewport-fit=cover">

<meta name="description" content="Learn music better with our living sheet music.">

<link rel="preload" href="/css/fonts/ClearSans-Bold-webfont.woff" as="font" crossorigin>


<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- para autor asociado a twitter -->
<meta property="twitter:card" content="summary">
<meta property="twitter:site" content="@ksizor">
<meta property="twitter:creator" content="@ksizor">
<meta property="twitter:image" data-hid="twitter:image" content="https://app.starbucks.com/weblx/images/social/summary_image.png">
<meta property="og:title" content="ksizor-app">
<meta property="og:site_name" content="Soundslice">
<meta property="og:image" data-hid="image" content="https://app.starbucks.com/weblx/images/social/summary_square.png">
<meta property="og:description" content="Learn music better with our living sheet music.">

<!-- para sitio web asociado a twitter -->
<meta name="twitter:description" content="Join the numbers and get to the 2048 tile! Careful: this game is extremely addictive!" />
<meta name="twitter:card" content="app" />
<meta name="twitter:site" content="2048game.com" />
<meta name="twitter:title" content="2048" />
<meta name="twitter:url" content="https://2048game.com" />
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-wid">


<link rel="icon" href="/weblx/images/icons/favicon-16x16.png">
<link rel="icon" href="/weblx/images/icons/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="180x180" href="/weblx/images/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/weblx/images/icons/pwa-icon-192.png" sizes="192x192">

<link rel="manifest" href="/manifest.json">

<link rel="mask-icon" href="/weblx/images/icons/safari-pinned-tab.svg" color="#008046">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Starbucks"><meta name="application-name" content="Starbucks">
<meta name="msapplication-TileColor" content="#242221">
<meta name="msapplication-TileImage" content="/weblx/images/mstile-144x144.png">
<meta name="msapplication-config" content="/weblx/assets/browserconfig.xml">
    
      
      <!-- FontAwesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <!-- CSS -->
      <link rel="stylesheet" href="css/style.css?v=<?echo time();?>">
      
      <!-- Favicon -->
      <link rel="icon" type="image/png" href="./images/icons/cat.png">
      
      <!-- Mobile Capablilities -->
      <meta name="apple-mobile-web-app-title" content="Animalillos">
      <meta name="mobile-web-app-capable" content="yes"> 
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <!-- <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">  -->
      
      
      <!--    Theme color android / apple -->
    <meta name="theme-color" content="#006341">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#3880ff" />
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#eb445a" />
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-status-bar-style" media="(prefers-color-scheme: light)" content="default" />
    <meta name="apple-mobile-web-app-status-bar-style" media="(prefers-color-scheme: dark)" content="black" />
    
    <!-- icons -->
    <link rel="apple-touch-icon" href="./images/icons/cat.png" />
    <link rel="apple-touch-startup-image" href="./images/icons/cat.png" />

    <!-- https://developer.apple.com/library/archive/documentation/AppleApplications/Reference/SafariHTMLRef/Articles/MetaTags.html -->
    <!-- https://johan.im/writings/ios-homescreen-web-app/ -->





    <!-- script para el Menú -->
    <script defer>
      function menutoggle(){
      document.querySelector("#menu").classList.toggle("visible");
      }
    </script>

</head>
<body>
    
  <header>
    <nav id="menu">
      <button onclick="menutoggle()" id="btn_menu">Menu</button>
      <ul>
        <li>
          <a href="./">Inicio</a>
        </li>
        <li>
          <a href="./ficha">Ficha</a>
        </li>
        <li>
          <a href="./insertar">Insertar</a>
        </li>
        <li>
          <a href="./config">Config</a>
        </li>
      </ul>
    </nav>
  </header>


  <main>

  <?php
  // Comprobamos si ya hay productos seleccionados como favoritos
  if(isset($_COOKIE["favoritos"])) {
    $favoritos = unserialize($_COOKIE["favoritos"]);
  } else {
    $favoritos = array();
  }

?>