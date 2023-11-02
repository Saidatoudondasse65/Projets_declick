<?php
session_start();
include_once "connexion.php";

if(!isset($_SESSION['panier_iphone']))
{
    $_SESSION['panier_iphone'] = array();
}

if(isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $produit = mysqli_query($conn, "SELECT * FROM panieriphone WHERE id_iphone = $id");
    
    if(empty(mysqli_fetch_assoc($produit)))
    {
        die("Ce produit n'existe pas");
    }

    if(isset($_SESSION['panier_iphone'][$id]))
    {
        $_SESSION['panier_iphone'][$id]++;
    }
    else
    {
        $_SESSION['panier_iphone'][$id] = 1; 
    }
    
    header("Location: iphone.php");
    exit();
}        
?>
