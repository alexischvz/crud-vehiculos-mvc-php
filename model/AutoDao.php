<?php 

class AutoDao{

	public $cnx;

	public function __construct(){

		try {

			$this->cnx = Conexion::getConexion();
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function readVehiculos(){

		try {

			$query = "select r.id_registrov, m.marca, t.tipo, c.caja, r.motor, r.color, r.modelo from registrovehiculo r inner join marca m on m.id_marca = r.id_marca inner join tipo t on t.id_tipo = r.id_tipo inner join caja c on c.id_caja = r.id_caja order by r.id_registrov;";

			$statement = $this->cnx->prepare($query);
			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function createVehiculos($id_marca, $id_tipo, $id_caja, $motor, $color, $modelo){

		try {

			$query = "insert into registrovehiculo(id_marca, id_tipo, id_caja, motor, color, modelo) values(:id_marca, :id_tipo, :id_caja, :motor, :color, :modelo)";

			$statement = $this->cnx->prepare($query);
			$statement->bindParam(":id_marca", $id_marca);
			$statement->bindParam(":id_tipo", $id_tipo);
			$statement->bindParam(":id_caja", $id_caja);
			$statement->bindParam(":motor", $motor);
			$statement->bindParam(":color", $color);
			$statement->bindParam(":modelo", $modelo);

			$statement->execute();
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function deleteVehiculo($id_registrov){

		try {

			$query = "delete from registrovehiculo where id_registrov = :id_registrov";
			$statement = $this->cnx->prepare($query);
			$statement->bindParam(":id_registrov", $id_registrov);
			$statement->execute();
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function findById($id_registrov){

		try {

			$query = "select * from registrovehiculo where id_registrov = :id_registrov";
			$statement = $this->cnx->prepare($query);
			$statement->bindParam(":id_registrov", $id_registrov);
			$statement->execute();

			return $statement->fetch(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function updateVehiculo($id_marca, $id_tipo, $id_caja, $motor, $color, $modelo, $id_registrov){

		try {

			$query = "update registrovehiculo set id_marca = :id_marca, id_tipo = :id_tipo, id_caja = :id_caja, motor = :motor, color = :color, modelo = :modelo where id_registrov = :id_registrov;";
			$statement = $this->cnx->prepare($query);
			$statement->bindParam(":id_marca", $id_marca);
			$statement->bindParam(":id_tipo", $id_tipo);
			$statement->bindParam(":id_caja", $id_caja);
			$statement->bindParam(":motor", $motor);
			$statement->bindParam(":color", $color);
			$statement->bindParam(":modelo", $modelo);
			$statement->bindParam(":id_registrov", $id_registrov);

			$statement->execute();
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	// ***********************************************************************************************
	
	public function readMarca(){

		try {

			$query = "select * from marca";
			$statement = $this->cnx->prepare($query);
			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function readTipo(){

		try {

			$query = "select * from tipo";
			$statement = $this->cnx->prepare($query);
			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function readCaja(){

		try {

			$query = "select * from caja";
			$statement = $this->cnx->prepare($query);
			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}
	
}

 ?>