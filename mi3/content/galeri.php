<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
    <style>
    body{
        background: linear-gradient(90deg, #74b6ff 0%, #1bdcfd 50%, #45d9fc 100%);
    }
  
</style>
</head>
<body>
<h1>Galeri</h1>
<form action="index.php?page=upload" method="POST" enctype="multipart/form-data">
    <label for="">Upload Gambar</label>
    <input type="file" name="gambar">
    <button type="submit">Upload</button>
</form>
</body>
</html>