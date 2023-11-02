<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Recuperation</title>
    <style>
        body{
            background-color: #FFFAE1;
        }

h1{
    text-align:center;
    color:blue;
    text-decoration:underline;
}
thead{
background-color:  #f9f9f9;
}
th{
    color: blue;
}


    </style>

</head>
<body>
    <div class="container mt-5">
    <h1>La liste des utilisateurs</h1>
    <table class="table table-hover">
        <thead>
<tr> 
    <th>ID</th>  
    <th>NOM</th>  
    <th>PRENOM</th>  
    <th>TEL</th>  
    <th>EMAIL</th>  
    <th>GENRE</th> 
    <th>ACTIONS</th> 
    
</tr>
</thead>


<?php
include "connexion.php";
$requette=mysqli_query($connexion,'SELECT * FROM developpeurs');
while($resultat=mysqli_fetch_array($requette))
{

?>
<tbody>
<tr>   
<td><?php echo $resultat["id"] ; ?> </td>
<td><?php echo $resultat["Nom"] ; ?> </td>
<td><?php echo $resultat["Prenom"] ; ?> </td>
<td><?php echo $resultat["Tel"] ; ?> </td>
<td><?php echo $resultat["Email"] ; ?> </td>
<td><?php echo $resultat["Genre"] ; ?> </td>
<td> 
 <form action="detail.php" method="POST">
<input type="hidden" name="id" value= <?php echo $resultat["id"]; ?> >
<input type="submit" value="Modifier">
 </form> 
 <form action="supprimer.php" method="POST">
<input type="hidden" name="id" value= <?php echo $resultat["id"]; ?> >
<input type="submit" value="Supprimer">
 </form>   
</td>
</tr>
</tbody>
<?php
}
?>
<tfoot>

</tfoot>
    </table> 
    <a href="index.php">Ajouter un utilisateur</a>
    </div>
</body>
</html>