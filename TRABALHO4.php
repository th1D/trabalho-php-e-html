<!DOCTYPE html>
<html>
<head>
    <title>Upload de Arquivos</title>
</head>
<body>
    <h1>Upload de Arquivos</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="imagem">Upload de Imagem (jpg, png, bmp):</label>
        <input type="file" name="imagem" accept=".jpg, .jpeg, .png, .bmp" required>
        <br>
        <label for="pdf">Upload de PDF:</label>
        <input type="file" name="pdf" accept=".pdf" required>
        <br>
        <input type="submit" value="Enviar Arquivos">
    </form>
</body>
</html>
