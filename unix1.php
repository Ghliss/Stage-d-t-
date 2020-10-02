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
           
 <div><h1 align="center">Niveau1</h1>
    <h5>(5 pts)</h5>
    1.Quelle commande permet de connaître le n° de l'utilisateur connecté ?</br>
             <input type="radio" name="question1" value="q1rep1" >id</br>
             <input type="radio" name="question1" value="q1rep2" >echo usr</br>
             <input type="radio" name="question1" value="q1rep3" >uname</br></br>

         2.A quoi sert la commande "du" ?</br>
             <input type="radio" name="question2" value="q2rep1"  >a créer un dump</br>
             <input type="radio" name="question2" value="q2rep2" >à connaître l'espace disque occupé par les fichiers</br>
             <input type="radio" name="question2" value="q2rep3">c'est un éditeur</br></br>

        3.La commande strings s'utilise pour:</br>
             <input type="radio" name="question3" value="q3rep1" >convertir un nombre en texte</br>
             <input type="radio" name="question3" value="q3rep2" >indiquer le type d'une variable<title\></br>
             <input type="radio" name="question3" value="q3rep3" >chercher du texte dans un fichier binaire</br></br>

        4.kill -9 permet l'arrêt :</br>
             <input type="radio" name="question4" value="q4rep1" >immédiat du processus</br>
             <input type="radio" name="question4" value="q4rep2">contrôlé du processus</br>
             <input type="radio" name="question4" value="q4rep3" >de toute l'arborescence du processus</br></br>

         5.Quelle variable d'environnement du Shell contient le nom d'utilisateur ?</br>
             <input type="radio" name="question5" value="q5rep1" >logname</br>
             <input type="radio" name="question5" value="q5rep2" >usr</br>
             <input type="radio" name="question5" value="q5rep3" >username</br></br></br>

         <center><input type="submit" name="envoyer" value="envoyer"></center>
              
         </div></form>
         <?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && $_POST["question1"]=="q1rep1"  && $_POST["question2"]=="q2rep2" && $_POST["question3"]=="q3rep3" && $_POST["question4"]=="q4rep1" && $_POST["question5"]=="q5rep1")
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='unix2.php';" ></center> 
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
    if($_POST["question3"]=="q3rep3")
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
    $req=$bdd->prepare('UPDATE etudiants SET note_unix_niv1=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
} 

       
?>



          
</body>
</html>