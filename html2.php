<!DOCTYPE html>
<html>
<head>
    <title>qcm</title>
      <style type="text/css">
    
    #c
    {
        color:#808080;
    }
    div
    {
       
        margin-top: 100px;
        margin-left: 200px;
        margin-right: 200px ;
        border: 4px double ;
        
        background-color:#C0C0C0 ;
    }
    body
    {
        background-color: #808080 ;
    }
    input[type=submit]:focus
    {
        box-shadow: 4px 4px 4px #DC143C;
    }
    #btn
    {
        color:#DC143C;
    }
    h5
    {
        color:#DC143C;
    }
   
     a
    {
      
      margin-left:10px;
    }
</style>
</head>
<body>


<h3><a href="page1.php"><=Accueil</a></h3>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
    
     <div><h1 align="center">Niveau 2</h1>
    <h5>(5 pts)</h5>
    1.Dans une feuille de style, comment définir une ou des propriétés adaptées à l'écran d'un smartphone ?</br>
    <input type="radio" name="question1" value="q1rep1">@media handheld { ...... }</br>
    <input type="radio" name="question1" value="q1rep2">@media mobile { ...... }</br>
    <input type="radio" name="question1" value="q1rep3">@media screen { ...... }</br></br>

    2.Quel effet produira la balise h1 appliquée à une ligne ?</br>
    <input type="radio" name="question2" value="q2rep1">la transforme en titre</br>
    <input type="radio" name="question2" value="q2rep2">met la ligne en gras</br>
    <input type="radio" name="question2" value="q2rep3">la centre horizontalement</br></br>

    3.Comment définir une case à cocher ?</br>
    <input type="radio" name="question3" value="q3rep1">type="radio"</br>
    <input type="radio" name="question3" value="q3rep2">type="inputbox"</br>
    <input type="radio" name="question3" value="q3rep3">type="checkbox"</br></br>

    4.Quelle balise permet de créer des liens ?</br>
    <input type="radio" name="question4" value="q4rep1">balise a</br>
    <input type="radio" name="question4" value="q4rep2">balise r</br>
    <input type="radio" name="question4" value="q4rep3">balise lnk</br></br>

    5.5.A quoi sert la balise hr ?</br>
    <input type="radio" name="question5" value="q5rep1">à afficher une ligne horizontale</br>
    <input type="radio" name="question5" value="q5rep2">à définir la cellule d'un tableau</br>
    <input type="radio" name="question5" value="q5rep3">à définir la ligne d'un tableau</br></br></br>
    <center><input type="submit" name="envoyer" value="envoyer"></div></center>
</form>

<?php
session_start();
try
           {
         $bdd = new PDO('mysql:host=localhost;dbname=etudiants;charset=utf8','root','');
            }
        catch(Exception $e)
           {
        die('Erreur : '.$e->getMessage());
            }
$not=0 ;
if(isset($_POST["envoyer"]) && isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) )
{
    if($_POST["question1"]=="q1rep1")
    {
        $not++ ;
    }
    if($_POST["question2"]=="q2rep1")
    {
        $not++ ;
    }
    if($_POST["question3"]=="q3rep3")
    {
        $not++ ;
    }
    if($_POST["question4"]=="q4rep1")
    {
        $not++ ;
    }
    if($_POST["question5"]=="q5rep1")
    {
        $not++ ;
    }
    
    $req=$bdd->prepare('UPDATE etudiants SET note_html_niv2=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
}
?>


</body>
</html>