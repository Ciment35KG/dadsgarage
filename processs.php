<!DOCTYPE html>
<?php
ini_set('display_errors', '1');
echo function_exists('mysqli_connect') . '\n';
    $druh = $_POST['druh'] ;   
    echo $druh;
    $znacka = $_POST['znacka'] ;   
    echo $znacka;
    $model = $_POST['model']  ;  
    echo $model;
    $rok = $_POST['rok']  ;  
    echo $rok;
    $cena = $_POST['cena'] ;   
    echo $cena;
    $palivo = $_POST['palivo'];    
    echo $palivo;
    $kilometre = $_POST['kilometre'] ;   
    echo $kilometre;
    $lokalita = $_POST['lokalita'] ;   
    echo $lokalita;
    $objem = $_POST['objem'] ;   
    echo $objem;
    $vykon = $_POST['vykon'] ;   
    echo $vykon;
    $pohon = $_POST['pohon'] ;   
    echo $pohon;
    $prevodovka= $_POST['prevodovka'];    
    echo $prevodovka;
    $farba = $_POST['farba'] ;  
    echo $farba;
    $popis = $_POST['popis'] ;   
    echo $popis;


    
    $meno = $_POST['meno']  ;
    echo $meno;
    $telefon = $_POST['telefon'] ;   
    echo $telefon;
    $email = $_POST['email'] ;  
     echo $email;

    $conn = mysqli_connect( 'localhost', 'Chujezl', 'Ujomaraddonuty#!33', 'MaturaWeb');
    if(mysqli_connect_errno()){
        die('Connection Failed : '.$conn->connect_error);
    }

    else{

        $stmt = $conn->prepare("insert into vsauta(druh,znacka,model,rok,cena,palivo,kilometre,lokalita,objem,vykon,pohon,prevodovka,farba,popis,meno,telefon,email)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
        $stmt->bind_param("sssiisisiisssssis",$druh, $znacka, $model, $rok, $cena, $palivo, $kilometre, $lokalita, $objem, $vykon, $pohon, $prevodovka, $farba, $popis, $meno, $telefon, $email);
        $stmt->execute();
        echo " \n Si dekeš automatický Diesel moc ....";
        $stmt->close(); 
        $conn->close();
    }


?>
</html>