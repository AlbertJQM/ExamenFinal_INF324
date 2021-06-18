    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Bienvenido <?php echo $_SESSION['Nombre'];?></h4>
            <p>A continuación podrás ver si tienes todos los requisitos para proceder con tu inscripción.</p>
            <p class="mb-0">Fecha de Ingreso: <?php echo date("Y-m-d");?></p>
            <hr>
            <div class="card border-warning mb-3">
                <div class="card-header">
                    BOLETA DE INSCRIPCIÓN
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
                                    </tbody>
                                </table>
                            </div>
                        </div>                    
                    </div>
                    <div class="alert alert-info" role="alert">
                        <div class="card">
                            <div class="card-header">
                                DOCUMENTOS ENTREGADOS
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Documento</th>
                                            <th scope="col">Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>DOCUMENTO DE APROBACIÓN</td>
                                            <td><span class="badge rounded-pill bg-success">ENTREGADO</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>DIPLOMA DE BACHILLER</td>
                                            <td><span class="badge rounded-pill bg-success">ENTREGADO</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>CÉDULA DE IDENTIDAD</td>
                                            <td><span class="badge rounded-pill bg-success">ENTREGADO</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>CERTIFICADO DE NACIMIENTO</td>
                                            <td><span class="badge rounded-pill bg-success">ENTREGADO</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>PAGO DE MATRICULA</td>
                                            <td><span class="badge rounded-pill bg-success">ENTREGADO</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>