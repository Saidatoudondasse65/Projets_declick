<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Formulaire</title>
    <style>
      
    body {
    font-family: 'Advent Pro', sans-serif;
    padding-inline: 0;
    margin: 0;
    box-sizing:border-box;
  }

ul {
    margin: 0;
    padding: 0;
}

li {
    list-style-type: none;
}

a {
    text-decoration: none;
    color:bisque;
    margin-right:50px;

}
nav {
    overflow: hidden;
    position: fixed;
    width: 100%;
    opacity: 0.9;
    background-color:cadetblue;
}

header li {
    float: right;
    font-size: 1.2em;
}

header li a {
    display: block;
    text-align: center;
    padding: 18px 5px;
}
#image {

padding-top: 60px;
background: url(images/fond5.jpg) no-repeat fixed 50% 50%;
background-size: cover;
height: 799px;

}
    #centre{
        padding-top:300px;
        margin-left:47%;
      }
      #centre h1{
        color:rgb(63, 38, 5);
        margin-left:-200px;
      }
        button{
        width:200px;
        margin-left:50%;
      }
    </style>  
</head>
<body>
  <header>
  <nav>
       <ul>
          <li> <a href="administration.php">Administration </a> </li>
                <li> <a href="index1.php">Recherche de disponabilité</a></li>
                <li> <a href="#accueil">Accueil</a></li>
            </ul>
        </nav>
        <div id="image">
          <div id="centre">
          <h1>Recherche de salles disponibles</h1>
          </div>
          <form action="index1.php" method="get">
            <button type="submit" class="btn btn-primary">Rechercher</button>
          </form>
         
        </div>
  </header>

</body>
</html>