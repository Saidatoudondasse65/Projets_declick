<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Telecom</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark p-3 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SD<span>TECHNOLOGIES</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2" href="#">ACCUEIL</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              CATHEGORIES
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="samsung.php"><i class="fas fa-mobile-alt me-2"></i>Samsung</a></li>
              <li><a class="dropdown-item" href="iphone.php"><i class="fab fa-apple me-2"></i>Apple</a></li>
              <li><a class="dropdown-item" href="huawei.php"><i class="fas fa-mobile-alt me-2"></i>Huawei</a></li>
              <li><a class="dropdown-item" href="xiaomi.php"><i class="fas fa-mobile-alt me-2"></i>Xiaomi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 " href="#">A PROPOS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 " href="#">CONTACT</a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link mx-2 btn btn-outline-primary" href="#">S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 btn btn-outline-secondary" href="#">Se Connecter</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/Samsunggalaxy.jpg" class="d-block w-100" alt="samsung">
        <div class="carousel-caption d-none d-md-block">
          <h5>Samsung galaxy fold 4</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/iphone.webp" class="d-block w-100" alt="iphone">
        <div class="carousel-caption d-none d-md-block">
          <h5>Le telephone Apple</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/huawei3.jpg" class="d-block w-100" alt="huawei">
        <div class="carousel-caption d-none d-md-block">
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="grande">
    <h1>Visiter les produits du catalogue</h1>
    <div class="gallery">
      <div class="content">
        <img src="images/Samsung_Galaxy_F23_photos.jpg" alt="iphone">
        <h3>Samsung</h3>
        <p>Découvrir les téléphones portables Samsung</p>
        <a href="samsung.php"> <button class="buy-1">Visiter</button></a>
      </div>

      <div class="content">
        <img src="images/Apple_iphone_13_Pro_max_pictures (1).jpg" alt="samsung">
        <h3>Iphone</h3>
        <p>Découvrir les téléphones portables Iphone fait par Apple</p>
        <a href="iphone.php"><button class="buy-2">Visiter</button></a>
      </div>

      <div class="content">
        <img src="images/huawei02.jpg" alt="iphone">
        <h3>Huawei</h3>
        <p>Découvrir les téléphones portables Huawei</p>
        <a href="huawei.php"><button class="buy-3">Visiter</button></a>
      </div>
      <div class="content">
        <img src="images/Xiaomi_Redmi_Note_12_Pro_1.jpg" alt="iphone">
        <h3>Xiaomi</h3>
        <p>Découvrir les téléphones portables Xiaomi</p>
        <button class="buy-4">Visiter</button>
      </div>
    </div>
    <p id="aug">Visiter le catalogue pour beneficier des meilleurs smartphones haut de gamme en 2023 </p>
  </div>
  <div class="comment">
    <h1>Les Témoignages de nos Clients Satisfaits </h1>
    <p id="centre">Chez SD <span>TECHNOLOGIES</span>, la satisfaction de nos clients est notre plus grande <br>
      récompense.
      fiers de partager les commentaires chaleureux de nos clients qui ont choisi notre boutique
      pour acquérir leur téléphone de rêve.</p>
    <div class="gallery2">
      <div class="content">
        <img src="images/johnDoe1.jpg" alt="iphone">
        <h3>John Doe</h3>
        <p>Je suis ravi d'avoir choisi SDTECHNOLOGIES pour mon nouveau smartphone
          Samsung. Le produit est arrivé rapidement, en parfait état, et il correspond exactement
          à ce que j'attendais.Votre équipe de service.</p>
      </div>

      <div class="content">
        <img src="images/Johnde5.jpg" alt="samsung">
        <h3>Michel Martin</h3>
        <p>C'était la première fois que j'achetais un téléphone en ligne,
          et je dois dire que SDTECHNOLOGIES a rendu l'expérience totalement sans
          stress. J'ai choisi un téléphone Huawei., et je suis impressionnée par la qualité de l'appareil.
        </p>

      </div>

      <div class="content">
        <img src="images/JohnDoe4.jpg" alt="iphone">
        <h3> David Chen</h3>
        <p>Je suis un grand fan de la marque Samsung, et j'ai été ravi de trouver
          une sélection variée de téléphones Samsung chez SDTECHNOLOGIES.
          J'ai acheté le dernier Samsung Galaxy S-Series., et je suis totalement satisfait de mon achat. </p>

      </div>

      <div class="content">
        <img src="images/download2.jpg" alt="iphone">
        <h3>EMILIE</h3>
        <p>Je suis extrêmement satisfaite de mon achat chez SDTECHNOLOGIES.
          J'ai choisi un magnifique iPhone et je suis époustouflée par la qualité du produit.
          Le processus d'achat était fluide.et j'ai apprécié le suivi de ma commande .
        </p>
      </div>
    </div>
  </div>
  <div class="footer">
    <footer class="bg-dark text-center text-white mt-auto">

      <div class="container p-4 pb-0">

        <section class="mb-4">

          <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
              class="fab fa-facebook-f"></i></a>


          <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
              class="fab fa-twitter"></i></a>


          <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
              class="fab fa-google"></i></a>


          <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
              class="fab fa-instagram"></i></a>


          <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
              class="fab fa-linkedin-in"></i></a>

          <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
              class="fab fa-github"></i></a>
        </section>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">SDTECHNOLOGIES.com</a>
      </div>

    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>