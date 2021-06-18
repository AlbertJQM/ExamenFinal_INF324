<?php
    $semestre = $_GET["semestre"];
    $sql = "SELECT * FROM inscripcion WHERE idsemestre='$semestre' AND Id=".$_SESSION["IdUser"];
    $res = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_array($res);
    if(!isset($fila)){
        $sql = "INSERT INTO inscripcion(idsemestre, Id) VALUES ('$semestre', '".$_SESSION["IdUser"]."')";
        $res = mysqli_query($conn, $sql);
        $sql = "SELECT MAX(idinscripcion) FROM inscripcion WHERE idsemestre='$semestre' AND Id=".$_SESSION["IdUser"];
        $res = mysqli_query($conn, $sql);
        $fila = mysqli_fetch_array($res);
        $_SESSION["inscripcion"] = $fila[0];
    }else{
        $_SESSION["inscripcion"] = $fila["idinscripcion"];
    }
?>