<?php include_once('calc.php');?>
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
    <p class="tc" id="heading">Rekenhulp</p>
    <div id="content">
      <b>
        Vul de 6 vragen in die hieronder staan.
        Klik daarna op de button "Kom ik in aanmerking?".
        De berekening en de conclusie komen te voorschijn.
      </b>
      <form action="calc.php" method="POST">
        <p class="question">1. Uit hoeveel leden (volwassenen en kinderen) bestaat uw huishouden?</p>
        <input class="inputfw" type="text" name="household_members" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" required>
        <p class="question">2: Hoeveel netto inkomsten (Loon/salaris/uitkering/AOW) heeft u in uw huishouden?</p>
        <input class="inputfw" type="text" name="net_income" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" required>
        <p class="question">3: Hoeveel overige inkomsten (bijvoorbeeld huurtoeslag, zorgtoeslag, alimentatie, partnertoeslag, overige toeslagen, Kind Gebonden Budget, etc, maar geen kindertoeslag meetellen) ontvangt uw huishouden per maand?</p>
        <input class="inputfw" type="text" name="other_income" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" required>
        <p class="question">4: Hoeveel uitgaven vaste lasten, bijvoorbeeld (huur/hypotheek), energie (Gas/Licht) en water, zorgverzekering incl. eigen risico, overige noodzakelijke verzekeringen (bijvoorbeeld WA, opstal), gemeentelijke- en waterschapsbelastingen, schuldenaflossing (NIET die aan de familie) heeft uw huishouden per maand?</p>
        <input class="inputfw" type="text" name="fixed_expenses" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" required>
        <p class="question">5: Hoeveel overige uitgaven (bijvoorbeeld persoonlijke verzorging, TV/telefoon/internet, openbaar vervoer) heeft uw huishouden per maand?</p>
        <input class="inputfw" type="text" name="other_expenses" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" required>
        <p class="question">6: Bent u het eens met de volgende voorwaarden?:</p>
        <input type="checkbox" name="agree" value="yes" required>
        <span>Ja, mee eens</span><br><br>
        <button style="margin-bottom: 10px;" class="primary-btn" type="submit">Kom ik in aanmerking?</button>
      </form>
    </div>

    <div style="margin-bottom: 2px;" class="question">Een verplicht veld is aangegeven met:</div>
  </main>
  <footer><img src="./public/img/Picture1.png" alt="logo" /></footer>
  <div id="subfooter"></div>
</body>
</html>
