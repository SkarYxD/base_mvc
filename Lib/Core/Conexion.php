<?php
	class Conexion{
		private $conect;

		public function __construct(){
			$connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
			try{
				$this->conect = new PDO($connectionString, DB_USER, DB_PASS);
				$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo "Conexion OK";
			}catch(PODException $e){
				$this->conect = 'Error de conexión';
				echo "ERROR: ". $e->getMessage();
			}
		}

		public function conect(){
			return $this->conect;
		}
	}