<?php
	include "conexion.inc.php";
    session_start();
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contrasenia"];
    $res = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario='".$usuario."' AND contrasena='".$contraseña."'");
	$fila = mysqli_fetch_array($res);
	if(isset($fila)){
        $_SESSION['IdUser'] = $fila["Id"];
        $_SESSION['Rol'] = $fila["rol"];
        $sql = "SELECT * FROM documentos WHERE Id=".$_SESSION['IdUser'];
        $res =  mysqli_query($conn, $sql);
        $fila = mysqli_fetch_array($res);
        if(isset($fila)){
            $_SESSION["Estado"] = $fila["estado"];
        }else{
            $_SESSION["Estado"] = 0;
        }
		$res2 = mysqli_query($conn, "SELECT * FROM estudiante WHERE Id='".$_SESSION['IdUser']."'");
		$fila2 = mysqli_fetch_array($res2);
        if(isset($fila2)){
			$_SESSION['Nombre'] = $fila2["nombre"]." ".$fila2["apellidos"];
		}else{
			$_SESSION['Nombre'] = "Usuario Nuevo";
		}
        $sql = "SELECT MAX(idinscripcion) FROM inscripcion WHERE Id=".$_SESSION["IdUser"];
        $res =  mysqli_query($conn, $sql);
        $fila = mysqli_fetch_array($res);
        if(isset($fila)){
            $_SESSION["inscripcion"] = $fila[0];
        }else{
            $_SESSION["inscripcion"] = 0;
        }
        header("Location: bandeja.php");
    }else{
        echo "Error.";
    }
?>