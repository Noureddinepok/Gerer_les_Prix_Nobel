<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
require_once('cnx.php');
?>
<h1>Liste des clients:</h1>
<?php

    $sql='Select * from nobels WHERE id = 0';
    $req=$Cnx->query($sql);
    $data=$req->fetch(PDO::FETCH_ASSOC);
    if($data){
        echo 'Identifiant valide';
        echo '<ul><li>'.$data['id'].',  '.$data['year'].', '.$data['category'].' '.'</li></ul>';
    }
    else{
        echo 'Identifiant invalide';
    }




?>


        </table>
    </div>
</body>

</html>