<!DOCTYPE html>
<html>
<head>
	  <title>Vloženie STK</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="vlozenie.css">
</head>
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
<body>


	<script>
      var subjectObject = {
        "Osobné autá": {
          "Alfa Romeo" : ["6C", "8C", "75", "Spider", "GTV", "147", "166", "GT", "Brera", "159", "MiTo", "Giulietta", "4C", "Stelvio", "Giulia"],
          "Audi": ["A1", "A2", "A3","A4", "A5", "A6", "A7","A8","e-tron","Q2","Q3","Q5","Q7","Q8","R8","RS3","RS4","RS5","RS6","RS7","S3","S4","S5","S6","S7","S8"],
          "BMW": ["1 Séria", "2 Séria", "3 Séria", "4 Séria","5 Séria","6 Séria","7 Séria","8 Séria","i3","i8","M1","M2","M3","M4","M5","M6","M7","M8","X1","X2","X3","X4","X5","X6","X7","X8","Z4"],
          "Bugatti" : ["Chiron", "Divo", "EB110", "Veyron"],
          "Chevrolet" : ["Bolt", "Camaro", "Colorado", "Corvette","Cruze","Equinox","Impala","Malibu","Spark","Suburban","Tahoe","Trailblazer","Trax","Silverado"],
          "Citroen" : ["C-Elysée", "C1", "C3","C3 Aircross","C4","C4 Cactus","Grand C4 Picasso","C5","DS3","DS4","DS5","Berlingo"],
          "Fiat" : ["500", "500L", "500X", "Tipo","Panda","Punto","124 Spider","Doblo","Fullback","Freemont","Talento","Ulysse",],
          "Ford" : ["B-Max", "C-Max", "EcoSport","Edge","Escape","Explorer","F-150","Fiesta","Focus","Fusion","Galaxy","GT","Ka","Kuga","Mondeo","Mustang","Ranger","S-Max","Taurus"],
          "Honda" : ["Accord", "Civic", "Clarity","CR-V","HR-V","Insight","Jazz","Legend","NSX","Odyssey","Pilot","Ridgeline"],
          "Hyundai" : ["Accent", "Atos", "Creta","Elantra","Genesis","Grand i10","i10","i20","i30","Ioniq","Kona","Santa Fe","Sonata","Tucson","Veloster","Venue"],
          "Jaguar" : ["E-PACE", "F-PACE", "F-TYPE","I-PACE","XE","XF","XJ"],
          "Kia" : ["Cadenza", "Ceed", "Cerato", "Niro", "Optima", "Picanto", "Rio", "Seltos", "Soul", "Sportage", "Stinger", "Sorento"],
          "Lamborghini" : ["Aventador", "Huracan", "Urus"],
          "Land Rover" : ["Discovery", "Defender", "Evoque", "Range Rover", "Range Rover Sport"],
          "Maserati" : ["Ghibli", "GranTurismo", "Levante", "Quattroporte"],
          "Mazda" : ["Mazda2", "Mazda3", "Mazda6", "CX-3", "CX-30", "CX-5", "CX-9", "MX-5"],
          "Mercedes - Benz": ["A-trieda", "B-trieda", "C-trieda", "E-trieda" ,"G-trieda" ,"GLA-trieda", "GLC-trieda", "GLE-trieda", "GLS-trieda", "S-trieda", "SL-trieda", "SLC-trieda", "V-trieda"],
          "McLaren" : ["570S", "600LT", "620R", "720S", "GT", "Senna", "Speedtail"],
          "Mini" : ["Clubman", "Convertible", "Countryman", "Hardtop", "Paceman", "Roadster"],
          "Nissan" : ["350Z", "370Z", "GT-R", "Juke", "Leaf", "Maxima", "Murano", "Navara", "Note", "NV200", "Pathfinder", "Qashqai", "Sentra", "Sylphy", "Titan", "Versa"],
          "Opel" : ["Sintra", "Corsa", "Astra", "Crossland X", "GrandLand X", "Insignia", "Zafira"],
          "Peugeot": ["108", "2008", "205", "206", "207", "208", "301", "306", "307", "308", "309", "4007", "406", "407", "5008", "508", "607", "Partner", "RCZ", ], 
          "Porsche" : ["718", "911", "918 Spyder", "Boxster", "Cayenne", "Cayman", "Macan", "Panamera"],
          "Renault" : ["Captur", "Clio", "Fluence", "Kadjar", "Kangoo", "Koleos", "Laguna", "Megane", "Scenic", "Talisman", "Twingo", "Wind", "Zoe"],
          "Rolls - Royce" : ["Cullinan", "Dawn", "Ghost", "Phantom", "Wraith"],
          "Škoda": ["Citigo", "Fabia", "Kamiq", "Karoq", "Kodiaq" , "Octavia" , "Rapid" , "Scala" , "Superb", "Yeti"],
          "Subaru" : ["Ascent", "B9 Tribeca", "BRZ", "Forester", "Impreza", "Legacy", "Outback", "WRX", "XV Crosstrek"],
          "Suzuki" : ["Swift", "Jimny", "Vitara", "Ignis", "Baleno", "SX4", "Celerio", "Grand Vitara", "Kizashi", "Splash"],
          "Tesla" : ["3", "S", "X", "Y", "Roadster"],
          "Toyota" : ["4Runner", "86", "Avalon","Auris", "C-HR", "Camry", "Corolla", "Highlander", "Land Cruiser", "Mirai", "Prius", "RAV4", "Sequoia", "Sienna", "Supra", "Tacoma", "Tundra", "Yaris"],
          "Volkswagen": ["Arteon", "Atlas", "Beetle", "Golf", "Jetta" ,"Passat","Tiguan","Touareg","T-Roc","ID.4","CC"],
          "Volvo" : ["C30", "C40", "C70", "S40", "S60", "S90", "V40", "V60", "V90", "XC40", "XC60", "XC90"],    
        },
        "Dodávky": {
          "Mercedes-Benz ": ["Sprinter", "Vito", "Metris", "X-Class", "Citan"],
          "Ford": ["Transit", "Transit Connect", "Transit Custom", "Ranger", "E-Series"],
          "Volkswagen": ["Transporter", "Caddy", "Amarok", "Crafter", "Multivan"],
          "Peugeot": ["Boxer", "Expert", "Partner", "Bipper", "e-Expert"],
          "Citroen": ["Jumper", "Berlingo Van", "Dispatch", "SpaceTourer", "e-Berlingo Van"],
          "Fiat": ["Ducato", "Doblo Cargo",  "Fiorino", "Talento", "Fullback "],
          "FS" : ["Lublin"],
          "Iveco": ["Daily", "Eurocargo", "Trakker", "Daily Electric", "Stralis"],
          "MAN": ["TGE", "eTGE", "TGL", "TGM", "TGX"],
          "Scania ": ["P-Series", "G-Series", "R-Series", "S-Series", "L-Series"],
          "Isuzu": ["N-Series", "F-Series", "D-Max", "mu-X", "NPR"],
          "Volvo ": ["FH", "FM", "FMX", "FE", "FL"],
          "Hyundai": ["H350", "Porter", "Mighty", "Staria", "Pavise"],
          "Nissan ": ["NV200", "NV300", "NV400", "Titan", "e-NV200"],
          "Toyota ": ["Proace", "HiAce", "Tacoma ", "Dyna", " Land Cruiser"],
          "Ram": ["ProMaster", "ProMaster City", "1500 ", "2500", "3500 "],
        }, 
        "Kamióny": {
          "Mercedes-Benz": ["Actros", "Arocs ", "Antos", "Econic", "Unimog", ],
          "Volvo": [" FH", "FM ", "FMX", "VNL", "VHD", ],
          "Scania": ["R-Series", "S-Series ", "G-Series", "P-Series", "L-Series", ],
          "MAN": ["TGX", "TGS ", "TGM", "TGL", "Lion's Coach", ],
          "DAF ": ["XF", "CF ", "LF", "XG ", "XG+", ],
          "Iveco": ["Stralis", "S-Way ", "Daily", "Eurocargo", "Trakker", ],
          "Renault ": ["T", "C ", "K", "D", "Trucks T High Edition", ],
          "Kenworth ": ["W990", "T680 ", "T800", "T880", "C500", ],
          "Peterbilt ": ["579", "389 ", "567", "520 ", "337 ", ],
          "Mack ": ["Anthem", "Granite ", "Pinnacle", "LR ", "MD Series", ],
        }, 
        "Motorky": {
          "Honda": ["CBR1000RR", "CRF450L", "Gold Wing", "CB650R", "Africa Twin"],
          "Yamaha ": ["YZF-R1", "MT-09 ", " FZ-07 (MT-07)", "Tenere 700", "VMAX"],
          "Kawasaki ": ["Ninja ZX-6R", "Z900 ", "Vulcan S", "KLR650", "Ninja H2"],
          "Suzuki ": ["GSX-R1000", " SV650 ", "V-Strom 650", "Hayabusa", "Boulevard M109R"],
          "Ducati ": ["Panigale V4", "Monster ", "Multistrada", "Scrambler", "Diavel"],
          "Harley-Davidson ": ["Sportster", "Softail ", "Street Glide", "Road King", "Fat Boy"],
          "BMW ": ["S1000RR", "R1250GS ", "F800GS", " K1600GT", "R nineT"],
          "KTM ": ["1290 Super Duke R", "690 Enduro R ", "390 Duke", "790 Adventure", "RC 390"],
          "Triumph ": ["Bonneville T120", "Tiger 800 ", "Street Triple", "Rocket 3", " Speed Triple"],
          "Aprilia ": ["RSV4", "Tuono V4 1100", "Shiver 900", "RS 660", "Dorsoduro 900"],
          "Moto Guzzi ": ["V7", "V85 TT ", " California", "Audace", "MGX-21"],
          "Husqvarna ": ["Vitpilen 401", "Svartpilen 701 ", "FE 501", "TE 250i", "701 Supermoto"],
          "Indian Motorcycle ": ["Chief Dark Horse", "Chieftain ", "Scout", " Springfield", "FTR 1200"],
          "Royal Enfield": ["Bullet 350", "Classic 500 ", "Himalayan", "Interceptor 650", "Continental GT 650"],
          "MV Agusta ": ["F4 RR", "Brutale 800 ", "Dragster 800 RR", "Turismo Veloce", "Superveloce"],
          "Zero Motorcycles ": ["S", "SR ", "DS", "FX", "SR/S"],
          "Norton Motorcycles ": ["Commando 961", "Dominator ", "Atlas Nomad", "V4 RR", "650cc Twin"],
          "Benelli ": ["TNT 300", "Leoncino 500", "TRK 502", "752S", "Imperiale 400"],
          "Vespa ": ["Primavera", "GTS ", "Sprint", "Elettrica", "946 Emporio Arman"],
          "Hyosung ": ["GT250R", "GD250N ", "Aquila GV650", "GT300R", "GT650R"],
          "Cagiva ": ["Mito", "Raptor 125 ", "Planet 125", "Canyon 500", "Elefant 900"],
          "SYM ": ["Wolf CR300i", "Jet 14", "Maxsym TL", "HD 300", " Fiddle III"],
          "Can-Am ": ["Spyder F3", "Ryker ", "Maverick X3", "Outlander", "Renegade"],
          "Ural Motorcycles ": ["Gear Up", "cT ", "CT Custom", "Retro", "Solo ST"],
          "Sherco ": ["300 SEF-R", "450 SEF Factory ", "250 SE-R", "125 SE Six Days", "X-Ride 290"],
          "GasGas ": ["EC 300", "TXT Racing 250 ", "Pampera 250", "MC 450F", "EX 250"],
        }     
      }
      window.onload = function() {
        var subjectSel = document.getElementById("druh");
        var topicSel = document.getElementById("znacka");
        var chapterSel = document.getElementById("model");

        for (var x in subjectObject) {
          subjectSel.options[subjectSel.options.length] = new Option(x, x);
        }
        subjectSel.onchange = function() {
          //empty Chapters- and Topics- dropdowns
          chapterSel.length = 1;
          topicSel.length = 1;
          //display correct values
          for (var y in subjectObject[this.value]) {
            topicSel.options[topicSel.options.length] = new Option(y, y);
          }
        }
        topicSel.onchange = function() {
          //empty Chapters dropdown
          chapterSel.length = 1;
          //display correct values
          var z = subjectObject[subjectSel.value][this.value];
          for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
          }
        }
      }
      </script>
