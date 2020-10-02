
<!DOCTYPE html>
<html>
<head>
    <title></title>
    
    <style type="text/css">
    p
    {
        color:#808080 ;



    }
    #qcm
    {
       
        margin-top: 100px;
        margin-left: 200px;
        margin-right: 200px ;
        padding-bottom: 100px ;
        border: 4px inset ;
        background-color:#995B5B;
        color:#F0F0F0 ; 

        
    }
    
    body
    {
        background-color:white; ;

    }
   
   
    img
    {
        margin-top: 20px ;
        margin-left:10px;
        border-radius: 10px ;
    }
    input[type=submit]
    {
        border-radius: 10px ;
        width:150px;
    }
   a
    {
        color:#995B5B ;
        
    }

</style>
</head>
<body>
     <?php
    include("resqcm3.php") ;
    ?>
    <a href="resqcm.php">Retour</a>
    <form method="post" action="resqcm3.php"> <div id="qcm">
        <img src="image.jpg" width="100" height="90" alt="qcm">
        <h1 id="titre" align="center">Resultat QCM 1<sup>er</sup>classe</h1><center>
        <input type="submit" name="envoyer" value="php">
        <input type="submit" name="envoyer" value="html/css">
        <input type="submit" name="envoyer" value="java">
        <input type="submit" name="envoyer" value="javascript">
        <input type="submit" name="envoyer" value="unix/linux">
        <input type="submit" name="envoyer" value="anglais">
        <input type="submit" name="envoyer" value="francais">
    </center></div>
    
    </form>
    

</body>
</html>