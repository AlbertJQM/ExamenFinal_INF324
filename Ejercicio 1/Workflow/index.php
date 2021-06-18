<?php
	include "cabecera.inc.php";
?>
<center>
	<div class="card" style="width: 25rem;">
		<div class="card-header text-center display-6">
			INICIO DE SESIÓN
		</div>
		<div class="card-body">
			<div class="alert alert-primary" role="alert">
				<form method="POST" action="controlusuario.php">
					<div class="form-group">
						<label for="Usuario">Usuario</label>
						<input type="text" name="usuario" class="form-control" placeholder="Introduzca su usuario" required/>	
					</div>
					<div class="form-group">
						<label for="Contraseña">Contraseña</label>
						<input type="password" class="form-control" name="contrasenia" placeholder="Introduzca su contraseña" required/>	
					</div>
					<input type="submit" name="Enviar" value="Enviar" class="btn btn-success"/>
				</form>
			</div>
		</div>
		<div class="card-footer text-muted">
			Univ. Albert Jhonatan Quisbert Mújica
		</div>
	</div>
</center>
<?php
	include "pie.inc.php";
?>