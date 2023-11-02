<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inscription</title>
    
  
    <style>
    .navbar {
      max-width: 500px;
      margin: 0 auto;
          }
h2{
    text-align:center;
    font-size:2em;
    font-family: 'Dancing Script',
        cursive;

}
.custom-container {
      max-width: 1000px;
     
      margin: 0 auto;
      margin-top: 50px;
    }
    .custom-fieldset {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      background-color: #f9f9f9;
      box-shadow: 1px 4px 4px black;
    }

    body{
      background-color: #FFFAE1;
        
    }

    button{
        width:300px;
    }

    .nav-link{
        color:rgb(112, 109, 109);
        font-size:1.2em;
    }

    .trait{
        width:250px ;
        background-color: black;
        height:4px;
        margin-top: 20px;
     margin-left:550px;
     border-radius:5px;
     box-shadow: 1px 3px 3px #e0ab87;
     
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto justify-content-between">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">À propos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div>
    <div class="trait">
    </div>
<div class="custom-container">
  <h2>Formulaire</h2>
    <div class="d-flex justify-content-center">
    <fieldset  class="custom-fieldset">
        <legend>Inscription</legend>
    <form action="insert.php" method="POST">
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" name ="nom" placeholder="Entrez votre nom">
      </div>
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom">
      </div>
      <div class="form-group">
        <label for="tel">Téléphone :</label>
        <input type="tel" class="form-control" name="tel" placeholder="Entrez votre numéro de téléphone">
      </div>
      <div class="form-group">
        <label for="tel">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Entrez votre email">
      </div>
      <div class="form-group">
        <label for="genre">Genre :</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genre" id="homme" value="homme" checked>
          <label class="form-check-label" for="homme">
            Homme
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genre" id="femme" value="femme">
          <label class="form-check-label" for="femme">
            Femme
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genre" id="autre" value="autre">
          <label class="form-check-label" for="autre">
            Autre
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ">Envoyer</button>
      </fieldset>
    </form>
    </div>
  </div> 
  <img src="" alt="">
  </div>
</body>
</html>