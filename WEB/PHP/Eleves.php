<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
<title>
Recuperation de personne
</title>
</head>
<body> 
<h1>Liste des élèves</h1>
<?php require_once('connect.php');
?>
	<!--<p>Cette page appel une feuille de style</p>-->
<?php function recup_classe()
{
$dsn="mysql:dbname=".BASE.";host=".SERVER;
try{
$connexion=new PDO($dsn,USER,PASSWD);
       }
  catch(PDOExeption $e){
  printf("Echec de la connexion: %s\n",$e->getMessage());
  exit();} 
  $sql="SELECT * from classe";  
  if(!$connexion->query($sql)) echo "Pb d'accès aux classe";
  else{
    echo "reussi a se co";
    foreach ($connexion->query($sql) as $row) {
      echo "<option>". $row['FONDATION_Classe'] ."</option>";
    }
  }
}

  $sql="SELECT * from eleve";
  if(!$connexion->query($sql)) echo "Pb d'accès avec les eleves";
  else{
  echo "Liste des eleves: <br>";
  foreach ($connexion->query($sql) as $row)
  {
  echo "<table><tr><td>".$row['NOM_ELEVE']."</td><td>".$row['PRENOM_ELEVE']."</td> <td> Fondation: ".$row['FONDATION_Classe']."</td></tr></table>\n";
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
?>


<form action="Eleves.php" id="form1" method="get">
<select name="liste">
<?php 
recup_classe();
 ?>	
</select>
<p><input type="submit" id="valid" value="valider">
</form>
<?php
connect_bd();
?>

</body>
</html>