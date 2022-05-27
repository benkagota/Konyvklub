<h1>Könyvklub</h1>
<h2>Regisztráció:</h2>
<form action="" method="POST">
    <label for="nev">Írd ide a neved:</label>
    <input type="text" name="nev" id="nev">
    <label for="felhasznalo">Írd ide a felhasználóneved:</label>
    <input type="text" name="felhasznalo" id="felhasznalo">
    <label for="jelszo1">Írd ide a jelszavad:</label>
    <input type="password" name="jelszo1" id="jelszo1">
    <label for="jelszo2">Írd ide még egyszer a jelszavad:</label>
    <input type="password" name="jelszo2" id="jelszo2">
    <button type="submit">Regisztrálok</button>
</form>

<?php 

if(isset($_POST['felhasznalo'])){
    $felhasznalo = $_POST['felhasznalo']; 
   
   

if(isset($_POST['jelszo1'])){
    $jelszo = $_POST['jelszo1']; 
    
}
if(isset($_POST['jelszo2'])){
    $jelszo2 = $_POST['jelszo2']; 
    
}
if ($jelszo != $jelszo2){
    print ("A két jelszó nem egyezik");

} else {



if(isset($_POST['nev'])){
    $nev = $_POST['nev']; 
    
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "konyvklub";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `t_users` where u_name= '".$felhasznalo."'";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if ($count!=0){
    print ("A felhasználónév már foglalt!");    
} else {
     $conn = mysqli_connect($servername, $username, $password, $dbname);
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }
     $sql = "INSERT INTO t_users (u_name, jelszo, nev) VALUES ('".$felhasznalo."', MD5( '".$jelszo."'),'".$nev."')";
     $result = mysqli_query($conn, $sql);
     
     mysqli_close($conn);
     header('Location: login.php');
    }
}
}
     







?>