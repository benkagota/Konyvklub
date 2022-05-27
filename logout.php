<?php

    
include('session.php'); 

  session_destroy();

   //$_SESSION['login_user'] = "";
   ?>
   <h1>Könyvklub</h1>
   <h2>Nincs bejelentkezve</h2> 
   <a href="login.php">Jelentkezzen be</a>
   <?php
      
   

?>