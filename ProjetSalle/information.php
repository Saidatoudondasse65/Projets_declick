<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Page d'information</title>
    <style>
        body{
            background-color:cadetblue; 
        }
.form-signup{
        width:60%;
        margin:auto;
        margin-top:150px;
        border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      box-shadow:2px 3px 4px black;
      }
      button{
        width:100%;
      }
      legend{
        color:white;
        font-size:2em;
      }

    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idSalle = $_POST['id'];
}
    ?>
<div class="container">

<form action="utilisateur.php" method="POST" class="form-signup">
    <fieldset>
        <legend>Information Complementaires</legend>
        <input type="hidden" name="idSalle" value="<?php echo $idSalle; ?>">
        <div class="form-group">
            <label for="date">NOM</label>
            <input type="text" class="form-control" id="date" name="nom" required>
        </div><br>
        <div class="form-group">
            <label for="">ADRESSE</label>
            <input type="email" class="form-control" id="date" name="adresse" required>
        </div><br>
        <div class="form-group">
            <label for="">TELEPHONE</label>
            <input type="tel" class="form-control" id="date" name="tel" required>
        </div><br>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </fieldset>
</form>
   </div>
</body>
</html>