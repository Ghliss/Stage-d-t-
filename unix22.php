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
	<h3><a href="page2.php"><=Accueil</a></h3>
		<form action="<?php echo $_SERVER['PHP_SELF']?> " method="POST">
        	
 <div><h1 align="center">Niveau 2</h1>
    <h5>(5 pts)</h5>
    1.Comment lister les utilisateurs connectés ? ?</br>
             <input type="radio" name="question1" value="q1rep1">who</br>
             <input type="radio" name="question1" value="q1rep2">users</br>
             <input type="radio" name="question1" value="q1rep3">ps -u</br></br>

         2.Quelle variable indique l'emplacement et le nom du fichier d'historique des commandes ?</br>
             <input type="radio" name="question2" value="q2rep1" >$HISTFILE</br>
             <input type="radio" name="question2" value="q2rep2" >$COMMANDS</br>
             <input type="radio" name="question2" value="q2rep3">$HISTORY</br></br>

          3.Comment décrypter le fichier fich2 ?</br>
             <input type="radio" name="question3" value="q3rep1" >crypt -d fich2</br>
             <input type="radio" name="question3" value="q3rep2" >uncrypt fich2</br>
             <input type="radio" name="question3" value="q3rep3" >crypt < fich2<br></br>

         4.Avec quelle commande peut-on lister les processus ?</br>
             <input type="radio" name="question4" value="q4rep1">ps</br>
             <input type="radio" name="question4" value="q4rep2">ls</br>
             <input type="radio" name="question4" value="q4rep3">pid</br></br>

         5.A quoi sert la commande head  ?</br>
             <input type="radio" name="question5" value="q5rep1" id="5choix1">à sélectionner les octets de poids fort</br>
             <input type="radio" name="question5" value="q5rep2" id="5choix2">à afficher les premières lignes d'un fichier</br>
             <input type="radio" name="question5" value="q5rep3" id="5choix3">à lire un fichier en fifo</br></br></br>
            <center> <input type="submit" name="envoyer" value="envoyer"></center>

              
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