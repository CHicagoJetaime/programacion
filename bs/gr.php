<?php
include '../php/conexion_0.php';

$NOMBRE = $_POST['NOMBRE'];
$ap1 = $_POST['1erAPELLIDO'];
$ap2 = $_POST['2doAPELLIDO'];
$FechaDeNacimiento = $_POST['FechaDeNacimiento'];
$SEXO = $_POST['SEXO'];
$CARRERA = $_POST['CARRERA'];
$ingresar = "INSERT into alumnos values('', '$NOMBRE', '$ap1', '$ap2', '$FechaDeNacimiento', '$SEXO', '$CARRERA')";
$query = mysqli_query($conectar, $ingresar); 

if($query){
    echo "<script> alert('Ingresado Correctamente!!');
        location.href = '../html/alumnos.html';
        </script>";
        } else{
            echo "<script> alert('Error!!');
            location.href = '../html/alumnos.html';
            </script>";
        }   
        ?>



