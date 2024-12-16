<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: login.php');
}

try{
    $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
} catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}

$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
$statement->execute(array(':usuario' => $_SESSION['usuario']));
$resultado = $statement->fetch();

$statement = $conexion->prepare('SELECT * FROM contenidos WHERE id_usuario = :usuario');
$statement->execute(array(':usuario' => $resultado['id']));
$resultado = $statement->fetch(); 
$contenido  = $resultado['texto'];

require 'views\contenido.view.php';