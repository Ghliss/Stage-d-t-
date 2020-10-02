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
  <h3><a href="page2.php"><=Acceuil</a></h3>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" >
    
    <div><h1 align="center">Niveau1</h1>
    <h5>(5 pts)</h5>
    1.Comment récupérer la variable "nom1" transmise par un formulaire ?</br>
    <input type="radio" name="question1" value="q1rep1" id="1choix1">$GET['nom1']</br>
    <input type="radio" name="question1" value="q1rep2" id="1choix2">$_POST['nom1']</br>
    <input type="radio" name="question1" value="q1rep3" id="1choix3">$POST['nom1']</br></br>
    2.Comment créer une session qui permettra d'utiliser des variables de session ?</br>
    <input type="radio" name="question2" value="q2rep1" id="2choix1">var_session()</br>
    <input type="radio" name="question2" value="q2rep2" id="2choix2">session_start()</br>
    <input type="radio" name="question2" value="q2rep3" id="2choix3">init_session()</br></br>
    3.A quoi sert la fonction ob_start() ?</br>
    <input type="radio" name="question3" value="q3rep1" id="3choix1">a stocker temporairement les données dans un tampon plutôt qu'à l'écran</br>
    <input type="radio" name="question3" value="q3rep2" id="3choix2">cette fonction n'existe pas en PHP</br>
    <input type="radio" name="question3" value="q3rep3" id="3choix3">à activer une session ou des objets tels que les cookies</br></br>
    4.Quel champ du header html permet d'identifier le navigateur utilisé ?</br>
    <input type="radio" name="question4" value="q4rep1" id="4choix1">"Browser"</br>
    <input type="radio" name="question4" value="q4rep2" id="4choix2">"User-Agent"</br>
    <input type="radio" name="question4" value="q4rep3" id="4choix3">"Connection"</br></br>
    5.Que vaut CONST_PI à deux décimales près ?</br>
    <input type="radio" name="question5" value="q5rep1" id="5choix1">3,14</br>
    <input type="radio" name="question5" value="q5rep2" id="5choix2">cette constante n'existe pas en PHP

</br>
    <input type="radio" name="question5" value="q5rep3" id="5choix3">3,15</br></br></br>


    <center><input type="submit" name="envoyer" value="envoyer" ></center></div>

    </form> 

      
<?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"])&& $_POST["question1"]=="q1rep2"  && $_POST["question2"]=="q2rep2" && $_POST["question3"]=="q3rep1" && $_POST["question4"]=="q4rep2" && $_POST["question5"]=="q5rep2" )
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='php22.php';" ></center> 
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