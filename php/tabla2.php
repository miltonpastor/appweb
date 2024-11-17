<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION DE COLOR MEDIANTE RGB: Resulado</title>
</head>
<body>
    <h1>RESULTADO DE LOS COMPONENTES EN RGB</h1>
    <?php
        
    $r1 = $_POST['valorr1'];
    $r2 = $_POST['valorr2'];
    
    $g1 = $_POST['valorg1'];
    $g2 = $_POST['valorg2'];

    $b1 = $_POST['valorb1'];
    $b2 = $_POST['valorb2'];

    $cadena1 = $r1.$r2.'0000';
    $cadena2 = '00'.$g1.$g2.'00';
    $cadena3 = '0000'.$b1.$b2;
    $cadena4 = $r1.$r2.$g1.$g2.$b1.$b2;
    
    /* Dentro de PHP etiquetas HTML */
    echo "<div class='h1'>";
    echo "COLORES";
    echo "</div>";
    echo "<hr>";
    echo "<div class='h2'>";
    echo "Componente Rojo: ";
    echo $cadena1;
    echo "<br>";
    echo "Componente Verde: ";
    echo $cadena2;
    echo "<br>";
    echo "Componente Azul: ";
    echo $cadena3;
    echo "<br>";
    echo "RESULTADO: ";
    echo $cadena4;
    echo "<br>";
    echo "</div>";

    echo "<table class='table' border='5' align='center'>";
    echo "<tr style='height:150px'>";
    echo "<td bgcolor='$cadena1'><font color='#ffffff'><center>Rojo:$cadena1</center></font></td>";
    echo "<td bgcolor='$cadena2'><font color='#ffffff'><center>Verde:$cadena2</center></font></td>";
    echo "<td bgcolor='$cadena3'><font color='#ffffff'><center>Azul:$cadena3</center></font></td>";
    echo "</tr>";
    echo "<tr style='height:150px'>";
    echo "<td colspan='3' bgcolor='$cadena4' align = 'center'><font color='#ffffff'><center>Resultado: $cadena4 </center></font></td>";
    echo "</tr>";
    echo "</table>";
    ?>
    
</body>
</html>