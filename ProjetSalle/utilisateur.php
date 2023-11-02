<?php
include "connexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['idSalle'];
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['tel'];
   
    // Requête d'insertion des données dans la table reservation
    $requete = mysqli_prepare($conn, "INSERT INTO reservation (Nom, adresse, tel, id_sale) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($requete, "ssss", $nom, $adresse, $telephone, $id);
    mysqli_stmt_execute($requete);

    // Vérification si l'insertion a réussi
    if (mysqli_stmt_affected_rows($requete) > 0) {
        // Récupérer les informations de la salle
        $query = "SELECT nom, capacite, equipement, date, duree
                  FROM sales WHERE idsale = '$id'";
        $stmt = mysqli_prepare($conn, $query);
       
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $to = $adresse; // Utiliser l'email récupéré du formulaire
            $subject = "Informations de réservation";
            $message = "Voici les informations de réservation :\n\n";
            $message .= "Nom salle : " . $row['nom'] . "\n";
            $message .= "Capacité salle : " . $row['capacite'] . "\n";
            $message .= "Équipement salle : " . $row['equipement'] . "\n";
            $message .= "Date salle : " . $row['date'] . "\n";
            $message .= "Durée salle : " . $row['duree'] . "\n";
            $message .= "Nom : " . $nom . "\n";
            $message .= "Adresse : " . $adresse . "\n";
            $message .= "Téléphone : " . $telephone . "\n";

            // En-têtes de l'e-mail
            $headers = "Content-Type: text/plain; charset=utf-8\r\n";
            $headers .= "From: saidatoudondasse65@gmail.com\r\n";

            // Envoyer l'e-mail
            if (mail($to, $subject, $message, $headers)) {
                header("location:index1.php");
            } else {
                echo "Erreur lors de l'envoi de l'e-mail";
            }
        } else {
            echo "Aucune information de réservation trouvée";
        }
    } else {
        echo "Erreur lors de l'insertion des informations de l'utilisateur.";
    }
}
?>
