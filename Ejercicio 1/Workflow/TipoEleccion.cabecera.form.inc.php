<?php 
    $sw = 0;
    $sql = "SELECT * FROM inscripcion WHERE Id=".$_SESSION["IdUser"];
    $resCab = mysqli_query($conn, $sql);
    $filCab = mysqli_fetch_array($resCab);
    if(!isset($filCab)){
        $sw = 1;
    }
    $sql = "SELECT * FROM semestre";
	$resultado = mysqli_query($conn, $sql);
?>