</head>
<body>
<div class="container">
	<h1>STK - DadsGarage</h1>
	<form action="process.php" method="post" enctype="multipart/form-data">
        <label for="druh">Druh vozidla:</label><select name="druh" id="druh" required>
          <option value="druh" selected="selected">Všetky druhy</option>
        </select>
        <label for="znacka">Značka auta:</label><select name="znacka" id="znacka">
          <option value="znacka" selected="selected">Všetky Značky</option>
        </select>
        <label for="model">Model: </label><select name="model" id="model">
          <option value="model" selected="selected">Všetky modely</option>
        </select>

      
      <label for="spz">ŠPZ: </label>
      <input type="text" id="spz" name="spz"required>

      <label for="vin">Vin číslo:</label>
			<input type="text" id="vin" name="vin"required>

      <label for="vykonana">Stk vykonaná:</label>
			<input type="date" id="vykonana" name="vykonana"required>

      <label for="meno">Meno:</label>
		  <input type="text" id="meno" name="meno" max="100" required>
      
      <label for="telefon">Telefónne číslo:</label>
		  <input type="text" id="telefon" name="telefon" max="11" required>


      <label for="mesto">Mesto/adresa: </label>
      <input type="text" name="mesto" id="mesto">

			<label for="cena">Cena za stk:</label>
			<input type="text" id="cena" name="cena">
      
			<label for="popis">Popis:</label>
			<textarea id="popis" name="popis" max="10000"></textarea>



      <div class="center-container">
      <input type="submit" value="Odoslať správu o STK">
      </div>
	</form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $spz = $_POST["spz"];

        // Konvertujte ŠPZ na veľké písmená
        $spz = strtoupper($spz);

        // Oddelenie prvých dvoch písmen pomlčkou
        $spz_s_pomlckou = substr($spz, 0, 2) . '-' . substr($spz, 2);
        
        // Výstup s oddelenými prvými dvoma písmenami
        echo "ŠPZ s oddelenými prvými dvoma písmenami: " . $spz_s_pomlckou;
    }
    ?>
</div>
</body>
</html>

