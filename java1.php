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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        
        <div><h1 align="center">Niveau1</h1>
        <h5>(5 pts)</h5>

        1.Quel est la différence entre les variables de type "long" et "double" ?</br>
        <input type="radio" name="question1" value="q1rep1">long définit des entiers et double des nombres en virgule flottante</br>
        <input type="radio" name="question1" value="q1rep2">double n'existe pas en Java</br>
        <input type="radio" name="question1" value="q1rep3">long occupe 2 octets et double 4 octets</br></br>

        2.Quel environnement de développement très utilisé permet notamment de compiler et déboguer en Java ?</br>
        <input type="radio" name="question2" value="q2rep1">Visual Studio</br>
        <input type="radio" name="question2" value="q2rep2">Eclipse</br>
        <input type="radio" name="question2" value="q2rep3">JRE</br></br>

        3.La classe Exception dérive de la classe:</br>
        <input type="radio" name="question3" value="q3rep1">Throwable</br>
        <input type="radio" name="question3" value="q3rep2">IOException<title\></br>
        <input type="radio" name="question3" value="q3rep3">Error</br></br>

        4.Comment connaître la classe mère de Classe1 ?</br>
        <input type="radio" name="question4" value="q4rep1">Classe1.class.getSuperclass()</br>
        <input type="radio" name="question4" value="q4rep2">Classe1.getClass()</br>
        <input type="radio" name="question4" value="q4rep3">Classe1.class.getClass()</br></br>

        5.Le type "float" est codé sur combien d'octets ?</br>
        <input type="radio" name="question5" value="q5rep1">4</br>
        <input type="radio" name="question5" value="q5rep2">6</br>
        <input type="radio" name="question5" value="q5rep3">8</br></br></br>

        <center><input type="submit" name="envoyer" value="envoyer"></center>


    </div>
    </form>
    <?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && $_POST["question1"]=="q1rep1"  && $_POST["question2"]=="q2rep2" && $_POST["question3"]=="q3rep1" && $_POST["question4"]=="q4rep1" && $_POST["question5"]=="q5rep1" )
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='java2.php';" ></center> 
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