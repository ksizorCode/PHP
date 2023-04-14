<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Granja de Richard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

 <!-- CONFIGURATION -->

    <!-- Allow web app to be run in full-screen mode - iOS. -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    
    <!-- Allow web app to be run in full-screen mode - Android. -->
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Make the app title different than the page title - iOS. -->
    <meta name="apple-mobile-web-app-title" content="Mobile web app title">
    
    <!-- Make the app title different than the page title and configure icons - Android. -->
    <link rel="manifest" href="/manifest.json">

    <!-- IE configuration for icons and colors is in browserconfig.xml -->

    <!-- Configure the status bar - iOS. -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Set the viewport. -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimal-ui">

    <!-- Disable automatic phone number detection. -->
    <meta name="format-detection" content="telephone=no">

    <!-- ICONS -->

    <!-- iOS icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icon-180x180.png">
    
    <!-- Android icons -->
    <link rel="icon" type="image/png" sizes="192x192" href="/icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon-16x16.png">

    <!-- Windows icons -->
    <meta name="msapplication-TileImage" content="/icon-144x144.png">
    
    <!-- Windows dock color -->
    <meta name="msapplication-TileColor" content="#fff">
    
    <!-- Android dock color -->
    <meta name="theme-color" content="#fff">

    <!-- STARTUP IMAGES - iOS only -->

    <!-- iPad retina portrait startup image -->
    <link href="/splash-1536x2008.jpg"
          media="(device-width: 768px) and (device-height: 1024px)
                 and (-webkit-device-pixel-ratio: 2)
                 and (orientation: portrait)"
          rel="apple-touch-startup-image">

    <!-- iPad retina landscape startup image -->
    <link href="/splash-1496x2048.jpg"
          media="(device-width: 768px) and (device-height: 1024px)
                 and (-webkit-device-pixel-ratio: 2)
                 and (orientation: landscape)"
          rel="apple-touch-startup-image">

    <!-- iPad non-retina portrait startup image -->
    <link href="/splash-768x1004.jpg"
          media="(device-width: 768px) and (device-height: 1024px)
                 and (-webkit-device-pixel-ratio: 1)
                 and (orientation: portrait)"
          rel="apple-touch-startup-image">

    <!-- iPad non-retina landscape startup image -->
    <link href="/splash-748x1024.jpg"
          media="(device-width: 768px) and (device-height: 1024px)
                 and (-webkit-device-pixel-ratio: 1)
                 and (orientation: landscape)"
          rel="apple-touch-startup-image">

    <!-- iPhone 6 Plus portrait startup image -->
    <link href="/splash-1242x2148.jpg"
          media="(device-width: 414px) and (device-height: 736px)
                 and (-webkit-device-pixel-ratio: 3)
                 and (orientation: portrait)"
          rel="apple-touch-startup-image">

    <!-- iPhone 6 Plus landscape startup image -->
    <link href="/splash-1182x2208.jpg"
          media="(device-width: 414px) and (device-height: 736px)
                 and (-webkit-device-pixel-ratio: 3)
                 and (orientation: landscape)"
          rel="apple-touch-startup-image">

    <!-- iPhone 6 startup image -->
    <link href="/splash-750x1294.jpg"
          media="(device-width: 375px) and (device-height: 667px)
                 and (-webkit-device-pixel-ratio: 2)"
          rel="apple-touch-startup-image">

    <!-- iPhone 5 startup image -->
    <link href="/splash-640x1096.jpg"
          media="(device-width: 320px) and (device-height: 568px)
                 and (-webkit-device-pixel-ratio: 2)"
          rel="apple-touch-startup-image">

    <!-- iPhone < 5 retina startup image -->
    <link href="/splash-640x920.jpg"
          media="(device-width: 320px) and (device-height: 480px)
                 and (-webkit-device-pixel-ratio: 2)"
          rel="apple-touch-startup-image">

    <!-- iPhone < 5 non-retina startup image -->
    <link href="/splash-320x460.jpg"
          media="(device-width: 320px) and (device-height: 480px)
                 and (-webkit-device-pixel-ratio: 1)"
          rel="apple-touch-startup-image">

</head>
<body>
    
  <header>
    <nav>
      <ul>
        <li>
          <a href="index.php">Inicio</a>
        </li>
        <li>
          <a href="ficha.php">Ficha</a>
        </li>
        <li>
          <a href="insertar.php">Insertar</a>
        </li>
        <li>
          <a href="animales.json">JSON</a>
        </li>
        <li>
          <a href="reset.php">Reseteo</a>
        </li>
      </ul>
    </nav>
  </header>


  <main>