<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvklub</title>
    
</head>
<body>

    <header>
        <h1>Könyvklub</h1>
        <?php
             include('session.php');
        ?>
        <h2>Üdvözöllek <?php echo $login_nev; ?>!</h2> 
        
        <nav>
            <a href="index.php">Válogass kedvedre</a>
            <a href="ajanlj.php">Ajánlj könyvet</a>
            <a href="login.php">Bejelentkezés</a>
            <a href = "logout.php">Kijelentkezés</a>
        </nav>

        <main>
            <form name="form" action="kereses.php" method="POST">
               
                <input type="text" name="kereses" id="kereses" value="">

                <button type="submit" >Keres</button>
            </form>
            <div>
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
                  $sql = "SELECT k.id, k.szerzo, k.cim, k.borito, k.tartalom, l.dbszam FROM `konyvek` as k
                  left join (SELECT ajanlo_id, count(ajanlo_id) as dbszam FROM `nezettseg` group by ajanlo_id order by count(ajanlo_id) desc) as l
                  on k.id = l.ajanlo_id
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
                
            </div>
        </main>
    </header>

    
    





</body>

</html>