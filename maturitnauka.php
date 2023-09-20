<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="maturitnauka.css">
    <title>Bazar áut</title>


</head>

<body>
<header>
  <nav>
      <ul>
      <li class="Diesel">DadsGarage</li>
      <li><a href="index.php" class="a1">Domov</a></li>
        <li><a href="dvatyzdne.php" class="a1">Končiace STK</a></li>
        <li><a href="maturitnauka.php"class="a2">STK-autá</a></li>
        <li><a href="vlozenie.php"class="a3">Vloženie</a></li>
        <li class="Benzin">1982</li>
      </ul>
  </nav>
</header>
<div class="container">
<h1 class="inzerat">STK</h1>
<?php

    // Pripojenie k databáze
    $conn = new mysqli('localhost', 'root', '', 'dadsgarage');

    // Dotaz na získanie hodnôt z databázy pre dané id
    $sql = "SELECT * FROM stk";
    $result = mysqli_query($conn, $sql);


    $typyVozidiel = array(
      "Alfa Romeo" => "alfa_romeo.png",
      "Audi" => "audi.png",
      "BMW" => "bmw.png",
      "Bugatti" => "bugatti.png",
      "Chevrolet" => "chevrolet.png",
      "Citroen" => "citroen.png",
      "Fiat" => "fiat.png",
      "Ford" => "ford.png",
      "Honda" => "honda.png",
      "Hyundai" => "hyundai.png",
      "Jaguar" => "jaguar.png",
      "Kia" => "kia.png",
      "Lamborghini" => "lamborghini.png",
      "Land Rover" => "land_rover.png",
      "Maserati" => "maserati.png",
      "Mazda" => "mazda.png",
      "Mercedes - Benz" => "mercedes_benz.png",
      "McLaren" => "mclaren.png",
      "Mini" => "mini.png",
      "Nissan" => "nissan.png",
      "Opel" => "opel.png",
      "Peugeot" => "peugeot.png",
      "Porsche" => "porsche.png",
      "Renault" => "renault.png",
      "Rolls - Royce" => "rolls_royce.png",
      "Škoda" => "skoda.png",
      "Subaru" => "subaru.png",
      "Suzuki" => "suzuki.png",
      "Tesla" => "tesla.png",
      "Toyota" => "toyota.png",
      "Volkswagen" => "volkswagen.png",
      "Volvo" => "volvo.png",

      "Iveco" => "iveco.png",
      "MAN" => "man.png",
      "Scania " => "scania.png",
      "Isuzu" => "isuzu.png",
      "Ram" => "ram.png",
      "DAF " => "daf.png",
      "Kenworth " => "kenworth.png",
      "Peterbilt " => "peterbilt.png",
      "Mack " => "mack.png",

      "Yamaha " => "yamaha.png",
      "Kawasaki " => "kawasaki.png",
      "Ducati " => "ducati.png",
      "Harley-Davidson " => "harley_davidson.png",
      "KTM " => "ktm.png",
      "Triumph " => "triumph.png",
      "Aprilia " => "aprilia.png",
      "Moto Guzzi " => "moto_guzzi.png",
      "Husqvarna " => "husqvarna.png",
      "Indian Motorcycle " => "indian_motorcycle.png",
      "Royal Enfield" => "royal_enfield.png",
      "MV Agusta " => "mv_agusta.png",
      "Zero Motorcycles " => "zero_motorcycles.png",
      "Norton Motorcycles " => "norton_motorcycles.png",
      "Benelli " => "benelli.png",
      "Vespa " => "vespa.png",
      "Hyosung " => "hyosung.png",
      "Cagiva " => "cagiva.png",
      "SYM " => "sym.png",
      "Can-Am " => "can_am.png",
      "Ural Motorcycles " => "ural_motorcycles.png",
      "Sherco " => "sherco.png",
      "GasGas " => "gasgas.png"
    );

    function getImageForType($typVozidla, $typyVozidiel) {
      if (array_key_exists($typVozidla, $typyVozidiel)) {
          return "logo/" . $typyVozidiel[$typVozidla];
      } else {
          return "logo/default.png"; // Predvolený obrázok, ak typ nie je v mapovaní
      }
    }
    // Spracovanie výsledkov a výpis hodnôt
    if (mysqli_num_rows($result) > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<table class=\"auto-item\" style=\"text-align: center;margin-top:20px; border-collapse: collapse; border: 1px solid black;\">
            <tr>
              <td rowspan=\"5\"><img src=\"" . getImageForType($row['znacka'], $typyVozidiel) . "\" alt=\"" . $row['znacka'] . "\" width=\"80px\" height=\"75px\"></td>
              <td class=\"ecv\">
                  <div class=\"item-ecv\">
                      <h4 style=\"color: gray;\"> Evidenčné číslo </h4>
                      <h2>" . $row['spz'] . "</h2>
                  </div>
              </td>
              <td class=\"vin\">
                  <div class=\"item-vin\">
                      <h4 style=\"color: gray;\"> VIN </h4>
                      <h2>" . $row['vin'] . "</h2>
                </div>
              </td>
            </tr>
            <tr>
              <td class=\"znacka\">
                <div class=\"item-znacka\">
                  <h4 style= \"color: gray;\"> Značka vozidla </h4>
                  <h2>".$row['znacka']."</h2>
                </div>
              </td>
              <td class=\"model\">
                <div class=\"item-model\">
                  <h4 style= \"color: gray;\"> Model Vozidla </h4> 
                  <h2>".$row['model']."</h2>
                </div>
              </td>
            </tr>
            <tr>
              <td class=\"cislo\">
                <div class=\"item-cislo\">
                  <h4 style= \"color: gray;\"> Telefónne číslo </h4>
                  <h2>+421 " .$row['telefon']. "</h2>
                </div>
              </td>
              <td class=\"meno\">
                <div class=\"item-meno\">
                  <h4 style= \"color: gray;\"> Meno </h4>
                  <h2>".$row['meno']."</h2>
                </div>
              </td>
            </tr>
            <tr>
              <td class=\"vykonana\">
                <div class=\"item-vykonana\" >
                  <h5 style= \"color: gray;\"> Dátum Vykonania </h5>
                  <h3>".$row['vykonana']."</h3>
                </div>
              </td>
              <td class=\"platnost\">
                <div class=\"item-platnost\" >
                  <h4 style= \"color: gray;\"> Dátum Platnosti </h4>
                 <h1>".$row['platna']."</h1>
                </div>
              </td>
            </tr>
        </table>";
        
            // Pridajte otváraciu tabuľku pod existujúcu tabuľku
            echo "<button onclick=\"toggleTable(this)\" style=\"display:flex;background-color: #333;;color: #fff;border-radius: 5px;cursor: pointer;\">▼ Otvoriť ďalšie informácie ▼ </button>";
            echo "<table class=\"hidden-table\" style=\"display: none;  align-items: center; text-align: center;  width: 100%;margin: auto;padding: 100px;text-decoration: none; border-collapse: collapse; border: 1px solid black;\">
                <tr>
                  <td><h4 style= \"color: gray;\"> Mesto </h4></td>
                  <td><h4 style= \"color: gray;\"> Cena </h4></td>
                </tr>
                <tr>
                  <td><h2>".$row['mesto']."</h2></td>
                  <td><h2>".$row['cena']." €</h2></td>
                </tr>
                <tr>
                  <td colspan=\"2\"><h4 style= \"color: gray;\"> Popis: </h4></td>
                </tr>
                <tr>
                  <td colspan=\"2\">".$row['popis']."</td>
                </tr>
              </table>";
          }
        }
        else {
          echo "No results";
        }
    
  $conn->close();
?>
</div>
<script>
function toggleTable(button) {
  var table = button.nextElementSibling;
  if (table.style.display === "none") {
    table.style.display = "table";
  } else {
    table.style.display = "none";
  }
}
</script>


</body>
</html>