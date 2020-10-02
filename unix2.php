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
		<form action="<?php echo $_SERVER['PHP_SELF']?> " method="POST">
        	
 <div><h1 align="center">Niveau 2</h1>
    <h5>(5 pts)</h5>
    1.Comment lister les processus de l'utilisateur "user1" ?</br>
             <input type="radio" name="question1" value="q1rep1">ps -u user1</br>
             <input type="radio" name="question1" value="q1rep2">ps user1</br>
             <input type="radio" name="question1" value="q1rep3">ps -f user1</br></br>

         2.Si les permissions -rwxr-xr-- sont accordées au groupe gp1 pour un fichier celui-ci a les droits</br>
             <input type="radio" name="question2" value="q2rep1" >de lecture et d'exécution</br>
             <input type="radio" name="question2" value="q2rep2" >de lecture, écriture et exécution</br>
             <input type="radio" name="question2" value="q2rep3">de lecture uniquement</br></br>

          3.Comment se nomme la racine des dossiers ?</br>
             <input type="radio" name="question3" value="q3rep1" >root</br>
             <input type="radio" name="question3" value="q3rep2" >:</br>
             <input type="radio" name="question3" value="q3rep3" >/<br></br>

         4.Dans quel fichier sont stockés les informations sur les groupes ?</br>
             <input type="radio" name="question4" value="q4rep1">/etc/group</br>
             <input type="radio" name="question4" value="q4rep2">/usr/group</br>
             <input type="radio" name="question4" value="q4rep3">/bin/group</br></br>

         5.Comment changer les groupes auxquels un fichier appartient ?</br>
             <input type="radio" name="question5" value="q5rep1" id="5choix1">mchgroup</br>
             <input type="radio" name="question5" value="q5rep2" id="5choix2">chgrp</br>
             <input type="radio" name="question5" value="q5rep3" id="5choix3">chmod</br></br></br>
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
if(isset($_POST["envoyer"]) && isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]))
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
    if($_POST["question5"]=="q5rep2")
    {
        $not++ ;
    }
    
    $req=$bdd->prepare('UPDATE etudiants SET note_unix_niv2=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
} 

       
?>

          
</body>
</html>