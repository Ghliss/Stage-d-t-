<!DOCTYPE html>
<html>
<head>
    <title>qcm</title>
    <style type="text/css">
  
  #c
  {
    color:#808080;
  }
   h5
    {
        color:#DC143C;
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
  
     a
    {
      
      margin-left:10px;
    }

  

</style>
</head>
<body>
  <h3><a href="page1.php"><=Acceuil</a></h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            
        <div><h1 align="center">Niveau 2</h1>  
        <h5>(5 pts)</h5> 
        1.Que fait die() ?</br>
        <input type="radio" name="question1" value="q1rep1">sort d'une boucle</br>
        <input type="radio" name="question1" value="q1rep2">tue un processus</br>
        <input type="radio" name="question1" value="q1rep3">arrete le script</br></br>
        2.Les fonctions MySQL améliorées "mysqli" existent depuis</br>
        <input type="radio" name="question2" value="q2rep1">PHP 5 et MySQL 4.1</br>
        <input type="radio" name="question2" value="q2rep2">PHP 6 et MySQL 5.1</br>
        <input type="radio" name="question2" value="q2rep3">PHP 5 et MySQL 5</br></br>
        3.On déclare un tableau avec ?</br>
        <input type="radio" name="question3" value="q3rep1">tab </br>
        <input type="radio" name="question3" value="q3rep2">array</br>
        <input type="radio" name="question3" value="q3rep3">table</br></br>
        4.Comment déplacer un pointeur lié à un descripteur de fichier ?</br>
        <input type="radio" name="question4" value="q4rep1">fmove()</br>
        <input type="radio" name="question4" value="q4rep2">fseek()</br>
        <input type="radio" name="question4" value="q4rep3">seek()</br></br>
        5.Comment rendre un champ invisible dans un formulaire ?</br>
        <input type="radio" name="question5" value="q5rep1">input type="hidden"</br>
        <input type="radio" name="question5" value="q5rep2">input type="disabled"</br>
        <input type="radio" name="question5" value="q5rep3">input type="readonly"</br></br></br>

        <center><input type="submit" name="envoyer" value="envoyer"></center>
        </div></form>
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
        if(isset($_POST["envoyer"]) && isset($_POST["question1"])  && isset($_POST["question2"])  && isset($_POST["question3"])  && isset($_POST["question4"])  && isset($_POST["question5"]) )
        {
           if($_POST["question1"]=="q1rep3")
           {
            $not++ ;
           }
           if($_POST["question2"]=="q2rep1")
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
            $not++;
           }
           
           $req=$bdd->prepare('UPDATE etudiants SET note_php_niv2=:Note WHERE nom=:Nom AND numero=:num ');
            $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
                
        }
        ?>

</body>
</html>