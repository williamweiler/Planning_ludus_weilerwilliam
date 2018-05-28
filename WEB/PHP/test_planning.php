<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
<title>Test Base de donnée</title>
</head>
<body>



        <table>
                <tr>
                    <th>Horaire</th>
                    <th>Salle de classe</th>
                    <th>Professeur</th>
                 
                </tr>
        </table>

    <?php
    require_once('connect.php');
        echo '<table>';
        while ($connexion = mysql_fetch_array($connexion))
        {
        echo '<tr>
        <td>'.$connexion['tranche_horaire'].'</td>
        <td>'.$connexion['salle'].'</td>
        <td>'.$connexion['enseignant'].'</td>
        </tr>';
        }
        echo '</table>';
        ?>



 
  <table id="tableau">
  <thead>
    <tr>
      <th scope="col">Horaire</th>
      <th scope="col">Salle</th>
      <th scope="col">Enseignant</th>
  <tbody>
    <tr>
      </thead> 
  </tr>
</tbody>
</tr>
</thead>


    </body>
</html>