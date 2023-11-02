<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Page de récupération</title>
    <style>
        body {
            background-color: cadetblue;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php
        include "connexion.php";

        if (isset($_POST['date']) && isset($_POST['duree'])) {
            $date = $_POST['date'];
            $duree = $_POST['duree'];
            $formattedDate = date('Y-m-d', strtotime($date));

            $requete = mysqli_prepare($conn, "SELECT * FROM sales WHERE date = ? AND duree = ?");
            mysqli_stmt_bind_param($requete, "ss", $formattedDate, $duree);
            mysqli_stmt_execute($requete);

            $resultat = mysqli_stmt_get_result($requete);

            if (mysqli_num_rows($resultat) > 0) {
                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NOM</th>
                            <th>CAPACITE</th>
                            <th>EQUIPEMENT</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($resultat)) {
                            ?>
                            <tr>
                                <td><?php echo $row["nom"]; ?></td>
                                <td><?php echo $row["capacite"]; ?></td>
                                <td><?php echo $row["equipement"]; ?></td>
                                <td>
                                    <form action="information.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row["idsale"]; ?>">
                                        <input type="submit" value="Réserver">
                                    </form>
                                </td>
                            </tr>
                         <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
            } else {
                echo "Aucune salle disponible";
            }
        } else {
            echo "Aucune salle disponible";
        }
        ?>
    </div>
</body>
</html>
