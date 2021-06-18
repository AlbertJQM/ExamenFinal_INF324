<?php
    $sql = "SELECT * FROM inscripcion WHERE idinscripcion=".$_SESSION["inscripcion"];
    $res = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_array($res);
    $semestre = $fila["idsemestre"];
    $sql = "SELECT m.sigla, m.nombre FROM semestre s, materia m WHERE s.idsemestre=m.idsemestre AND s.idsemestre='$semestre'";
    $res = mysqli_query($conn, $sql);
    switch ($semestre) {
        case 1:
            $s = "PRIMERO";
            break;
        case 2:
            $s = "SEGUNDO";
            break;
        case 3:
            $s = "TERCERO";
            break;
        case 4:
            $s = "CUARTO";
            break;
        case 5:
            $s = "QUINTO";
            break;
        case 6:
            $s = "SEXTO";
            break;
        case 7:
            $s = "SEPTIMO";
            break;
        case 8:
            $s = "OCTAVO";
            break;
        case 9:
            $s = "NOVENO";
            break;
        case 10:
            $s = "DECIMO";
            break;
    }
?>