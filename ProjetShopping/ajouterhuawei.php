<?php
session_start();
include_once "connexion.php";

if(!isset($_SESSION['panier_huawei']))
{
    $_SESSION['panier_huawei'] = array();
}

if(isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $produit = mysqli_query($conn, "SELECT * FROM panierhuawei WHERE id_huawei = $id");
    
    if(empty(mysqli_fetch_assoc($produit)))
    {
        die("Ce produit n'existe pas");
    }

    if(isset($_SESSION['panier_huawei'][$id]))
    {
        $_SESSION['panier_huawei'][$id]++;
    }
    else
    {
        $_SESSION['panier_huawei'][$id] = 1; 
    }
    
    header("Location: huawei.php");
    exit();
}        
?>
