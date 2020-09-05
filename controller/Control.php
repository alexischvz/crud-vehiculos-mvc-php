<?php 

include_once 'model/AutoDao.php';

class Control{

	public $modelo;

	public function __construct(){

		$this->modelo = new AutoDao();

	}

	public function index(){

		include_once 'view/inicio.php';

	}

	public function registro(){

		include_once 'view/registro.php';

	}

	public function create(){

		$marca = $_POST['marca'];
		$tipo = $_POST['tipo'];
		$caja = $_POST['caja'];
		$motor = $_POST['motor'];
		$color = $_POST['color'];
		$modelo = $_POST['modelo'];

		$this->modelo->createVehiculos($marca, $tipo, $caja, $motor, $color, $modelo);

		header('Location: index.php');

	}

	public function delete(){

		$id_registro = $_GET['id_registro'];

		$this->modelo->deleteVehiculo($id_registro);

		header('Location: index.php');

	}

	public function modificar(){

		$id_registro = $_GET['id_registro'];

		if (isset($id_registro)) {
			$fila = $this->modelo->findById($id_registro);
		}

		include_once 'view/modificar.php';

	}

	public function update(){

		$id_registro = $_POST['id_registro'];
		$marca = $_POST['marca'];
		$tipo = $_POST['tipo'];
		$caja = $_POST['caja'];
		$motor = $_POST['motor'];
		$color = $_POST['color'];
		$modelo = $_POST['modelo'];

		$this->modelo->updateVehiculo($marca, $tipo, $caja, $motor, $color, $modelo, $id_registro);

		header('Location: index.php');

	}

}

 ?>