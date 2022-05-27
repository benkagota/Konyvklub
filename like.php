<?php 
     
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "konyvklub";
     $conn = mysqli_connect($servername, $username, $password, $dbname);
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }
     $sql = "INSERT INTO nezettseg (ajanlo_id) VALUES ('".$_POST['like']."')";
     $result = mysqli_query($conn, $sql);
     
     mysqli_close($conn);
     
     
     header('Location: index.php');












?>