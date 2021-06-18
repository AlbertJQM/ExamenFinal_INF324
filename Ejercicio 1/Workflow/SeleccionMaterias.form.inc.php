    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Bienvenido <?php echo $_SESSION['Nombre'];?></h4>
            <p>A continuación podrás ver las materias que corresponden al semestre <span class="badge rounded-pill bg-primary"><?php echo $s;?></span></p>
            <p class="mb-0">Fecha de Ingreso: <?php echo date("Y-m-d");?></p>
            <hr>
            <div class="card">
                <div class="card-header">
                    MATERIAS DEL SEMESTRE
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Sigla</th>
                                    <th scope="col">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                        while($fila = mysqli_fetch_array($res)){
                                            echo "<tr>";
                                                echo "<th scope='row'><div class='form-check form-switch'><input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault' checked></div></th>";
                                                echo "<td>$fila[0]</td>";
                                                echo "<td>$fila[1]</td>";
                                            echo "</tr>";
                                        }
                                    ?>                               
                            </tbody>
                        </table>            
                        
                    </div>
                </div>
            </div>
        </div>
    </center>