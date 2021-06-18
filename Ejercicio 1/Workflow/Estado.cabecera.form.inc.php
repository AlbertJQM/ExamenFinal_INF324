<?php
    $sw = 0;
    $sql = "SELECT * FROM seguimiento WHERE flujo='F1' AND fecha_fin IS NULL AND Id=".$_SESSION["IdUser"];
    $resCab = mysqli_query($conn, $sql);
    $filCab = mysqli_fetch_array($resCab);
    if(isset($filCab)){
        $sw = 1;
        $FF1 = 1;
    }
?>