<?php
session_start(); // Ajoutez cette ligne pour démarrer la session

include_once "connexion.php";

if(!isset($_SESSION['panier']))
{
    $_SESSION['panier'] = array();
}

if(isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $produit = mysqli_query($conn, "SELECT * FROM paniersamsung WHERE id_samsung = $id");
    
    if(empty(mysqli_fetch_assoc($produit)))
    {
        die("Ce produit n'existe pas");
    }

    if(isset($_SESSION['panier'][$id]))
    {
        $_SESSION['panier'][$id]++;
    }
    else
    {
        $_SESSION['panier'][$id] = 1; 
    }
    
    header("Location: samsung.php");
    exit();
}        
?>
