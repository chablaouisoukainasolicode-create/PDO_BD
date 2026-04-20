<?php
$host='localhost';
$dbname='blogs';
$username='root';
$password='';
try{
$pdo= new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo"connexion réussie a la base $dbname";
}catch(PDOEXEPTION $e){
      echo "Erreur de connexion : " . $e->getMessage();
}


    

?>

