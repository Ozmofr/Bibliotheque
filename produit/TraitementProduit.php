<?php
if(!isset($_GET['Traitement'])){
    $_GET['Traitement'] = "rien";
}
else{
    $conn = new mysqli("localhost",
    "root",
    "",
    "bibliotheque");
}
