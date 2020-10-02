<?php
session_start();
 

       if(isset($_POST["deconnecter"]))
       {
        session_unset();
        session_destroy();
        include "accueil.php";

       }
       ?>