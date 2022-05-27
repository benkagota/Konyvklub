<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id,nev FROM t_users WHERE u_name = '$myusername' and jelszo = MD5('$mypassword')";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      if ($count ==1){
        $active = $row['active'];
         $nev = $row['nev'];
      // If result matched $myusername and $mypassword, table row must be 1 row
      function session_register($name){
        if(isset($GLOBALS[$name])) $_SESSION[$name] = $GLOBALS[$name];
        $GLOBALS[$name] = &$_SESSION[$name];
    }
    
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         //$_SESSION['nev'] = $nev;
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   } else {
    print("Nem létező felhasználónév vagy jelszó");
}
} 
?>
<html>
   
   <head>
      <title>Könyvklub</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
       <h1>Könyvklub</h1>
       <h2>Jelentkezz be vagy 
           <a href="regisztracio.php"> regisztrálj! </a>
        </h2>
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Felhasználó név  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Jelszó  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
      

   </body>
</html>