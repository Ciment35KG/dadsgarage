<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="5;URL=vlozenie.php">
</head>
<body>
    <p>Stránka bude automaticky presmerovaná na inú stránku po 5 sekundách.</p>
</body>
</html>
<?php
    $druh = $_POST['druh'] ;   
    echo $druh;
    $znacka = $_POST['znacka'] ;   
    echo $znacka;
    $model = $_POST['model']  ;  
    echo $model;
    $spz = $_POST['spz'] ;   
    echo $spz;
    $vin = $_POST['vin'] ;  
    echo $vin;
    $vykonana = $_POST['vykonana']  ;  
    echo $vykonana; 
    $meno = $_POST['meno']  ;
    echo $meno;
    $telefon = $_POST['telefon'] ;   
    echo $telefon;
    $mesto = $_POST['mesto'] ;   
    echo $mesto;
    $cena = $_POST['cena'] ;   
    echo $cena;
    $popis = $_POST['popis'] ;   
    echo $popis;



    $conn = new mysqli('localhost', 'root', '', 'dadsgarage');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }

    $spz = strtoupper($spz);
        if (strlen($spz) >= 2) {
            $spz = substr_replace($spz, ' ', 2, 0);
        }
    $vin = strtoupper($vin);

    $stmt = $conn->prepare("INSERT INTO stk (druh, znacka, model, spz, vin, vykonana, platna, dvatyzdne, meno, telefon, mesto, cena, popis)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");

        // Nastavenie parametrov a ich typov
    $stmt->bind_param("sssssssssisis", $druh, $znacka, $model, $spz, $vin, $vykonana, $platna, $dvatyzdne, $meno, $telefon, $mesto, $cena, $popis);

        // Vykonanie príkazu
    if (!$stmt->execute()) {
    die("Failed to query! Reason: " . $stmt->error); // Používanie $stmt->error pre získanie chybovej správy
    }

    $result = $conn->query("SELECT id, vykonana FROM stk");
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $zadanyDatum = $row['vykonana'];
    
        // Pridajte k získanému dátumu 2 roky
        $datumObjekt = new DateTime($zadanyDatum);
        $novyDatumObjekt = $datumObjekt->add(new DateInterval('P2Y'));
        $novyDatum = $novyDatumObjekt->format('Y-m-d');
    
        // Aktualizujte hodnotu dátumu v databáze pre konkrétny záznam
        $updateStmt = $conn->prepare("UPDATE stk SET platna = ? WHERE id = ?");
        $updateStmt->bind_param("si", $novyDatum, $id);
        $updateStmt->execute();

    
        // Odoberte 2 týždne z hodnoty v stĺpci 'platna'
        $datumObjekt = new DateTime($novyDatum);
        $novyDatumObjekt = $datumObjekt->sub(new DateInterval('P2W'));
        $dvatyzdnePoOdobrani = $novyDatumObjekt->format('Y-m-d');

       // Aktualizujte hodnotu 'dvatyzdne' v databáze pre konkrétny záznam
      $updateDvatyzdneStmt = $conn->prepare("UPDATE stk SET dvatyzdne = ? WHERE id = ?");
       $updateDvatyzdneStmt->bind_param("si", $dvatyzdnePoOdobrani, $id);
     $updateDvatyzdneStmt->execute();
    }

        // Zatvorenie príkazu
    $stmt->close();

?>