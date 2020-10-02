 <?php
 try
           {
         $bdd = new PDO('mysql:host=localhost;dbname=etudiants;charset=utf8','root','');
            }
        catch(Exception $e)
           {
        die('Erreur : '.$e->getMessage());
            }
            if (isset($_POST["envoyer"]) && $_POST["envoyer"]=="php"){
        $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2A\'  ') ;
        echo"<html><head><style type=\"text/css\">table{margin-left:400px;margin-top:100px;color:#995B5B;}h4{color:black;margin-top:6px;}</style></head></html>" ;
        echo"<table border=\"1\">" ;
    echo"<tr><td colspan=\"5\" align=\"center\"><h4>Resultat qcm php</h4></td></tr>" ;
    echo"<tr><td align=\"center\"><h4>Nom</h4></td><td align=\"center\"><h4>Prenom</h4></td><td align=\"center\"><h4>Classe</h4></td><td align=\"center\"><h4>note_php_niveau1</h4></td><td align=\"center\"><h4>note_php_niveau2</h4></td></tr>" ;

       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_php_niv1']."</td><td>".$entree['note_php_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
      $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2B\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_php_niv1']."</td><td>".$entree['note_php_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2C\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_php_niv1']."</td><td>".$entree['note_php_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2D\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_php_niv1']."</td><td>".$entree['note_php_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2E\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_php_niv1']."</td><td>".$entree['note_php_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2F\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_php_niv1']."</td><td>".$entree['note_php_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
}
  if (isset($_POST["envoyer"]) && $_POST["envoyer"]=="html/css"){
        $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2A\'  ') ;
        echo"<html><head><style type=\"text/css\">table{margin-left:400px;margin-top:100px;color:#995B5B;}h4{color:black;margin-top:6px;}</style></head></html>" ;
        echo"<table border=\"1\">" ;
    echo"<tr><td colspan=\"5\" align=\"center\"><h4>Resultat qcm html/css</h4></td></tr>" ;
    echo"<tr><td align=\"center\"><h4>Nom</h4></td><td align=\"center\"><h4>Prenom</h4></td><td align=\"center\"><h4>Classe</h4></td><td align=\"center\"><h4>note_html/css_niveau1</h4></td><td align=\"center\"><h4>note_html/css_niveau2</h4></td></tr>" ;

       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_html_niv1']."</td><td>".$entree['note_html_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
      $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2B\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_html_niv1']."</td><td>".$entree['note_html_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2C\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_html_niv1']."</td><td>".$entree['note_html_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2D\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_html_niv1']."</td><td>".$entree['note_html_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2E\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_html_niv1']."</td><td>".$entree['note_html_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2F\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_html_niv1']."</td><td>".$entree['note_html_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
}
 if (isset($_POST["envoyer"]) && $_POST["envoyer"]=="java"){
        $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2A\'') ;
        echo"<html><head><style type=\"text/css\">table{margin-left:400px;margin-top:100px;color:#995B5B;}h4{color:black;margin-top:6px;}</style></head></html>" ;
        echo"<table border=\"1\">" ;
    echo"<tr><td colspan=\"5\" align=\"center\"><h4>Resultat qcm java</h4></td></tr>" ;
    echo"<tr><td align=\"center\"><h4>Nom</h4></td><td align=\"center\"><h4>Prenom</h4></td><td align=\"center\"><h4>Classe</h4></td><td align=\"center\"><h4>note_java_niveau1</h4></td><td align=\"center\"><h4>note_java_niveau2</h4></td></tr>" ;

       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_java_niv1']."</td><td>".$entree['note_java_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2B\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_java_niv1']."</td><td>".$entree['note_java_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2C\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_java_niv1']."</td><td>".$entree['note_java_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2D\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_java_niv1']."</td><td>".$entree['note_java_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2E\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_java_niv1']."</td><td>".$entree['note_java_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2F\'  ') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_java_niv1']."</td><td>".$entree['note_java_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
}
if (isset($_POST["envoyer"]) && $_POST["envoyer"]=="javascript"){
        $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2A\'') ;
        echo"<html><head><style type=\"text/css\">table{margin-left:400px;margin-top:100px;color:#995B5B;}h4{color:black;margin-top:6px;}</style></head></html>" ;
        echo"<table border=\"1\">" ;
    echo"<tr><td colspan=\"5\" align=\"center\"><h4>Resultat qcm javascript</h4> </td></tr>" ;
    echo"<tr><td align=\"center\"><h4>Nom</h4></td><td align=\"center\"><h4>Prenom</h4></td><td align=\"center\"><h4>Classe</h4></td><td align=\"center\"><h4>note_javascript_niveau1</h4></td><td align=\"center\"><h4>note_javascript_niveau2</h4></td></tr>" ;
 
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_javascript_niv1']."</td><td>".$entree['note_javascript_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2B\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_javascript_niv1']."</td><td>".$entree['note_javascript_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2C\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_javascript_niv1']."</td><td>".$entree['note_javascript_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2D\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_javascript_niv1']."</td><td>".$entree['note_javascript_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2E\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_javascript_niv1']."</td><td>".$entree['note_javascript_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2F\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_javascript_niv1']."</td><td>".$entree['note_javascript_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;}
    if (isset($_POST["envoyer"]) && $_POST["envoyer"]=="unix/linux"){
        $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2A\'') ;
        echo"<html><head><style type=\"text/css\">table{margin-left:400px;margin-top:100px;color:#995B5B;}h4{color:black;margin-top:6px;}</style></head></html>" ;
        echo"<table border=\"1\">" ;
    echo"<tr><td colspan=\"5\" align=\"center\"><h4>Resultat qcm unix/linux</h4> </td></tr>" ;
    echo"<tr><td align=\"center\"><h4>Nom</h4></td><td align=\"center\"><h4>Prenom</h4></td><td align=\"center\"><h4>Classe</h4></td><td align=\"center\"><h4>note_unix/linux_niveau1</h4></td><td align=\"center\"><h4>note_unix/linux_niveau2</h4></td></tr>" ;
      
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_unix_niv1']."</td><td>".$entree['note_unix_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2B\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_unix_niv1']."</td><td>".$entree['note_unix_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2C\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_unix_niv1']."</td><td>".$entree['note_unix_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2D\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_unix_niv1']."</td><td>".$entree['note_unix_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2E\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_unix_niv1']."</td><td>".$entree['note_unix_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
    $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2F\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_unix_niv1']."</td><td>".$entree['note_unix_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;

}
    if (isset($_POST["envoyer"]) && $_POST["envoyer"]=="anglais"){
        $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2A\'') ;
        echo"<html><head><style type=\"text/css\">table{margin-left:400px;margin-top:100px;color:#995B5B;}h4{color:black;margin-top:6px;}</style></head></html>" ;
        echo"<table border=\"1\">" ;
    echo"<tr><td colspan=\"5\" align=\"center\"><h4>Resultat qcm anglais</h4> </td></tr>" ;
    echo"<tr><td align=\"center\"><h4>Nom</h4></td><td align=\"center\"><h4>Prenom</h4></td><td align=\"center\"><h4>Classe</h4></td><td align=\"center\"><h4>note_anglais_niveau1</h4></td><td align=\"center\"><h4>note_anglais_niveau2</h4></td></tr>" ;
      
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_anglais_niv1']."</td><td>".$entree['note_anglais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2B\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_anglais_niv1']."</td><td>".$entree['note_anglais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2C\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_anglais_niv1']."</td><td>".$entree['note_anglais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2D\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_anglais_niv1']."</td><td>".$entree['note_anglais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2E\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_anglais_niv1']."</td><td>".$entree['note_anglais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
     $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2F\'') ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_anglais_niv1']."</td><td>".$entree['note_anglais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;

}
    if (isset($_POST["envoyer"]) && $_POST["envoyer"]=="francais"){
        $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2A\'' ) ;
        echo"<html><head><style type=\"text/css\">table{margin-left:400px;margin-top:100px;color:#995B5B;}h4{color:black;margin-top:6px;}</style></head></html>" ;
        echo"<table border=\"1\">" ;
    echo"<tr><td colspan=\"5\" align=\"center\"><h4>Resultat qcm francais</h4> </td></tr>" ;
    echo"<tr><td align=\"center\"><h4>Nom</h4></td><td align=\"center\"><h4>Prenom</h4></td><td align=\"center\"><h4>Classe</h4></td><td align=\"center\"><h4>note_francais_niveau1</h4></td><td align=\"center\"><h4>note_francais_niveau2</h4></td></tr>" ;
        
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_francais_niv1']."</td><td>".$entree['note_francais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
      $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2B\'' ) ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_francais_niv1']."</td><td>".$entree['note_francais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
      $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2C\'' ) ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_francais_niv1']."</td><td>".$entree['note_francais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
      $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2D\'' ) ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_francais_niv1']."</td><td>".$entree['note_francais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
      $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2E\'' ) ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_francais_niv1']."</td><td>".$entree['note_francais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;
      $reponse=$bdd->query('SELECT * FROM etudiants WHERE classe=\'II2F\'' ) ;
       while($entree=$reponse->fetch() )
    {
        echo"<tr><td>".$entree['nom']."</td><td>".$entree['prenom']."</td><td>".$entree['classe']."</td><td>".$entree['note_francais_niv1']."</td><td>".$entree['note_francais_niv2']."</td></tr>" ;
    }
    $reponse->closeCursor() ;




}

    ?>