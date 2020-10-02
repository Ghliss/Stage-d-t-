<!DOCTYPE html>
<html>
<head>
	<title>qcm</title>
   
</head>
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
<body>
	<h3><a href="page1.php"><=Accueil</a></h3>
		<form action="<?php echo $_SERVER['PHP_SELF']?> " method="POST" >
        
        	
 <div><h1 align="center">Niveau 2</h1>
    <h5>(5 pts)</h5>
    1.On trouve les packages pour gérer les flux dans:</br>
             <input type="radio" name="question1" value="q1rep1" >java.ioStream</br>
             <input type="radio" name="question1" value="q1rep2" >java.stream</br>
             <input type="radio" name="question1" value="q1rep3" >java.io</br></br>

         2.Par convention une classe:</br>
             <input type="radio" name="question2" value="q2rep1" >commence par une majuscule</br>
             <input type="radio" name="question2" value="q2rep2" >est en majuscules</br>
             <input type="radio" name="question2" value="q2rep3" >est en minuscule</br></br>

          3.Comment construire une énumération "MaListe" ?</br>
             <input type="radio" name="question3" value="q3rep1" >public enum MaListe { }</br>
             <input type="radio" name="question3" value="q3rep2" >public class objects MaListe { }</br>
             <input type="radio" name="question3" value="q3rep3" >public objects MaListe { }<br></br>

         4.Comment tester si un objet "File" est un répertoire ?</br>
             <input type="radio" name="question4" value="q4rep1" >.isDirectory()</br>
             <input type="radio" name="question4" value="q4rep2">.isDir()r</br>
             <input type="radio" name="question4" value="q4rep3" >.Dir()</br></br>

         5.Quelle méthode sert à lancer l'exécution d'un programme ?</br>
             <input type="radio" name="question5" value="q5rep1" >main</br>
             <input type="radio" name="question5" value="q5rep2" >begin</br>
             <input type="radio" name="question5" value="q5rep3" >start</br></br></br>
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
         if(isset($_POST['envoyer']) && isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]))
         {
            if ($_POST["question1"]=="q1rep1")
            {
                $not++ ;
            }
            if ($_POST["question2"]=="q2rep1")
            {
                $not++ ;
            }
            if ($_POST["question3"]=="q3rep1")
            {
                $not++ ;
            }
            if ($_POST["question4"]=="q4rep1")
            {
                $not++ ;
            }
            if ($_POST["question5"]=="q5rep1")
            {
                $not++ ;
            }
                        $req=$bdd->prepare('UPDATE etudiants SET note_java_niv2=:Note WHERE nom=:Nom AND numero=:num ');
            $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));

         }
         ?>
        
        
          
</body>
</html>