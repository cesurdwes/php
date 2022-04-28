<h1>Tema 4 - Caso Práctico 1</h1>
<?php
    $conexion_mysql = new mysqli("localhost","root","","paises",3307);
    if ($conexion_mysql->connect_errno) {
        echo "Error: (".$conexion_mysql->connect_errno.")".$conexion_mysql->connect_error;
    }
    else {
        $codigo_sql = "select * from pais";
        $resultado = mysqli_query($conexion_mysql, $codigo_sql);
        
        echo "<table border='1'>";
        echo "<tr><th>Id</th><th>nombre</th><th>continente</th></tr>";
        while($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
            echo "<tr><td>".$registro['id']."</td><td>".$registro['nombre']."</td><td>".$registro['continente']."</td></tr>";
        }
        echo "</table>";
    }
?>
