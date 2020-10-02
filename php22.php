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
  <h3><a href="page2.php"><=Acceuil</a></h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
          
        <div><h1 align="center">Niveau 2</h1>  
        <h5>(5 pts)</h5> 
        1.ereg("^a", "abcdef") renvoie?</br>
        <input type="radio" name="question1" value="q1rep1">false</br>
        <input type="radio" name="question1" value="q1rep2">une erreur</br>
        <input type="radio" name="question1" value="q1rep3">true</br></br>
        2.Quel tableau contient les variables de session ?</br>
        <input type="radio" name="question2" value="q2rep1">$_SESSION</br>
        <input type="radio" name="question2" value="q2rep2">$_GET</br>
        <input type="radio" name="question2" value="q2rep3">$_POST</br></br>
        3.strlen("QCMQUIZ") renvoie</br>
        <input type="radio" name="question3" value="q3rep1">6 </br>
        <input type="radio" name="question3" value="q3rep2">7</br>
        <input type="radio" name="question3" value="q3rep3">une erreur</br></br>
        4.Comment instancier un objet à partir d'une classe ?</br>
        <input type="radio" name="question4" value="q4rep1">new</br>
        <input type="radio" name="question4" value="q4rep2">construct()</br>
        <input type="radio" name="question4" value="q4rep3">implement()

</br></br>
        5.Qu'est-ce que GD  ?</br>
        <input type="radio" name="question5" value="q5rep1">une bibliothèque de fonctions d'images pour PHP</br>
        <input type="radio" name="question5" value="q5rep2">un compilateur PHP</br>
        <input type="radio" name="question5" value="q5rep3">une distribution PHP libre de droits</br></br></br>

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