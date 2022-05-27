<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   //$user_nev = $_SESSION['nev'];
   
   $ses_sql = mysqli_query($db,"select nev, u_name from t_users where u_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['u_name'];
   $login_nev = $row['nev'];
   
   if(!isset($_SESSION['login_user'])){
        header("location:login.php");
     
      die();
   }

?>