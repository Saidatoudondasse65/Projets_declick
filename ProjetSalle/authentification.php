<?php
require'Database.php';
require "connexion.php";
if (isset($_POST["valider"]))
    if (
        isset($_POST["nom"]) && !empty($_POST["nom"])
        && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["pass"]) &&
         !empty($_POST["pass"])
    ) {
        $name = $_POST["nom"];
        $passwd = $_POST["pass"];
        $emails = $_POST["email"];

        $sql= "SELECT * FROM  systeme WHERE nom = :nom  AND email=:email AND pass=:pass ";
        $fields= [ "nom"=>$name ];
        $req=Database::getInstance()->request($sql,$fields); 

        echo'<pre>';
        print_r($req);

      echo'</pre>';
    }


?>
