<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function tbl_oferta(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>Id_paqYrec</th>
				<th>Id_chip</th>
				<th>Id_accesorios</th>
				<th>Id_tel</th>
				<th>Ofer_paqYrec</th>
				<th>Ofer_chip</th>
				<th>Ofer_accesorios</th>
				<th>ofer_tel</th>
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_users()	as $data) {
		?>
		<tr>
			<td><?php echo $data->id; ?> </td>
			<td><?php echo $data->id_paqYrec; ?> </td>
			<td><?php echo $data->id_chip; ?> </td>
			<td><?php echo $data->id_accesorios; ?> </td>
			<td><?php echo $data->id_tel; ?> </td>
			<td><?php echo $data->ofer_paqYrec; ?> </td>
			<td><?php echo $data->ofer_chip; ?> </td>
			<td><?php echo $data->ofer_accesorios; ?> </td>
			<td><?php echo $data->ofer_tel; ?> </td>

			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Seleccionar <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->id; ?>','<?php echo $data->id_paqYrec; ?>','<?php echo $data->id_chip; ?>','<?php echo $data->id_accesorios; ?>','<?php echo $data->id_tel; ?>','<?php echo $data->ofer_paqYrec; ?>','<?php echo $data->ofer_chip; ?>','<?php echo $data->ofer_accesorios; ?>','<?php echo $data->ofer_tel; ?> ');">Actualizar</a></li>
			      <li><a href="#" onclick="deleteUser('<?php echo $data->id; ?>');">Borrar</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id']);		
    }

	function registeruser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'id_paqYrec' 		=> $_REQUEST['id_paqYrec'],
					'id_chip' => $_REQUEST['id_chip'],
					'id_accesorios'		=> $_REQUEST['id_accesorios'],
					'id_tel'		=> $_REQUEST['id_tel'],
					'ofer_paqYrec'		=> $_REQUEST['ofer_paqYrec'],
					'ofer_chip'		=> $_REQUEST['ofer_chip'],
					'ofer_accesorios'		=> $_REQUEST['ofer_accesorios'],
					'ofer_tel'		=> $_REQUEST['ofer_tel']
					);		
					parent::set_register_user($data);		
    }    
    
	function updateuser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'id_paqYrec' 		=> $_REQUEST['id_paqYrec'],
					'id_chip' => $_REQUEST['id_chip'],
					'id_accesorios'		=> $_REQUEST['id_accesorios'],
					'id_tel'		=> $_REQUEST['id_tel'],
					'ofer_paqYrec'		=> $_REQUEST['ofer_paqYrec'],
					'ofer_chip'		=> $_REQUEST['ofer_chip'],
					'ofer_accesorios'		=> $_REQUEST['ofer_accesorios'],
					'ofer_tel'		=> $_REQUEST['ofer_tel']
					);		
			parent::set_update_user($data);		
	}    
    
}

