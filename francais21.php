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
            1.Accorder les participes passés</br>
             <input type="radio" name="question1" value="q1rep1" >La main qu'il nous a tendue</br>
             <input type="radio" name="question1" value="q1rep2" >La main qu'il nous a tendus</br>
             <input type="radio" name="question1" value="q1rep3" >La main qu'il nous a tendu </br></br>

            2.Quand mettez-vous un « s » à « cent » ?</br>
             <input type="radio" name="question2" value="q2rep1"  >Dix-huit millz huit cent</br>
             <input type="radio" name="question2" value="q2rep2" >Dix-huit mille huit cents</br></br>
             

            3.Difficultés avec les genres ?</br>
             <input type="radio" name="question3" value="q3rep1" >Une tentacule</br>
             <input type="radio" name="question3" value="q3rep2" >Un tentacule</br></br>
             

            4. Les formules de politesse ? Lesquelles d’entre elles sont correctes ?</br>
             <input type="radio" name="question4" value="q4rep1" >Je vous saurais gré </br>
             <input type="radio" name="question4" value="q4rep2" >Veuillez croire a l'assurance de ..</br>
             <input type="radio" name="question4" value="q4rep3" >Je vous serais gré </br></br>

            5.Elle a gagné beaucoup de courses parce qu'elle s'est beaucoup entraînée. » : qu'exprime la subordonnée ?</br>
             <input type="radio" name="question5" value="q5rep1" >La canséquence</br>
             <input type="radio" name="question5" value="q5rep2" >Le but</br>
             <input type="radio" name="question5" value="q5rep3" >le temps</br></br></br>

        <center> <input type="submit" name="envoyer" value="envoyer" ></center>
              
         </div></form>
        
        <?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && $_POST["question1"]=="q1rep1"  && $_POST["question2"]=="q2rep2" && $_POST["question3"]=="q3rep2" && $_POST["question4"]=="q4rep1" && $_POST["question5"]=="q5rep1")
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='francais22.php';" ></center> 
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
    if($_POST["question3"]=="q3rep2")
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
    
    $req=$bdd->prepare('UPDATE etudiants SET note_francais_niv1=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
} 

       
?>
          
</body>
</html>