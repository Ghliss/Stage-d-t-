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
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            
 <div><h1 align="center">Niveau1</h1>
    <h5>(5 pts)</h5>
            1...did you do that for?</br>
             <input type="radio" name="question1" value="q1rep1" >what</br>
             <input type="radio" name="question1" value="q1rep2" >how</br>
             <input type="radio" name="question1" value="q1rep3" >which</br></br>

            2.You have to go on...difficulties you meet</br>
             <input type="radio" name="question2" value="q2rep1"  >whatever</br>
             <input type="radio" name="question2" value="q2rep2" >however</br>
              <input type="radio" name="question2" value="q2rep3" >whichever</br></br>
             

            3.I was thirsty and I poured...a full glass of milk</br>
             <input type="radio" name="question3" value="q3rep1" >to myself</br>
             <input type="radio" name="question3" value="q3rep2" >myself</br>
             <input type="radio" name="question3" value="q3rep3" >me</br></br>
             

            4.This is the room where I work, and this one is..</br>
             <input type="radio" name="question4" value="q4rep1" >of our children</br>
             <input type="radio" name="question4" value="q4rep2" >our children's</br>
             <input type="radio" name="question4" value="q4rep3" > to our children's </br></br>

            5.John went there..</br>
             <input type="radio" name="question5" value="q5rep1" >to himself</br>
             <input type="radio" name="question5" value="q5rep2" >by himslef</br>
             <input type="radio" name="question5" value="q5rep3" >to him</br></br></br>
             <center><input type="submit" name="envoyer" value="envoyer"></center>

         
              
         </div></form>
         

         <?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"])&& $_POST["question1"]=="q1rep1"  && $_POST["question2"]=="q2rep1" && $_POST["question3"]=="q3rep2" && $_POST["question4"]=="q4rep2" && $_POST["question5"]=="q5rep2" )
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='anglais2.php';" ></center> 
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
    if($_POST["question5"]=="q5rep2")
    {
        $not++ ;
    }
        $req=$bdd->prepare('UPDATE etudiants SET note_anglais_niv1=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
} 

       
?>


          
</body>
</html>