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
try {
    $pdo->query("SELECT * FROM table_inexistante");
} catch (PDOException $e) {
    echo "Erreur SQL : " . $e->getMessage();
}
catch (PDOException $e) {
    file_put_contents('erreurs.log', $e->getMessage(), FILE_APPEND);
    echo "Une erreur est survenue. Contactez l'administrateur.";
}

?>

