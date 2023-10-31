<?php
  include 'conexion.php';
  include 'metodoslugares.php';
  
  $conexion=new Conexion;
  $metodos= new MetodosLugares;

  $metodos->mostrar($conexion->conn);