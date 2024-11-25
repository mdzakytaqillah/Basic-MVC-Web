<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nama saya <?= $data['nama']; ?> dari kelas <?= $data['kelas']; ?> </p>
    <a href="<?= BASEURL; ?>">Home</a>
    <a href="<?= BASEURL; ?>/about/page">page</a>
</body>
</html>