<!DOCTYPE html>
<html lang="de">
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
      <div class="resp-container">
        <iframe class="resp-iframe" src="//api.yellow.camera/feed/D7N6319QD" width="1280" height="720"></iframe>
      </div>
      <h2>Bereich A - Zeitraffer</h2>
      <div class="resp-container">
        <iframe class="resp-iframe" src="//api.yellow.camera/feed/U06FW8QCH" width="1280" height="720"></iframe>
      </div>
      <h2>Bereich B - Live <span id="current_date_B"></span> </h2>
      <div class="resp-container">
        <iframe class="resp-iframe" src="//api.yellow.camera/feed/COE0564WF" width="1280" height="720"></iframe>
      </div>
      <h2>Bereich B - Zeitraffer</h2>
      <div class="resp-container">
        <iframe class="resp-iframe" src="//api.yellow.camera/feed/WFOR1UT74" width="1280" height="720"></iframe>
      </div>
    </section>
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
    <?php require_once 'googleanalytics.php'; ?>
</body>
</html>
