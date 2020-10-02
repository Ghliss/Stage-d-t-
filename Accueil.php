<doctype html>
<html><head>
<meta charset="iso-8859-1"/>
<title>Acceuil</title>
<script language=javascript>
envoyer()
{var a;
a=new XMLHttpRequest();
a.open("GET","Form.php?nm",false)
a.send(null);
}
</script>
<link rel="stylesheet" type="text/css" href=".field.css">
 </head>
<body><center>
<img  src="ENSI.JFIF" align="center" width="400px" height="400px" >
<table ><tr><td><form action="enseig.php">
   <br><br> 
 <h1 style="color:#4c98af;" style="text-align:center" >&nbsp;<u>QCM de l'ENSI pour l'année universiatires 2019/2020:</h1></center></td></tr>
<tr><td ><input type=submit class="button" value=Enseignant />
</form></td><td>
<form action="Form.php">
<input type=submit class="button" value=Etudiant  />
</form></td></tr></table>
</body></html>