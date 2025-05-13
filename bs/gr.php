<?php
include '../Bs/conexion.php';
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = ['d'];
$e = ['e'];
$f = ['f'];
$g = ['g'];


$ingresar = "INSERT into https://php-myadmin.net/db_structure.php?db=if0_38704752_registrado
 values('$a', '$b', '$c', '$d', '$e', '$f', '$g')"; 
$query = mysqli_query($conectar, $ingresar); 

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



