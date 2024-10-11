<?php
 // connexion à la base par l'objet PDO


 try{
    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $_bdd = new PDO('mysql:host=localhost; 
            dbname=cine','root','', 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
   //  le dbaname signifie databases name 
   // Dans le shell pour acceder au mariadb il faut taper mySQL -u root et avec le -p lorsque on a un mot de passe
             $_response = $_bdd->query('SELECT * FROM `user` WHERE 1 ORDER BY id');
                   
                   

    while($_data = $_response->fetch()){
     
       
        #on fait un test sur la bdd avant de l'afficher
      //   print "<pre>";
        
      //   print_r($_data);
        
      //   print "</pre>"; 
      print("<li><Strong>".$_data['firstname']." ".$_data['lastname']."</Strong>".$_data['role']."</li>");
      
    }
    
    $_response->closeCursor(); //ici se termine l'appelle par la méthode fetch()

 }
 catch(Exception $e){
    die("Error Data base de votre base ".$e->getMessage());
     //en cas d'érreur on affiche un message
}
?>