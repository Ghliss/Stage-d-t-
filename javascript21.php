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
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            
 <div><h1 align="center">Niveau1</h1>
     <h5>(5 pts)</h5>
             1.alert(!(1&&0)?"VRAI":"FAUX"); affiche?</br>
             <input type="radio" name="question1" value="q1rep1" >VRAI</br>
             <input type="radio" name="question1" value="q1rep2" >FAUX</br>
             <input type="radio" name="question1" value="q1rep3" >une erreur</br></br>

             2.Que retourne Math.min(Math.E , Math.SQRT1_2 , 0.5) ?</br>
             <input type="radio" name="question2" value="q2rep1"  >0.5

</br>
             <input type="radio" name="question2" value="q2rep2" >un erreur</br>
             <input type="radio" name="question2" value="q2rep3" >racine carrée de 0,5

</br></br>

             3.Une variable globale déclarée dans un script peut-etre utilisée ?</br>
             <input type="radio" name="question3" value="q3rep1" >dans ce script et toutes les fonctions déclarées après cette variables </br>
             <input type="radio" name="question3" value="q3rep2" >dans ce script uniquement</br>
             <input type="radio" name="question3" value="q3rep3" >dans tous les scripts du document HTML</br></br>

             4.Le DOM :</br>
             <input type="radio" name="question4" value="q4rep1" >décrit la structure du document HTML ou XML</br>
             <input type="radio" name="question4" value="q4rep2" >est spécifique a JavaScript</br>
             <input type="radio" name="question4" value="q4rep3" >est un moteur de bases de données</br></br>

             5.Quel objet permet au JavaScript de dialoguer avec un serveur web  ?</br>
             <input type="radio" name="question5" value="q5rep1" >http_get_request</br>
             <input type="radio" name="question5" value="q5rep2" >XMLparseRequest</br>
             <input type="radio" name="question5" value="q5rep3" >XMLHttpRequest</br></br></br>
       
        <center> <input type="submit" name="envoyer" value="envoyer" ></center>

              
         </div></form>


         <?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && $_POST["question1"]=="q1rep1"  && $_POST["question2"]=="q2rep2" && $_POST["question3"]=="q3rep3" && $_POST["question4"]=="q4rep1" && $_POST["question5"]=="q5rep3")
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='javascript22.php';" ></center> 
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
    if($_POST["question5"]=="q5rep3")
    {
        $not++ ;
    }
    
    $req=$bdd->prepare('UPDATE etudiants SET note_javascript_niv1=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
} 

       
?>


          
</body>
</html>