<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8/">
    <meta name="viewport" content="width=device-width" />
</head>

<body>

<form action="upload.php" enctype="multipart/form-data" method="post">

    <div>
        <label for='upload'>Ajouter un fichier:</label>
        <input id='upload' name="upload[]" type="file" multiple="multiple" />
    </div>
    <p><input type="submit" name="submit" value="Submit"></p>

</form>


</body>
</html>
