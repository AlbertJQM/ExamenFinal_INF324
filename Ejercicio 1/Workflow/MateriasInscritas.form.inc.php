    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Bienvenido <?php echo $_SESSION['Nombre'];?></h4>
            <p>Antes de finalizar tu flujo podrás ver todos los datos que brindaste durante todo este proceso.</p>
            <p class="mb-0">Fecha de Ingreso: <?php echo date("Y-m-d");?></p>
            <hr>
            <div class="card border-warning mb-3">
                <div class="card-header">
                    BOLETA MATERIAS ASIGNADAS
                </div>
                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                        <div class="card">
                            <div class="card-header">
                                DATOS PERSONALES
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td>Nombre(s):</td>
                                            <td><?php echo $nombre;?></td>
                                        </tr>
                                        <tr>
                                            <td>Apellido(s):</td>
                                            <td><?php echo $apellidos;?></td>
                                        </tr>
                                        <tr>
                                            <td>Cédula de Identidad:</td>
                                            <td><?php echo $ci;?></td>
                                        </tr>
                                        <tr>
                                            <td>Fecha de Nacimiento:</td>
                                            <td><?php echo $fechaNac;?></td>
                                        </tr>
                                        <tr>
                                            <td>Dirección:</td>
                                            <td><?php echo $direccion;?></td>
                                        </tr>
                                        <tr>
                                            <td>Semestre:</td>
                                            <td><span class="badge rounded-pill bg-primary"><?php echo $semestre;?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>                    
                    </div>
                    <div class="alert alert-info" role="alert">
                        <div class="card">
                            <div class="card-header">
                                MATERIAS ASIGNADAS
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Sigla</th>
                                            <th scope="col">Descripción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($fila = mysqli_fetch_array($res)){
                                                echo "<tr><td><span class='badge rounded-pill bg-success'>".$fila["sigla"]."</span></td>";
                                                echo "<td>".$fila["materia"]."</td>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>