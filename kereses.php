<a href="index.php">Vissza a főoldalra</a>
<?php
      if(isset($_POST['kereses'])){
        $kereses = $_POST['kereses'];

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
                  $sql = "SELECT k.id, k.szerzo, k.cim, k.borito, k.tartalom, l.dbszam FROM `konyvek` as k
                  left join (SELECT ajanlo_id, count(ajanlo_id) as dbszam FROM `nezettseg` group by ajanlo_id order by count(ajanlo_id) desc) as l
                  on k.id = l.ajanlo_id
                  where k.szerzo like '%".$kereses."%' or k.cim like '%".$kereses."%' or k.tartalom like '%".$kereses."%'
                  order by l.dbszam desc";
                 
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $kep = $row ['borito'];
                    
                ?>
                <h2> 
                    <?php print($row['szerzo']) ?>
                </h2>
                <h3>  <?php print($row['cim']) ?></h3>
                <p>Ajánlások száma: <?php print($row['dbszam'])?></p>
                <img src="borito/<?php print($kep) ?>"/>
                                <p>
                <?php print($row['tartalom']) ?>
                </p>
                <form name="form" action="like.php" method="POST">
                <button type="submit" name="like" value="<?php print($row['id'])?>">Tetszik</button>
                </form>
                <?php }} mysqli_close($conn); ?>


                
                