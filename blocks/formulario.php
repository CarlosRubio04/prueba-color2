<form>
	<div class="row">
		<div class="form-group col-md-12">
			<input type="text" class="form-control" name="nombre" placeholder="Nombre y Apellido" required/>
		</div>
		<div class="form-group col-md-12">
			<input type="text" class="form-control" name="correo" placeholder="Correo Electrónico" required/>
		</div>
		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="profesion" placeholder="Profesión:" required/>
		</div>
		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="cargo" placeholder="Cargo:" required/>
		</div>
		
		<div class="checkbox col-md-12">
			<label for="terminos">
				<input type="checkbox" name="terminos" checked required> Acepto terminos y condiciones*
			</label>
		</div>
		<div class="checkbox col-md-12">
			<label for="terminos">
				<input type="checkbox" name="terminos" checked required> Acepto Política de Tratamiento de Datos*
			</label>
		</div>
		<div class="form-group col-md-12">
			<button type="submit" class="btn btn-primary center-block">Reserva mi cupo</button>
		</div>
	</div>
</form>