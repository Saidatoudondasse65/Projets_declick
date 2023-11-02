<?php
include "connexion.php";
if(isset($_POST["id"]))
{
    $id=$_POST["id"];
    $requette = mysqli_query($conn,"DELETE FROM sales WHERE idsale='$id'");
    if($requette)
    {
        header("location:liste.php ");
    }
else{
    echo "Echec de suppression";
}
}
