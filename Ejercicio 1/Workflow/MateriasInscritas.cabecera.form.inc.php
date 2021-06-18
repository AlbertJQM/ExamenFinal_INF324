<?php
    $sql = "SELECT e.nombre, e.apellidos, e.ci, e.fecha_nac, e.direccion, s.nombre AS semestre FROM estudiante e, inscripcion i, semestre s WHERE e.Id=i.Id AND i.idsemestre=s.idsemestre AND e.Id=".$_SESSION["IdUser"]." AND i.idinscripcion=".$_SESSION["inscripcion"];
    $res = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_array($res);
    $nombre = $fila["nombre"];
    $apellidos = $fila["apellidos"];
    $ci = $fila["ci"];
    $fechaNac = $fila["fecha_nac"];
    $direccion = $fila["direccion"];
    $semestre = $fila["semestre"];

    $sql = "SELECT m.sigla, m.nombre AS materia FROM inscripcion i, materia m WHERE i.idsemestre=m.idsemestre AND i.idinscripcion=".$_SESSION["inscripcion"];
    $res = mysqli_query($conn, $sql);
?>