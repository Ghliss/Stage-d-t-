<?php
try
           {
         $bdd = new PDO('mysql:host=localhost;dbname=enseignants;charset=utf8','root','');
            }
        catch(Exception $e)
           {
        die('Erreur : '.$e->getMessage());

            }
            $msg="false" ;
if(isset($_POST["Connecter"]))
{
           $rep=$bdd->query('SELECT * FROM enseignants') ;
           while($entree=$rep->fetch())
           {
            if(  ($entree['Adresse']==$_POST['adresse']) && ($entree['Motdepasse']==$_POST['mdp'])    )
            {
              $msg="true" ;
              include "resqcm.php" ;
            }

           }
      if($msg=="false")
      {
        echo "<center><h1>verifier vos coordonnées</h1></center> " ;
        echo" <style type=\"text/css\">a{ color:#DC143C;}</style>" ;
        echo"<center><a href=\"enseig.php?;\">Retour</a></center>";
      }
           

}
?>