<!DOCTYPE html>
<html>
<head>
    <title>qcm</title>
</head>
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
    .bouton a
    {

        text-decoration: none ;
        color: black ;
        text-align: center ;
        display: block ;
        width: 150px;
        line-height: 50px ;
        vertical-align: middle; 
        background-color:white  ;
        border-radius: 10px ;
        
        float: left ;
        margin:2px;
        
            
        

    }
    body
    {
        background-color:white; ;

    }
    #btn
    {
        margin-left: 300px ;
        margin-bottom: 100px ;

    } 
    a:hover
    {
        color:#995B5B  ;
    }
    img
    {
        margin-top: 20px ;
        margin-left:10px;
        border-radius: 10px ;
    }
     input[type=submit]:focus
    {
        box-shadow: 4px 4px 4px ;

        
    }
    input
    {
        background-color: #995B5B  ;
        color:white;
    }


</style>
<body>
    
         <div align="right"><form action="deconnexion.php " method="post"> <input type="submit" name="deconnecter" value="Deconnecter"></form></div>
      <div id="qcm">
        <img src="image.jpg" width="100" height="90" alt="qcm">
        <h1 id="titre" align="center">Questionnaire a choix multiple</h1>
        
         <div class="bouton">
            <p>
                <div id="btn"><a href="page1.php">1<sup>ere</sup> année</a> <a href="page2.php">2<sup>eme</sup> année</a> 
                </div>

            </p>
        </div>

        
       </div>
       <?php
       include("deconnexion.php") ;
       ?>
</body>
</html>