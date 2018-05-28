<?php
define('SERVER',"localhost");
define('BASE',"ludus_planning_2.0");
define('USER',"root");
define('PASSWD',"");
$dsn="mysql:dbname=".BASE.";host=".SERVER;
try{
$connexion=new PDO($dsn,USER,PASSWD);
    }
  catch(PDOExeption $e){
  printf("Echec de la connexion: %s\n",$e->getMessage());
  exit();
  }?>



<!--<?php/* function recup_Planning(){
$dsn="mysql:dbname=".BASE.";host=".SERVER;
try{
$connexion=new PDO($dsn,USER,PASSWD);
       }
  catch(PDOExeption $e){
  printf("Echec de la connexion: %s\n",$e->getMessage());
  exit();} 
  $sql="SELECT * from tranche_horaire";
  if(!$connexion->query($sql)) echo "Pb d'accès aux horaire";
  else{
    echo "reussi a se co";
    foreach ($connexion->query($sql) as $row) {
      echo "<option>". $row['DATE_DEBUT'] ."</option>";
      echo "<option>". $row['DATE_FIN'] ."</option>";
    }
  }
} 
  $sql="SELECT * from salle";
  if(!$connexion->query($sql)) echo "Pb d'accès avec les salles";
  else{
  echo "Liste des salles: <br>";
  foreach ($connexion->query($sql) as $row)
  {
  echo "<table><tr><td>".$row['NOMS_SALLE']."</td><td>".$row['LOGO_SALLE']."</td></tr></table>\n";
  }

  $sql="SELECT * from enseignant";
  if(!$connexion->query($sql)) echo "Pb d'accès aux enseignant";
  else{
  echo "<br> Liste des enseignant: <br>";
  foreach ($connexion->query($sql) as $row)
  {
  echo "<table><tr><td>".$row['NOM_ENSEIGNANT']."</td><td>".$row['PRENOM_ENSEIGNANT']."</td></tr></table>\n";
  }
  }
  }
*/?>-->

<?php
function connect_bd(){
$dsn="mysql:dbname=".BASE.";host=".SERVER;
try{
$connexion=new PDO($dsn,USER,PASSWD);
       }
  catch(PDOExeption $e){
  printf("Echec de la connexion: %s\n",$e->getMessage());
  exit();
}

return $connexion;
}
?>



