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

        1."void" est utilisé pour?</br>
        <input type="radio" name="question1" value="q1rep1">une méthode qui ne retourne aucune valeur</br>
        <input type="radio" name="question1" value="q1rep2">n'existe pas en Java</br>
        <input type="radio" name="question1" value="q1rep3">une chaine de caractères non définie</br></br>

        2.Une interface peut-elle être instanciée  ?</br>
        <input type="radio" name="question2" value="q2rep1">Non</br>
        <input type="radio" name="question2" value="q2rep2">Oui si elle est "public"</br>
        <input type="radio" name="question2" value="q2rep3">Oui, toutes</br></br>

        3.Que signifie JRE ?</br>
        <input type="radio" name="question3" value="q3rep1">Java Runtime Environment</br>
        <input type="radio" name="question3" value="q3rep2">Java Routine Emulator<title\></br>
        <input type="radio" name="question3" value="q3rep3">Java Runtime Engine</br></br>

        4.Quel opérateur sert pour la concaténation des chaines de caractères ?</br>
        <input type="radio" name="question4" value="q4rep1">+</br>
        <input type="radio" name="question4" value="q4rep2">&&</br>
        <input type="radio" name="question4" value="q4rep3">&</br></br>

        5.Quel package / structure est la plus récente pour les interfaces graphiques ?</br>
        <input type="radio" name="question5" value="q5rep1">javafx</br>
        <input type="radio" name="question5" value="q5rep2">directx</br>
        <input type="radio" name="question5" value="q5rep3">awt</br></br></br>

        <center><input type="submit" name="envoyer" value="envoyer"></center>


    </div>
    </form>
    <?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && $_POST["question1"]=="q1rep1"  && $_POST["question2"]=="q2rep2" && $_POST["question3"]=="q3rep1" && $_POST["question4"]=="q4rep1" && $_POST["question5"]=="q5rep1")
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='java22.php';" ></center> 
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
   if(isset($_POST["envoyer"]) && isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]))
   {
    if($_POST["question1"]=="q1rep1")
    {
        $not++ ;
    }
    if($_POST["question2"]=="q2rep2")
    {
        $not++ ;
    }
   
   if($_POST["question3"]=="q3rep1")
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
      $req=$bdd->prepare('UPDATE etudiants SET note_java_niv1=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));



   }
   ?>
</body>
</html>