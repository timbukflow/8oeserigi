<!DOCTYPE html>
<!--[if IE 7]>	 <html class="no-js lt-ie9 lt-ie8" lang="de"><![endif]-->
<!--[if IE 8]>	 <html class="no-js lt-ie9" lang="de"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="de"><!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#">
<title>8 &Ouml;serigi | Webcam</title>
<meta name="description" content="8 Öserigi | Webcam"/>
<?php include 'head.php'; ?>
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="webcamcontainer">
      <h1>Webcam</h1>
      <h2>Bereich A - Live <span id="current_date_A"></span> </h2>
      <!--<yellow-feed token="D7N6319QD"></yellow-feed>-->
      <div class="resp-container">
        <iframe class="resp-iframe" src="//api.yellow.camera/feed/D7N6319QD" width="1280" height="854"></iframe>
      </div>
      <h2>Bereich A - Zeitraffer</h2>
      <!--<yellow-feed token="U06FW8QCH"></yellow-feed>-->
      <div class="resp-container">
        <iframe class="resp-iframe" src="//api.yellow.camera/feed/U06FW8QCH" width="1280" height="854"></iframe>
      </div>
      <h2>Bereich B - Live <span id="current_date_B"></span> </h2>
      <!--<yellow-feed token="COE0564WF"></yellow-feed>-->
      <div class="resp-container">
        <iframe class="resp-iframe" src="//api.yellow.camera/feed/COE0564WF" width="1280" height="854"></iframe>
      </div>
      <h2>Bereich B - Zeitraffer</h2>
      <!--<yellow-feed token="WFOR1UT74"></yellow-feed>-->
      <div class="resp-container">
        <iframe class="resp-iframe" src="//api.yellow.camera/feed/WFOR1UT74" width="1280" height="854"></iframe>
      </div>
    </section>

    <!--<script src="https://feed.yellow.webcam/js/yellow-feedplugin.js"></script>-->
    <script>
      date = new Date();
      year = date.getFullYear();
      month = date.getMonth() + 1;
      day = date.getDate();
      document.getElementById("current_date_B").innerHTML = day +"." + month +"." + year;
      document.getElementById("current_date_A").innerHTML = day +"." + month +"." + year;
    </script>
    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
</body>
</html>
