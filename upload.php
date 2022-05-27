<?php
    
    if (($_FILES['borito']['name']!="")){
        // Where the file is going to be stored
            $target_dir = "borito/";
            $file = $_FILES['borito']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['borito']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext;
         
        // Check if file already exists
        if (file_exists($path_filename_ext)) {
         echo "Sorry, file already exists.";
         }else{
         move_uploaded_file($temp_name,$path_filename_ext);
         echo "Congratulations! File Uploaded Successfully.";
         }
        }

        if(isset($_POST['szerzo'])){
            $szerzo = $_POST['szerzo'];
            
        }
        
        if(isset($_POST['cim'])){
            $cim = $_POST['cim']; 
            
        }
        
        if(isset($_POST['tartalom'])){
            $tartalom = $_POST['tartalom']; 
            
        }
        
        if(isset($_POST['borito'])){
            $borito = $_POST['borito'];
            //$file_tmp = $_FILES ['image']['type'];
            //move_uploaded_file($file_tmp, "borito/".$borito);
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
        $sql = "INSERT INTO konyvek (szerzo, cim, borito, tartalom) VALUES ('".$szerzo."', '".$cim."','".$_FILES['borito']['name']."','".$tartalom."')";
        $result = mysqli_query($conn, $sql);
        
        mysqli_close($conn);
        
        
        header('Location: index.php');
        











?>