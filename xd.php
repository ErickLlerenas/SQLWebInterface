<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>erickSQL</title>
    <link rel="stylesheet" href="./css/materialize.css" />

</head>
<body>
    <?php
        $Server = 'localhost';
        $User = 'root';
        $Password = '';
        $DataBase = 'Cpremier';
        //conectarServidor y base de datos
        $connection = new mysqli($Server,$User,$Password,$DataBase);

        //Seleccionar datos
        $sql = "SELECT * FROM trabajador";
        $result = $connection->query($sql);
        
        echo "<table>"; 

            while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['Id_Trabajador'] . "</td><td>" . $row['Nombre'] . "</td><td>" . $row['Tarifa_Hr'] . "</td><td>" . $row['Tipo_de_Oficio'] . "</td><td>" . $row['Id_Supv'] ."</td></tr>";  //$row['index'] the index here is a field name
            }

        echo "</table>";

    ?>
</body>
</html>