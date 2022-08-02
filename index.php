<!DOCTYPE html>
<html>
<header> 
    <title>Rechercher un personne</title>
    <FONT size='150pt' >
      <div align="center">
        <a style='color:rgb(13, 71, 228)' href="page1.html">Projet NSI Annuaire</a>
      </div>
       </FONT>
  </header>
<body style="background-color:rgb(37, 37, 37);">
<hr color=rgb(30,144,255)>
<div align = "center">
<FONT size='20pt' >
<td>Resultat de la recherche :</td>
  <br></br>

<?php 

$DB_DSN='mysql:host=localhost;dbname=annuaire';
$DB_USER='root';
$DB_PASS='';


try
{
    $options =
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $PDO= new PDO($DB_DSN,$DB_USER,$DB_PASS, $options);
    
    $sql = 'SELECT * FROM annuaire';

    $PDO->query($sql);

    $results = $PDO->query($sql);

    while($data = $results->fetch(PDO::FETCH_ASSOC))
    {
        echo '<p>'.$data['nom'].' '.$data['prenom'].' : '.$data['telephone'].'</p>';
    }

}
catch(PDOException $pe)
{
    echo 'erreur: '.$pe->getMessage();
}
?>

</div>
       </FONT>
</html>