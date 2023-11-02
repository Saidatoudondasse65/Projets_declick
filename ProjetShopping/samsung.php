<?php  
session_start();
include 'ajouter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="samsung.css">
    <title>Samsung</title>
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
                        <a class="nav-link mx-2" href="index.php">ACCUEIL</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            CATHEGORIES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <li><a class="dropdown-item" href="samsung.php"><i
                                        class="fas fa-mobile-alt me-2"></i>Samsung</a></li>
                            <li><a class="dropdown-item" href="iphone.php"><i class="fab fa-apple me-2"></i>Apple</a>
                            </li>
                            <li><a class="dropdown-item" href="huawei.php"><i
                                        class="fas fa-mobile-alt me-2"></i>Huawei</a></li>
                            <li><a class="dropdown-item" href="xiaomi.php"><i
                                        class="fas fa-mobile-alt me-2"></i>Xiaomi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 " href="#">A PROPOS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 " href="#">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paniersamsung.php">
                            <i class="fas fa-shopping-cart"></i>Panier<span><?=array_sum($_SESSION['panier'])?></span>
                        </a>
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
    <div class="container-fluid">
        <div class="px-lg-5">
            <div class="row py-5">
                <div class="col-lg-12 mt-5">
                    <div class="text-white p-5 shadow-sm rounded banner">
                        <h1 class="display-4"></h1>
                        <p class="lead">Téléphones Samsung - Découvrez les derniers modèles et offres spéciales
                        <br>
                            Quel modèle Samsung acheter en 2023 ?
                        </p>
                    </div>
                </div>
            </div>
                <div class="row">
            <?php
              include_once "connexion.php";
            $requette =mysqli_query($conn,"SELECT * FROM paniersamsung");
            while($resultat=mysqli_fetch_assoc($requette))
             {   
            ?>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="images/<?=$resultat["img"]?>" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <p><?=$resultat["nom"]?></p>
                            <a href="ajouter.php?id=<?=$resultat["id_samsung"]?>"class="btn btn-primary btn-lg" role="button" aria-disabled="true">Ajouter au
                                panier</a>
                                <p><?=$resultat["prix"]?>£</p>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
           <?php
             } 
            ?>
    </div>
    </div>
    </div>

    <div class="footer">
        <footer class="bg-dark text-center text-white mt-auto">

            <div class="container p-4 pb-0">

                <section class="mb-4">

                    <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!"
                        role="button"><i class="fab fa-facebook-f"></i></a>


                    <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!"
                        role="button"><i class="fab fa-twitter"></i></a>


                    <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                        role="button"><i class="fab fa-google"></i></a>


                    <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                        role="button"><i class="fab fa-instagram"></i></a>


                    <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!"
                        role="button"><i class="fab fa-linkedin-in"></i></a>

                    <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!"
                        role="button"><i class="fab fa-github"></i></a>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">SDTECHNOLOGIES.com</a>
            </div>
        </footer>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>