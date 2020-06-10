"# BASE MVC versión 1.0" 


Base PHP MODELO VISTA CONTROLADOR.

## Requisitos :

* PHP 7.0+
* DB MySQL
* Tener base de aprendizaje sobre PHP
* WampServer o XamppServer.


## Configuración de los archivos:

> Dejare una lista de los archivos a configurar y archivos que trae para tener una idea del funcionamiento de cada archivo.


**Config/Config.php**


```
<?php
	//RUTA DEL PROYECTO
	const BASE_URL = "http://localhost/base_mvc";

	//Zona Horaria
	date_default_timezone_set('America/Argentina/Buenos_Aires');

	const DB_HOST = "localhost"; // Servidor donde aloja la base de datos.
	const DB_NAME = "test";      // Nombre de la base de datos
	const DB_USER = "root";      // Usuario de la DB por default root
	const DB_PASS = "";          // Contraseña del usuario
	const DB_CHARSET = "charset-utf8"; // Tipo de caracter UTF-8

	//Deiliminadores decimal y millar (Opcional)
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda (Opcional)
	const SMONEY = "$";
  ?> 
  ```
