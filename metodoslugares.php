<?php
//Clase MetodosLugares que se encarga de ejecutar consultas sql y mostrar los datos recibidos
class MetodosLugares {
    private $ip;
    private $lugar;
    private $descripcion;

    //Constructor que da valor a las variables que utilizaremos en las consultas
    function __construct(){
        if(isset($_POST["ip"])){$this->ip=$_POST["ip"];}
        if(isset($_POST["lugar"])){$this->lugar=$_POST["lugar"];}
        if(isset($_POST["descripcion"])){$this->descripcion=$_POST["descripcion"];}
    }
    //Metodo encargado de mostrar todos los lugares
    function mostrar($conexion){
        $sql = "SELECT * FROM 'lugar'";
        $resultado = $conexion->query("SELECT * FROM lugar");
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "IP: " . $fila["ip"]." Lugar: ".$fila["lugar"]." <a href=procesos.php?ip=".$fila["ip"]."&accion=borrar>Borrar</a> <a href=procesos.php?ip=".$fila["ip"]."&accion=modificar>Modificar</a> <br>";
            }
        } else
            echo "No hay resultados";
    }
}
?>