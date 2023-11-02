<?php  
session_start();
include_once "connexion.php";
if(isset($_GET['del'])){
    $id_del= $_GET['del'];
      unset($_SESSION['panier_huawei'][$id_del]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="paniersamsung.css">
    <title>Panier</title>
</head>
<body class="panier">
    <a href="huawei.php" class="link">Boutique</a>
    <section>
        <table>
            <tr>
                <th></th>
                <th>NOM</th>
                <th>PRIX</th>
                <th>OUANTITE</th>
                <th>ACTIONS</th>
            </tr>
            <?php  
            $total=0;
    $ids= array_keys($_SESSION['panier_huawei']);
    if(empty($ids))
    {
   echo "Votre panier est vide";

    }

    else 
    {
        $produits= mysqli_query($conn,"SELECT * FROM panierhuawei WHERE id_huawei IN (".implode(',',$ids).")");
        foreach($produits as $product) :
            $total= $total + $product["prix"] * $_SESSION['panier_huawei'][$product['id_huawei']]; 
      ?>
            <tr>
                <td> <img src="images/<?=$product["img"]?>" alt="iphone"></td>
                <td><?=$product["nom"]?></td>
                <td><?=$product["prix"]?>£</td>
                <td><?=$_SESSION['panier_huawei'][$product['id_huawei']]?></td>
                <td><a href="panierhuawei.php?del=<?=$product["id_huawei"]?>"><img src="images/delete.png" alt=""></a></td>
            </tr>
            <?php endforeach ; 
              }
             ?>
            <tr class="total">
                <th>Total : <?=$total?>£</th>
                <th> <form action="#" method="post">
                <input type="hidden" name="total" value="<?=$total?>">
                <button type="submit">Payer avec Paypal</button>
              </form>
             </th>
            </tr> 
            <tr>
            <th>
             <div id="paypal-button-container"></div>
             </th>
             </tr>
        </table>
    </section>
    <script src="https://www.paypal.com/sdk/js?client-id=AZiCTSk-bGS0uyknwu3xvXLO7fPTaOt6LuitAyQa10cPKEIyEjAHyVKwEavvm0QVzCezFjlyv2KUa1nb&currency=EUR&intent=authorize"></script>

    <script>
          paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
              return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '<?= $total ?>' 
                      }
                    }]
              });
            },
            // Finalize the transaction after payer approval
            onApprove:  (data, actions) => {
            return actions.order.capture().then(function(orderData){
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

                });
            }
          }).render('#paypal-button-container');
        </script>
</body>
</html>