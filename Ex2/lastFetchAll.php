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

    <div class="container">
        <h1>Liste des prix nobel</h1>
        <table border="2">
            <tr>
                <th>Id </th>
                <th>Year</th>
                <th>Category</th>
                <th>Nom et Prenom</th>
            </tr>

            <?php
            $sql="SELECT * FROM nobels ORDER BY year DESC LIMIT 25";
            $resultat = $Cnx->query($sql);
                while($data = $resultat-> fetchAll(PDO :: FETCH_ASSOC)){
                ?>
                <tr>
                    <td><?=$data['id']?></td>
                    <td><?=$data['year']?></td>
                    <td><?=$data['category']?></td>
                    <td><?=$data['name']?></td>
                </tr>

                <?php
            }
        
        ?>


        </table>
    </div>
</body>
<style>
     
    body{
        margin: 0;
        padding: 10px;
        box-sizing: border-box;
        background-color:gray;
        background-size: 100%;
    }
    

    
    table{
        text-align:center;
       
        border:2px solid white;
        background: color #222;0;
        color:white;
        width:50% ;
        margin:100px 10px;
        
    }
    td,tr{
        border:2px solid white;
        height:60px;

    }
    th{
        border:2px solid white;
        width:50px;
        height:10px;
        color:red;  
    }
    
   
</style>
</html>