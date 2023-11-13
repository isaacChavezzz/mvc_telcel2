<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nueva oferta</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="id_paqYrec" type="number" class="form-control" name="id_paqYrec" placeholder="id_paqYrec" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="id_chip" type="number" class="form-control" name="id_chip" placeholder="id_chip" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="id_accesorios" type="number" class="form-control" name="id_accesorios" placeholder="id_accesorios" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="id_tel" type="number" class="form-control" name="id_tel" placeholder="id_tel" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ofer_paqYrec" type="number" class="form-control" name="ofer_paqYrec" placeholder="ofer_paqYrec" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ofer_chip" type="number" class="form-control" name="ofer_chip" placeholder="ofer_chip" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ofer_accesorios" type="number" class="form-control" name="ofer_accesorios" placeholder="ofer_accesorios" required autocomplete="off">
		  </div>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ofer_tel" type="number" class="form-control" name="ofer_tel" placeholder="ofer_tel" required autocomplete="off">
		  </div>	
		  <br>				  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar Oferta </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
		<input type="text" name="id" id="id" style="display: none;">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="id_paqYrec" type="number" class="form-control" name="id_paqYrec" placeholder="id_paqYrec" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="id_chip" type="number" class="form-control" name="id_chip" placeholder="id_chip" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="id_accesorios" type="number" class="form-control" name="id_accesorios" placeholder="id_accesorios" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="id_tel" type="number" class="form-control" name="id_tel" placeholder="id_tel" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ofer_paqYrec" type="number" class="form-control" name="ofer_paqYrec" placeholder="ofer_paqYrec" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ofer_chip" type="number" class="form-control" name="ofer_chip" placeholder="ofer_chip" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ofer_accesorios" type="number" class="form-control" name="ofer_accesorios" placeholder="ofer_accesorios" required autocomplete="off">
		  </div>		 	  
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ofer_tel" type="number" class="form-control" name="ofer_tel" placeholder="ofer_tel" required autocomplete="off">
		  </div>	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>