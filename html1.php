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
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
   
    <div><h1 align="center">Niveau1</h1>
     <h5>(5 pts)</h5>
    1.& indique</br>
    <input type="radio" name="question1" value="q1rep1">une concaténation</br>
    <input type="radio" name="question1" value="q1rep2">des caractères spéciaux</br>
    <input type="radio" name="question1" value="q1rep3">un lien interne au document</br></br>

    2.Que peut-on en déduire si l'on voit une liste de fichiers et dossiers après avoir entré l'url d'un site dans son navigateur ?</br>
    <input type="radio" name="question2" value="q2rep1">le serveur web est arrêté</br>
    <input type="radio" name="question2" value="q2rep2">les pages index.html ou index.htm sont absentes</br>
    <input type="radio" name="question2" value="q2rep3">la page htaccess est absente</br></br>
    3.Quelle balise utiliser pour regrouper les champs d'un formulaire en les entourant d'une bordure ?</br>

    <input type="radio" name="question3" value="q3rep1">form</br>
    <input type="radio" name="question3" value="q3rep2">fieldset</br>
    <input type="radio" name="question3" value="q3rep3">border</br></br>
    4.Pour mettre un exposant (comme dans m³) j'utilise</br>

    <input type="radio" name="question4" value="q4rep1">^</br>
    <input type="radio" name="question4" value="q4rep2">sup</br>
    <input type="radio" name="question4" value="q4rep3">exp</br></br>

    5.La règle de style "p.ville { .........} " s'applique :</br>
    <input type="radio" name="question5" value="q5rep1">aux paragraphes p class="ville"...</br>
    <input type="radio" name="question5" value="q5rep2">aux paragraphes p id="ville"...</br>
    <input type="radio" name="question5" value="q5rep3">aux paragraphes p value="ville"...</br></br></br>
    <center><input type="submit" name="envoyer" value="envoyer"></center>
</div>
</form>

      
<?php
if (isset($_POST["envoyer"])&& isset($_POST["question2"])&& isset($_POST["question3"]) && isset($_POST["question1"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && $_POST["question1"]=="q1rep2"  && $_POST["question2"]=="q2rep2" && $_POST["question3"]=="q3rep2" && $_POST["question4"]=="q4rep2" && $_POST["question5"]=="q5rep1")
{?>

   <center><input type="submit" name="niveau" value="niveau2" id="btnqq" onclick="window.location.href='html2.php';" ></center> 
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

    if($_POST["question1"]=="q1rep2")
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
    if($_POST["question4"]=="q4rep2")
    {
        $not++ ;
    }
    if($_POST["question5"]=="q5rep1")
    {
        $not++ ;
    }
    
    $req=$bdd->prepare('UPDATE etudiants SET note_html_niv1=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
} 

       
?>




</body>
</html>