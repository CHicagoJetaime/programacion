<?php
include '../Bs/conexion.php';
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];


$sql = "INSERT registrado values('$a', '$b', '$c', '$d', '$e', '$f', '$g')"; 


if($query){
    echo "<script> alert('Ingresado Correctamente!!');
        location.href = '../https://chicagojetaime.github.io/programacion/proyecto/r.html';
        </script>";
        }
        else{
            echo "<script> alert('Error!!');
            location.href = '../https://chicagojetaime.github.io/programacion/proyecto/r.html';
            </script>";
        } 
        ?>




