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
        <nav>
            <a href="index.php">Válogass kedvedre</a>
            <a href="ajanlj.php">Ajánlj könyvet</a>
            <a href="login.php">Kijelentkezés</a>
        </nav>

        <main>
            <h2>Ajánlj Te is könyvet</h2>
            <form name="form" action="upload.php" method="post" enctype="multipart/form-data">
            <label for="szerzo">Könyv szerzője</label>
            <input type="text" id="szerzo" name="szerzo">
            <label for="cim">Könyv címe</label>
            <input type="text" id="cim" name="cim">
            <label for="tartalom">Rövid leírás vagy tartalom</label>
            <input type="text" id="tartalom" name="tartalom">
            <label for="borito">Ide töltsd fel a borítóképet</label>
            <input type="file" id="borito" accept="image/jpeg" name="borito" multiple>
            <input type="submit" name="submit" value="Feltöltés">

           
        </form>
        </main>
    </header>
</body>
</html>

