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
     <h3><a href="page2.php"><=Accueil</a></h3>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
   

    <div><h1 align="center">Niveau1</h1>
     <h5>(5 pts)</h5>
    1.Que fait cette balise : input type="submit" value="Bonjour" ?</br>
    <input type="radio" name="question1" value="q1rep1">affiche une zone de saisie avec la valeur "Bonjour" par défaut ?</br>
    <input type="radio" name="question1" value="q1rep2">affiche un bouton au libellé "Bonjour" qui envoie un formulaire</br>
    <input type="radio" name="question1" value="q1rep3">envoie la valeur "Bonjour" via un formulaire</br></br>

    2.Où met-on le texte de remplacement d'une image ?</br>
    <input type="radio" name="question2" value="q2rep1">dans l'attribut "text"</br>
    <input type="radio" name="question2" value="q2rep2">dans l'attribut "alt"</br>
    <input type="radio" name="question2" value="q2rep3">dans l'attribut "src"</br>
    3.Quel nouvel attribut en HTML5 affiche une aide en gris dans la zone de saisie d'une balise input  ?</br>

    <input type="radio" name="question3" value="q3rep1">legend</br>
    <input type="radio" name="question3" value="q3rep2">placeholder</br>
    <input type="radio" name="question3" value="q3rep3">caption</br></br>
    4.Comment déclarer une feuille de style interne ?</br>

    <input type="radio" name="question4" value="q4rep1">style src="text/css</br>
    <input type="radio" name="question4" value="q4rep2">style</br>
    <input type="radio" name="question4" value="q4rep3">style rel="stylesheet" type="text/css"</br></br>

    5.Pour mettre un indice au pied d'une lettre j'utilise:</br>
    <input type="radio" name="question5" value="q5rep1">sub</br>
    <input type="radio" name="question5" value="q5rep2">ind</br>
    <input type="radio" name="question5" value="q5rep3">ul</br></br></br>
    <center><input type="submit" name="envoyer" value="envoyer"></center>
</div>
</form>

      
<?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"]) )
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='html22.php';" ></center> 
    <?php } ?>
 




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
if(isset($_POST["envoyer"]) && isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && $_POST["question1"]=="q1rep2"  && $_POST["question2"]=="q2rep2" && $_POST["question3"]=="q3rep2" && $_POST["question4"]=="q4rep2" && $_POST["question5"]=="q5rep1")
{

    if($_POST["question1"]=="q1rep2")
    {
        $not++ ;
    }
    if($_POST["question2"]=="q2rep2")
    {
        $not++ ;
    }
    if($_POST["question3"]=="q3rep2")
    {
        $not++ ;
    }
    if($_POST["question4"]=="q4rep2")
    {
        $not++ ;
    }
    if($_POST["question5"]=="q5rep1")
    {
        $not++ ;
    }
       $req=$bdd->prepare('UPDATE etudiants SET note_html_niv1=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));} 

       
?>




</body>
</html>