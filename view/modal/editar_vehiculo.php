			<div class="modal fade" id="edit_vehiculo" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'>
			</i> Editar Vehiculo</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" id="editarVehiculoCli">
			
			  <div class="form-group">
				<label for="placa" class="col-sm-3 control-label">Placa</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="placa" name="placa"  required>
				</div>
			  </div>
			   <div class="form-group">
				<label for="Descripción" class="col-sm-3 control-label">Descripción</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Descripción" name="Descripción">
				</div>
			  </div>
			  		  
			  <div class="form-group">
				<label for="categoria" class="col-sm-3 control-label">Categoria Vehiculo</label>
				<div class="col-sm-8">
				 <select class="form-control" id="categoria" name="categoria" required>
					<option value="0">-- Selecciona la categoria del vehiculo --</option>
					<option value="1" selected>AUTOMOVIL</option>
					<option value="2">MOTOCICLETA</option>
				  </select>
				</div>
			  </div>
	
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="button" class="btn btn-primary" name="button" id="editInfoVehic">Editar Vehiculo</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	