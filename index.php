<?php include_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <title>Voedselbank hulp tool</title>
</head>
<body>
  <header>
    <div><img src="./public/img/Picture3.png" alt="logo" /></div>
    <div><img src="./public/img/Picture2.png" alt="nav" /></div>
  </header>
  <main>
    <img src="./public/img/" alt="" />
    <p class="tc" id="heading">Voedselbank</p>
    <p class="tc" id="subheading">Welkom op de homepagina van Voedselbank Nederland</p>
    <div id="content">
      <h3 class="aleft">Over Voedselbank Nederland</h3>
      <span>
        <?php
          echo htmlspecialchars($text1) . "<br>";
          echo "<h3 class='aleft'>Zo berekenen we of jij in aanmerking komt voor een voedselpakket</h3>";
          echo htmlspecialchars($text2) . "<br>";
        ?>
      </span>
      <h3 class="aleft aprim">
        <h3 class="aleft">Kom ik in aanmerking voor Voedselbankhulp?</h3>
        <button onclick="goToRekenhulp();" class="primary-btn" style="margin-bottom: 20px;">Kom er achter!</button>
      </h3>
    </div>
  </main>
  <footer><img src="./public/img/Picture1.png" alt="logo" /></footer>
  <div id="subfooter"></div>
  <script>
    function goToRekenhulp() {
      document.getElementsByClassName('primary-btn');
      window.location = "rekenhulp.php";
    };
  </script>
</body>
</html>
