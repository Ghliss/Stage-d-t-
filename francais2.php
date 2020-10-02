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

            1.Trouvez l’intrus dans chaque série :</br>
             <input type="radio" name="question1" value="q1rep1" >rouble</br>
             <input type="radio" name="question1" value="q1rep2" >rubis</br>
             <input type="radio" name="question1" value="q1rep3" >euros</br></br>

             2.Acétique se dit :</br>
             <input type="radio" name="question2" value="q2rep1"  >d’une personne qui mène une vie austère</br>
             <input type="radio" name="question2" value="q2rep2" >d’une personne qui mène une vie austères</br>
             <input type="radio" name="question2" value="q2rep3" >d’un acide </br></br>
             

             3.Abattement - Diminution. Ces mots sont-ils synonymes ?</br>
             <input type="radio" name="question3" value="q3rep1" >faux</br>
             <input type="radio" name="question3" value="q3rep2" >vrai</br></br>
             

             4.Trouvez la bonne analogie verbale:Laine est à ………………… ce que lait est à ………</br>
             <input type="radio" name="question4" value="q4rep1" >brebis/veau</br>
             <input type="radio" name="question4" value="q4rep2" >berger/manger</br>
             <input type="radio" name="question4" value="q4rep3" >mouton/vache</br></br>

            5.Que signifie l’expression « faire fi de quelque chose ?</br>
             <input type="radio" name="question5" value="q5rep1" >ne pas tenir compte de quelque chose</br>
             <input type="radio" name="question5" value="q5rep2">offrir quelque chose</br></br></br>
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

    if($_POST["question1"]=="q1rep2")
    {
        $not++ ;
    }
    if($_POST["question2"]=="q2rep3")
    {
        $not++ ;
    }
    if($_POST["question3"]=="q3rep2")
    {
        $not++ ;
    }
    if($_POST["question4"]=="q4rep3")
    {
        $not++ ;
    }
    if($_POST["question5"]=="q5rep1")
    {
        $not++ ;
    }
    
    $req=$bdd->prepare('UPDATE etudiants SET note_francais_niv2=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));} 

       
?>


</body>
</html>