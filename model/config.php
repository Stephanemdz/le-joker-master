<?php
 // connexion à la base par l'objet PDO


 try{
    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $_bdd = new PDO('mysql:host=localhost; 
            dbname=vente_prod','root','', 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
    
             $_response = $_bdd->query('SELECT * FROM `produits` WHERE 1 ORDER BY id ASC LIMIT 1 ');
                   
                   

    while($_data = $_response->fetch()){
     
       
        #on fait un test sur la bdd avant de l'afficher
        print "<pre>";
        
        print_r($_data);
        
        print "</pre>"; 
       

        echo "<li>Marque : ".$_data["marque"]."</li>
                <li> Capacité : ".$_data["capacite"]." kg<li>
                <li> Cosommation : ".$_data["consommation"]." KW<li>
                <li> Prix : ".$_data["prix"]." &euro;<li>
                <li><img src = ".$_data["image"]." loading=\"lazy\" alt=".$_data["marque"]."><li>";
    }
    
    $_response->closeCursor(); //ici se termine l'appelle par la méthode fetch()

 }
 catch(Exception $e){
    die("Error Data base de votre base ".$e->getMessage());
     //en cas d'érreur on affiche un message
}
?>