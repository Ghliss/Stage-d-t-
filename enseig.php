<!DOCTYPE html>
<html>
<head>
	<title>enseignant</title>
      <script language="javascript">
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
           return true;  
                                  
    }
     function validation_mdp (formulaire)
  {
     if (formulaire.mdp.value=="")
     {
      alert("saisir votre mot de passe") ;
      return false ;
     }
     return true ;
   }
   function validation(formulaire)
   {
    return(validation_email(formulaire) && validation_mdp(formulaire)) ;
   }


</script>
   
</head>
<body>
	<center><form name="formulaire" action="connexion.php" method="post" onsubmit="javascript: return validation(this);">
		    <table  style="height:200px;width:500px">
            <tr><td>
            <img  src="ensi.jpg" align="center" width="500px" height="450px" >
            <fieldset  style="height:300px;width:500px" align="center">
            <legend><h2>Se connecter en tant qu'enseignant:</h2></legend>
            <table>
             <tr><td ><label for=adresse><h3>Saisissez votre adresse mail (<img src="star.png" width="8px" height="8px">):</h3> </label></td>
         	<td><input type="text" name="adresse" id="adresse" ></td></tr>
	        <tr colspan=2>
            <td> </td></td>
            <tr>
            <br><br>
            <td><label for=pass1><h3>Saisissez votre mot de passe  (<img src="star.png" width="8px" height="8px">):</h3> </label></td>
	        <td><input type="password" name="mdp" id="mdp" ></td>
	        </tr>
            </table>
            <br><br>
	        <input type="submit" name="Connecter" value="Connecter"  >
	        <input type="reset" name="annuler" value="Annuler"></fieldset>
            </form></center>
<?php
include "connexion.php";
?>

</body>
</html>