<!DOCTYPE html>
<html>
<header> 
    <title>Nouveau contact</title>
    <FONT size='150pt' >
      <div align="center">
        <a style='color:rgb(13, 71, 228)' href="page1.html">Projet NSI Annuaire</a>
      </div>
       </FONT>
  </header>
<body style="background-color:rgb(37, 37, 37);">
<hr color=rgb(30,144,255)>
<div align = "center">
<FONT size='25pt' >

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

    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $num = $_GET['num'];

    $sql = 'INSERT INTO annuaire SET nom="'. $nom.'", prenom="'.$prenom.'", telephone='.$num.'';
    $PDO->query($sql);

    {
        echo '<p>'.$prenom. ' à été ajouter à la liste de vos contacts.';
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