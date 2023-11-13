<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db{
	
	private function view_users(){
		try {
			$SQL = "SELECT * FROM tbl_oferta";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Error Administrator(view_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_users(){
		return $this->view_users();
	}

	private function register_users($data){
		try {
			$SQL = 'INSERT INTO tbl_oferta (id_paqYrec ,id_chip ,id_accesorios ,id_tel ,ofer_paqYrec ,ofer_chip ,ofer_accesorios ,ofer_tel) VALUES (?,?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['id_paqYrec'],
									$data['id_chip'],
									$data['id_accesorios'],
									$data['id_tel'],
									$data['ofer_paqYrec'],
									$data['ofer_chip'],
									$data['ofer_accesorios'],
									$data['ofer_tel']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(register_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_register_user($data){
		$this->register_users($data);
	}

	private function update_user($data){
		try {
			$SQL = 'UPDATE tbl_oferta SET id_paqYrec = ?, id_chip = ?, id_accesorios = ?, id_tel = ?, ofer_paqYrec = ?, ofer_chip = ?, ofer_accesorios = ?, ofer_tel = ? WHERE id = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
								$data['id_paqYrec'],
								$data['id_chip'],
								$data['id_accesorios'],
								$data['id_tel'],
								$data['ofer_paqYrec'],
								$data['ofer_chip'],
								$data['ofer_accesorios'],
								$data['ofer_tel'],
								$data['id']
								)
							);			
		} catch (Exception $e) {
			die('Error Administrator(update_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_user($data){
		$this->update_user($data);
	}

	private function delete_user($id){
		try {
			$SQL = 'DELETE FROM tbl_oferta WHERE id = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));			
		} catch (Exception $e) {
			die('Error Administrator(delete_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_user($id){
		$this->delete_user($id);
	}	
}
?>