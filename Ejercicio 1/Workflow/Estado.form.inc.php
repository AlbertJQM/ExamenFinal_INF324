    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Bienvenido <?php echo $_SESSION['Nombre'];?></h4>
            <p>A continuación podrás verificar tu estado para poder proceder con la elección de tus materias.</p>
            <p class="mb-0">Fecha de Ingreso: <?php echo date("Y-m-d");?></p>
            <hr>
            <div class="card">
                <div class="card-header">
                    ESTADO DEL ESTUDIANTE
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <?php
                            if($sw){
                                echo "<p>Usted se encuentra actualmente <span class='badge rounded-pill bg-danger'>DESHABILITADO</span>. Debe completar el flujo de <span class='badge rounded-pill bg-primary'>INSCRIPCIÓN</span> para continuar con el flujo actual.</p>";
                            }else{
                                echo "<p>Usted se encuentra actualmente <span class='badge rounded-pill bg-success'>HABILITADO</span> para realizar la elección de sus materias.</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </center>