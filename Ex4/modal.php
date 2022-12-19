<?php 
class Modal {
  public function __construct() {

    try{
        $this->db = new PDO("mysql:host = localhost; dbname = gerer_les_prix_nobel","root", "");
        echo 'Connexion done';
        }
    catch (PDOException $e) {
        echo "Error!: " . $e->getMessage() . "<br/>".PHP_EOL;
        exit("ERROR OCCURED");
    }

    function get_last(){
      $sql = " SELECT * FROM nobels ORDER BY year DESC LIMIT 25";
      $req = mysqli_query($this->db,$sql);
      while($data = mysqli_fetch_assoc($req)){
       echo '<tr>';
       echo '<td>'.$data['name'].'</td>';
       echo '<td>'.$data['category'].'</td>';
       echo '<td>'.$data['year'].'</td>';
       echo '</tr>';
      }

      function get_nb_nobels(){
        $sql = "SELECT count(*) as NONMRE FROM nobels";
        $req = mysqli_query($this->db,$sql);
        $data = mysqli_fetch_assoc($req);
        return '<h2>Le nombre total est :'.$data['NOMBRE'].'</h2>';
      
       
  }


  
}
?>

<body>
  <table>
   
    <tr>
     <th>Nom et Prenom</th>
     <th>Prix</th>
     <th>Année</th>
    </tr>
  
    <?php
    $res = new Modal();
    $res->get_last();
    $res->get_nb_nobel_prizes();
    
    ?>
  </table>
</body>