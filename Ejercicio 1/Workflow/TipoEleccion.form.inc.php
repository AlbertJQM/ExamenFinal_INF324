    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Bienvenido <?php echo $_SESSION['Nombre'];?></h4>
            <p>Verifica el tipo de estudiante que eres y el semestre que te corresponde.</p>
            <p class="mb-0">Fecha de Ingreso: <?php echo date("Y-m-d");?></p>
            <hr>
            <div class="card">
                <div class="card-header">
                    ESTADO DEL ESTUDIANTE
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Estudiante</th>
                                <td><span class="badge rounded-pill bg-success">
                                    <?php
                                        if($sw){
                                            echo "Nuevo";
                                        }else{
                                            echo "Antiguo";
                                        }
                                    ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Semestre</th>
                                <td>
                                    <select name="semestre" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <?php
                                            if($sw){
                                                echo "<option value=1>PRIMERO</option>";
                                            }else{
                                                echo "<option selected>Seleccione un flujo</option>";
                                                while($fila = mysqli_fetch_array($resultado)){
                                                    echo "<option value=".$fila["idsemestre"].">".$fila["nombre"]."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>