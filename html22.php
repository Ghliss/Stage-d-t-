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
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
     <div><h1 align="center">Niveau 2</h1>
    <h5>(5 pts)</h5>
    1.<DOCTYPE....> indique ?</br>
    <input type="radio" name="question1" value="q1rep1">la version du HTML utilisée</br>
    <input type="radio" name="question1" value="q1rep2">les paramètres régionaux et langage du document</br>
    <input type="radio" name="question1" value="q1rep3">le type de document

</br></br>

    2.En CSS, rgb(255,255,255) est la couleur?</br>
    <input type="radio" name="question2" value="q2rep1">blanche</br>
    <input type="radio" name="question2" value="q2rep2">transparente</br>
    <input type="radio" name="question2" value="q2rep3">noire</br></br>

    3.Quelle propriété est utilisée pour définir un interligne en CSS ?</br>
    <input type="radio" name="question3" value="q3rep1">padding</br>
    <input type="radio" name="question3" value="q3rep2">spacing</br>
    <input type="radio" name="question3" value="q3rep3">line-height</br></br>

    4.Que fait la propriété CSS "white-space:pre" appliquée à un paragraphe ou bloc ?</br>
    <input type="radio" name="question4" value="q4rep1">conserve tous les espaces et retours à la ligne tapés dans le code HTML</br>
    <input type="radio" name="question4" value="q4rep2">fusionne les espaces successifs</br>
    <input type="radio" name="question4" value="q4rep3">supprime les espaces avant un retour à la ligne</br></br>

    5.Quel est la façon recommandée de centrer un bloc horizontalement ?</br>
    <input type="radio" name="question5" value="q5rep1">margin-left: auto; margin-right: auto;</br>
    <input type="radio" name="question5" value="q5rep2">l'attribut align= "center"</br>
    <input type="radio" name="question5" value="q5rep3">position: center;</br></br></br>
    <center><input type="submit" name="envoyer" value="envoyer"></center></div>
</form>

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
if(isset($_POST["envoyer"]) && isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) )
{
    if($_POST["question1"]=="q1rep1")
    {
        $not++ ;
    }
    if($_POST["question2"]=="q2rep1")
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
        $req=$bdd->prepare('UPDATE etudiants SET note_html_niv2=:Note WHERE nom=:Nom AND numero=:num ');
     $req->execute(array('Nom'=>$_SESSION['nom'],'num'=>$_SESSION['numero'],'Note'=>$not));
}
?>


</body>
</html>