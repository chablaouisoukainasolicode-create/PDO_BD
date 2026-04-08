<?php
require 'connexion.php';
$sql ="SELECT*FROM users";
$start=$pdo->query($sql);
$users=$start->fetchall(pdo::FETCH_ASSOC);
foreach($users as $user){
    echo"nom" .$user['nom'] ."email" .$user["email"]."<BR>";
}
?>
