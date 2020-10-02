<?php
session_start();
?>
<html>
<head>
<meta charset="iso-8859-1"/>
<title>Inscription au QCM </title>
<style type="text/css">
    a
    {
        color:red;
    }
</style>

<script language="javascript">


  function validation_nom (formulaire)
  {
     if (formulaire.nom.value=="")
     {
      alert("saisir votre nom") ;
      return false ;
     }
     return true ;
   }
   function validation_prenom (formulaire)
  {
     if (formulaire.prenom.value=="")
     {
      alert("saisir votre prénom") ;
      return false ;
     }
     return true ;
   }
   function validation_numero (formulaire)
  {
     if (formulaire.num.value=="")
     {
      alert("saisir votre numéro") ;
      return false ;
     }
     return true ;
   }
   function validation_adresse (formulaire)
  {
     if (formulaire.adresse.value=="")
     {
      alert("saisir votre adresse") ;
      return false ;
     }
     return true ;
   }
   function validation_moyenne (formulaire)
  {
     if (formulaire.moyenne.value=="")
     {
      alert("saisir votre moyenne") ;
      return false ;
     }
     return true ;
   }
    function validation_classe (formulaire)
  {
     for(var i=0;i<formulaire.classe.length;i++)
     {
      if( (formulaire.classe[i].selected) && (formulaire.classe[i].value!="") )
      {
        return true ;
      }
     }
     alert("saisir votre classe") ;
     return false ;
  }
  function validation_email (formulaire)
  {
     if(formulaire.adresse.value=="")
        {
                       alert("Vous devez saisir une adresse mail valide, ce champ est obligatoire !");
                       return false;
        }
           aux1=formulaire.adresse.value.lastIndexOf("@");
           login=formulaire.adresse.value.substring(0,aux1);
           aux2=formulaire.adresse.value.lastIndexOf(".");
           extension=formulaire.adresse.value.substring(aux2+1,formulaire.adresse.length);
           domaine=formulaire.adresse.value.substring(aux1+1,aux2);
          if(login.length<=2)
            {
              alert("Ceci n'est pas une adresse mail valide !");
              return false;
           }
           if(domaine.length<=1)
             {
               alert("Ceci n'est pas une adresse mail valide !");
               return false;
             }
           if((extension.length<2)||(extension.length>3))
             {
               alert("Ceci n'est pas une adresse mail valide !");
              return false;
             }
           alert("c'est une adresse valide")  ;
           return true;  
                                  
    }
    function validation(formulaire)
    {
      return(validation_nom(formulaire) && validation_prenom(formulaire)&& validation_numero(formulaire)&&  validation_adresse(formulaire)&& validation_moyenne(formulaire)&& validation_classe(formulaire) ) ;
    }

</script>
</head>
<body>
<img  src="ensi.jpg" align="left" width="600px" height="600px" > 
<center> 
</br> </br>
<?php
if (isset($_POST["Envoyer"])&& isset($_POST["nom"])&& isset($_POST["prenom"]) && isset($_POST["adresse"]) && isset($_POST["classe"]) && isset($_POST["num"]) )
{?>

  <h3> <a href="acceuil.php">cliquez ici pour passer le qcm</a></h3>
    <?php } ?>
<h1>Questionnaire à choix multiples </br> pour l'ENSI</h1>
 <h3>Année universitaire 2019/2020</h3>
</br> </br>
       
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" name="formulaire" onsubmit="javascript: return validation(this);">
<table>
<tr><td>
<fieldset style="width:0px">
<legend><h3>Informations sur l'etudiant:</h3></legend>
<table>
<tr>
<td><label for=nom>Saisissez votre Nom(<img src="star.png" width="10px" height="10px">): </label></td>
<td><input type="text" name="nom" id="nom" size="20" /></td>
</tr>
<tr>
<td><label for="nom">Saisissez votre Prénom (<img src="star.png" width="10px" height="10px">): </label></td>
<td><input type=text name=prenom id=prenom size=20 /></td>
</tr>
<tr>
<td><label for="nom">Saisissez votre numéro de téléphone(<img src="star.png" width="10px" height="10px">): </label></td>
<td><input type="tex"t name="num" id="num" size="20" /></td>
</tr>
<tr>
<td><label for=adresse>Saisissez votre adresse mail (<img src="star.png" width="10px" height="10px">): </label></td>
<td><input type="text" name="adresse" id="adresse" size="40" /></td>
</tr>
<tr colspan=2>
<td align=center><input type="button" value="Vérifier la validité de l'adresse mail" onclick="validation_email(formulaire);"
/> </td>
</tr>
</table>
</fieldset></td></tr>
<tr><td>
<fieldset style="width:3=570px">
<legend><h4>Choix de niveaux et informations sur la dernière année:</h4> </legend>
<table>
<tr>
<td><label for="pass1">Saisissez votre moyenne : </label></td>
<td><input type="text" name="moyenne" id="moy" size="20"  /> </td>
</tr>
<tr>
<td><label for="pass2">Choisissez votre classe: </label></td>
<td><select name="classe" id="clas">
    <option value="">--Veuillez choisir votre classe--</option>
    <option value="II1A">II1A</option>
    <option value="II1B">II1B</option>
    <option value="II1C">II1C</option>
    <option value="II1D">II1D</option>
    <option value="II1E">II1E</option>
    <option value="II1F">II1F</option>
    <option value="II2A">II2A</option>
    <option value="II2B">II2B</option>
    <option value="II2C">II2C</option>
    <option value="II2D">II2D</option>
    <option value="II2E">II2E</option>
    <option value="II2F">II2F</option>

</select>
</td>
</tr>
<tr colspan=2>
</tr></td>
</table>
</fieldset>
</br> 
</br>
<center>
<input type="submit" name="Envoyer" value="Envoyer"   />
<input type="reset" value="Annuler" /></center>
</form>
 
         
  <?php
 

 try
           {
         $bdd = new PDO('mysql:host=localhost;dbname=etudiants;charset=utf8','root','');
            }
        catch(Exception $e)
           {
        die('Erreur : '.$e->getMessage());
            }
    
      if(isset($_POST["Envoyer"]))
      {
        $_SESSION['nom']=$_POST['nom'] ;
        $_SESSION['prenom']=$_POST['prenom'] ;
        $_SESSION['numero']=$_POST['num'] ;
        $_SESSION['adresse']=$_POST['adresse'] ;
        $_SESSION['classe']=$_POST['classe'] ;
       
        $req=$bdd->prepare('INSERT INTO etudiants (nom,prenom,numero,adressMail,moyenne,classe) VALUES
       (:n, :p, :nu, :add, :moy, :clas)') ;
        $req->execute(array('n'=>$_POST['nom'],'p'=>$_POST['prenom'],'nu'=>$_POST['num'],'add'=>$_POST['adresse'],'moy'=>$_POST['moyenne'],'clas'=>$_POST['classe'])) ;
        
        

        
      }


      ?>

</body>
</html>