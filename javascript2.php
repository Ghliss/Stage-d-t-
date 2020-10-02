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
		<form action="<?php echo $_SERVER['PHP_SELF']?> " method="POST">
            
           
        	
 <div><h1 align="center">Niveau 2</h1>
    <h5>(5 pts)</h5>
            1.Math.max(Math.SQRT2 , Math.PI , 4) retourne :</br>
             <input type="radio" name="question1" value="q1rep1" >4</br>
             <input type="radio" name="question1" value="q1rep2">PI</br>
             <input type="radio" name="question1" value="q1rep3" >une erreur</br></br>

            2.Que signifie NaN ?</br>
             <input type="radio" name="question2" value="q2rep1"  >Not at NULL</br>
             <input type="radio" name="question2" value="q2rep2" >Not a Number</br>
             <input type="radio" name="question2" value="q2rep3">Not area Negative</br></br>

            3.Une variable globale déclarée dans un script peut-etre utilisée :</br>
             <input type="radio" name="question3" value="q3rep1" >dans tous les scripts du document HTML</br>
             <input type="radio" name="question3" value="q3rep2" >dans ce script uniquement</br>
             <input type="radio" name="question3" value="q3rep3" >dans ce script et toutes ses fonctions uniquement<br></br>

            4.Dans la hiérarchie des objets, quel est le parent direct de l'objet "checkbox" ?</br>
             <input type="radio" name="question4" value="q4rep1" >form</br>
             <input type="radio" name="question4" value="q4rep2" >document</br>
             <input type="radio" name="question4" value="q4rep3" >body</br></br>

            5.Quel mot clé sert à ajouter des propriétés ou méthodes à un objet existant ?</br>
             <input type="radio" name="question5" value="q5rep1" >this</br>
             <input type="radio" name="question5" value="q5rep2" >create</br>
             <input type="radio" name="question5" value="q5rep3" >prototype</br></br></br>
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
    if($_POST["question5"]=="q5rep3")
    {
        $not++ ;
    }
    
    $req=$bdd->prepare('UPDATE etudiants SET note_javascript_niv2=:Note WHERE nom=:Nom AND numero=:num ');
    $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
} 

       
?>


          
</body>
</html>