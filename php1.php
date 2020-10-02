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
  <h3><a href="page1.php"><=Acceuil</a></h3>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" >
    <div><h1 align="center">Niveau1</h1>
    <h5>(5 pts)</h5>
    1.Quelle fonction permet d'écrire dans un fichier ?</br>
    <input type="radio" name="question1" value="q1rep1" >write_file()</br>
    <input type="radio" name="question1" value="q1rep2" >fwrite()</br>
    <input type="radio" name="question1" value="q1rep3" >write</br></br>
    2.Comment appelle t-on le fait d'utiliser une "classe" pour créer un "objet" ?</br>
    <input type="radio" name="question2" value="q2rep1" >implémentation</br>
    <input type="radio" name="question2" value="q2rep2" >instanciation</br>
    <input type="radio" name="question2" value="q2rep3" >construction</br></br>
    3.Comment obtenir l'identifiant unique d'une session ?</br>
    <input type="radio" name="question3" value="q3rep1" >session_id()</br>
    <input type="radio" name="question3" value="q3rep2" >$_SESSION["ID"]</br>
    <input type="radio" name="question3" value="q3rep3" >get_session()</br></br>
    4.Après $n = (int) 2.6 quelle est la valeur de $n ?</br>
    <input type="radio" name="question4" value="q4rep1" >3</br>
    <input type="radio" name="question4" value="q4rep2" >2</br>
    <input type="radio" name="question4" value="q4rep3" >26</br></br>
    5.abs(-6.41) retourne</br>
    <input type="radio" name="question5" value="q5rep1" >une erreur</br>
    <input type="radio" name="question5" value="q5rep2" >6.41</br>
    <input type="radio" name="question5" value="q5rep3" >6</br>


    <center><input type="submit" name="envoyer" value="envoyer" >
    </center></div>
    

    </form> 

      
<?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && $_POST["question1"]=="q1rep2"  && $_POST["question2"]=="q2rep2" && $_POST["question3"]=="q3rep1" && $_POST["question4"]=="q4rep2" && $_POST["question5"]=="q5rep2")
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='php2.php';" ></center> 
    <?php } ?>
 

 <?php
   session_start() ;

   
         try
           {
         $bdd = new PDO('mysql:host=localhost;dbname=etudiants;charset=utf8','root','');
            }
        catch(Exception $e)
           {
        die('Erreur : '.$e->getMessage());
            }
$not=0 ;
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"]) )
{
  if ($_POST["question1"]=="q1rep2")
  {
       $not++ ;
  }
  if ($_POST["question2"]=="q2rep2")
  {
    $not++ ;
  }
  if ($_POST["question3"]=="q3rep1")
  {
    $not++ ;
  }
  if($_POST["question4"]=="q4rep2")
  {
    $not++ ;
  }
  if ($_POST["question5"]=="q5rep2")
  {
    $not++ ;
  }
 
  $req=$bdd->prepare('UPDATE etudiants SET note_php_niv1=:Note WHERE nom=:Nom AND numero=:num ');
    $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
    
  
  
}



  ?>

   

</body>
</html>