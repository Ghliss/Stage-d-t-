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
		<form action="<?php echo $_SERVER['PHP_SELF']?> " method="POST">
         
        	
 <div><h1 align="center">Niveau 2</h1>
    <h5>(5 pts)</h5>
            1.Dans la hiérarchie des objets, quel est le parent direct de l'objet "form" ?</br>
             <input type="radio" name="question1" value="q1rep1" >document</br>
             <input type="radio" name="question1" value="q1rep2" >window</br>
             <input type="radio" name="question1" value="q1rep3" >location</br></br>

            2.Que renvoie ch1.slice(-3, -1) si ch1="ABCDE" ?</br>
             <input type="radio" name="question2" value="q2rep1"  >CD</br>
             <input type="radio" name="question2" value="q2rep2" >AB</br>
             <input type="radio" name="question2" value="q2rep3">BC</br></br>

            3.Que fais T1.push(3) sur le tableau T1 ?</br>
             <input type="radio" name="question3" value="q3rep1">ajoute l'élément 3</br>
             <input type="radio" name="question3" value="q3rep2" >décale tous les indices de 3 positions</br>
             <input type="radio" name="question3" value="q3rep3" >retire les 3 derniers éléments<br></br>

            4.Comment connaître le nombre d'éléments d'un formulaire ?</br>
             <input type="radio" name="question4" value="q4rep1" >document.form1.elements.length</br>
             <input type="radio" name="question4" value="q4rep2" >document.form1.length</br>
             <input type="radio" name="question4" value="q4rep3" >document.form1.elements.count</br></br>

            5.Que contient document.images[1]  ?</br>
             <input type="radio" name="question5" value="q5rep1" >la première image du document</br>
             <input type="radio" name="question5" value="q5rep2">les images de l'en-tête du document</br>
             <input type="radio" name="question5" value="q5rep3">la deuxième image du document</br></br></br>
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