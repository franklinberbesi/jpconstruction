<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje</title>
</head>
<body>
    
<h1 style="text-align: center; color:#ff8417;"><a href="<?= DOMINIO ?>" target="_blank"><img style="width:50px" src="https://jpconstructsolutionusa.com/img/logo-2.png"></a></h1>
<p style="text-align: center">De: <?= $_POST['correo']; ?></p>
<p style="text-align: center">Para: <?= CORREO_EMPRESA ?></p>
<div style="width:97%; margin: auto;">
<p style="font-size: 15px; padding: 5px 20px"><strong>Nombre</strong>: <?= $nombres ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>Apellidos</strong>: <?= $apellidos ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>Correo</strong>: <?= $correo ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>Teléfono</strong>: <?= $telefono ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>Edad</strong>: <?= $edad ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>País</strong>: <?= $pais ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>Ciudad / Estado</strong>: <?= $ciudad_estado ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>Lugar</strong>: <?= $lugar ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>Experiencia Laboral</strong>: <?= $experiencia_laboral ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>¿Porque tenerte en nuestro equipo?</strong>: <?= $porque_trabajar_jpconstruction ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>¿Cuantas personas dependen de ti?</strong>: <?= $personas_dependen ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>¿Tienes Hijos?</strong>: <?= $hijos ?></p>
<p style="font-size: 15px; padding: 5px 20px"><strong>¿Si la empresa exigiera una Garantia en calidad de reembolso aceptarias?</strong>: <?= $garantia_calidad_reembolso ?></p>
</div>
<div class="item-date" style="text-align: center;">
<span style="color: #888787; text-align: center;">Att: <?= $nombres ?> <?= $apellidos ?></span>
</div>
<div class="items item-footer" style="text-align: center;color: #ff8417;">
<p>Copyright &copy; <?= NOMBRE_EMPRESA ?></p>
</div>

</body>
</html>