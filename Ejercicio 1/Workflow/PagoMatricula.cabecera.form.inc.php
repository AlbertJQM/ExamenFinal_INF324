<?php
    $sw = 0;
    $sql = "SELECT * FROM documentos WHERE PM=1 AND Id=".$_SESSION["IdUser"];
    $resCab = mysqli_query($conn, $sql);
    $filCab = mysqli_fetch_array($resCab);
    if(isset($filCab)){
        $sw = 1;
    }
?>