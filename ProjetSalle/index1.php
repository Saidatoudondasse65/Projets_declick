<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Formulaire de recherche</title>
    <style>
        body{
            background-color: cadetblue;
        }
      .form-signup{
        width:50%;
        margin:30%;
        margin-top:200px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        box-shadow:2px 3px 4px black;
      }
      button{
        width:100%;
      }
    </style>
</head>
<body>
<div class="container">

<form action="recuperation.php" method="POST" class="form-signup">

<fieldset>
       <legend>Recherches de Salles de Reunions Disponibles</legend>
   <div class="form-group">
       <label for="date">Date :</label>
       <input type="date" class="form-control" id="date" name="date" required>
     </div>
     <div class="form-group">
       <label for="">Durée:</label>
       <select name="duree" id="sale" class="form-control" required>
       <option value="">Sélectionnez une date</option>
       <option value="1h">1h </option>
       <option value="2h">2h</option>
       <option value="3h">3h</option>
       <option value="4h">4h</option> 
       <option value="4h">5h</option> 
       <option value="4h">6h</option> 
      </select>
     </div><br>
     <button type="submit" class="btn btn-primary">Envoyer</button>
     </fieldset>
    </form>
   </div>
</body>
</html>