<?php
session_start();
require '../database/database.php';
if(isset($_GET['idprod']) AND !empty($_GET['idprod'])) {
    $suppr_id = htmlspecialchars($_GET['idprod']);
    $suppr = $bdd->prepare('DELETE FROM produit WHERE id = ?');
    $suppr->execute(array($suppr_id));
    header('Location:'.URL.'dashboard');
}