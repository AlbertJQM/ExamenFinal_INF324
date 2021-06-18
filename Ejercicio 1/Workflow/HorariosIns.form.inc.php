    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Bienvenido <?php echo $_SESSION['Nombre'];?></h4>
            <p>A continuación podrás encontrar los horarios de atención para realizar tu inscripción.</p>
            <p class="mb-0">Fecha de Ingreso: <?php echo date("Y-m-d");?></p>
            <hr>
            <div class="card">
                <div class="card-header">
                    HORARIOS DE ATENCIÓN
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <caption>Lista de horarios habilitados.</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Turno</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Horario</th>	
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mañana</td>
                                <td>07/06/2021</td>
                                <td>09:30 AM - 12:00 PM</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Tarde</td>
                                <td>07/06/2021</td>
                                <td>14:30 PM - 18:00 PM</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mañana</td>
                                <td>09/06/2021</td>
                                <td>10:00 AM - 12:30 PM</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Tarde</td>
                                <td>09/06/2021</td>
                                <td>15:00 PM - 18:30 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>