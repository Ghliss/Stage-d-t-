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
            1.I know they spoke to...yesterday.</br>
             <input type="radio" name="question1" value="q1rep1" >themselves</br>
             <input type="radio" name="question1" value="q1rep2" >yourself</br>
             <input type="radio" name="question1" value="q1rep3" >each other</br></br>

            2.We received...letters than we expected.</br>
             <input type="radio" name="question2" value="q2rep1"  >fewer</br>
             <input type="radio" name="question2" value="q2rep2" >many</br>
              <input type="radio" name="question2" value="q2rep3" >much</br></br>
             

            3. ...are you going to call the baby?</br>
             <input type="radio" name="question3" value="q3rep1" >which</br>
             <input type="radio" name="question3" value="q3rep2" >what</br>
             <input type="radio" name="question3" value="q3rep3" >who</br></br>
             

            4.They will be back by... month.</br>
             <input type="radio" name="question4" value="q4rep1" >an end of the</br>
             <input type="radio" name="question4" value="q4rep2" >the end of the</br>
             <input type="radio" name="question4" value="q4rep3" >the end of a </br></br>

             
            5.I saw no reason...we should get up early.</br>
             <input type="radio" name="question5" value="q5rep1" >why</br>
             <input type="radio" name="question5" value="q5rep2" >how</br>
             <input type="radio" name="question5" value="q5rep3" >that</br></br></br>
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
        $not++ ;
    }
    
    $req=$bdd->prepare('UPDATE etudiants SET note_anglais_niv2=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
} 

       
?>
          
</body>
</html>