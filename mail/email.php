<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje</title>
</head>
<body>
    
<h1 style="text-align: center; color:#eb4d50;"><a href="<?= DOMINIO ?>" target="_blank"><img style="width:50px" src="<?= BASE_URL ?>/assets/img/logo-2.png"></a></h1>
<p style="text-align: center">De: <?= $_POST['email']; ?></p>
<p style="text-align: center">Para: <?= CORREO_EMPRESA ?></p>
<div style="width:97%; margin: auto;"><p style="text-align: center;font-size: 15px; padding: 20px"><?= $_POST['message'] ?></p></div>
<div class="item-date" style="text-align: center;">
<span style="color: #888787; text-align: center;">Att: <?= $_POST['name'] ?></span>
</div>
<div class="items item-footer" style="text-align: center;color: rgb(131, 205, 255);">
<p>Copyright &copy; <?= NOMBRE_EMPRESA ?></p>
</div>

</body>
</html>