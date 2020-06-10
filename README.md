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

**Controllers/Home.php**

> Controlador de la pagína Home/Inicio

```
<?php

	class Home extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$data['page_id'] = 1;  // Identificador de la pagina
 			$data['page_tage'] = "Home";  //Tag Home
			$data['page_title'] = "Pagina principal";  //Titulo de la pagina Home
			$data['page_name'] = "home";  //Nombre que se usara para identificar el controlador home
			$data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
			$this->views->getView($this,"home",$data); //Llama a la vista home.php dentro de la carpeta Views
		}
	}

?>
```

**Models/Home.php**

```
<?php

	class homeModel extends MySQL
	{
		
		public function __construct()
		{
			parent::__construct();
		}

	}

?>
```
**Views/home.php**

> Esto es lo que mostrara el archivo home.php.

```
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Base MVC # Mini Framework 1.0 | JkDev</title>
</head>
<body>
 <p>Mini Framework 1.0 - <a href="facebook.com/joaquincetu">JkDev</a>
</body>
</html>
```

**Para agregar una nueva Pagina se debe hacer lo siguiente:**

**Controllers/Nueva.php**

```
<?php

	class Nueva extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function nueva()
		{
			$data['page_id'] = 2;  // Identificador de la pagina
 			$data['page_tage'] = "Nueva";  //Tag Nueva
			$data['page_title'] = "Pagina principal";  //Titulo de la pagina Nueva
			$data['page_name'] = "nueva";  //Nombre que se usara para identificar el controlador home
			$data['page_content'] = "Esta es una nueva pagina.";
			$this->views->getView($this,"nueva",$data); //Llama a la vista nueva.php dentro de la carpeta Views
		}
	}

?>
```
> Recordar que se debe aumentar el ID de la pagina creada.

**Models/Nueva.php**

```
<?php

	class nuevaModel extends MySQL
	{
		
		public function __construct()
		{
			parent::__construct();
		}

	}

?>
```

**Views/nueva.php**

> Esto es lo que mostrara el archivo nueva.php.

```
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>NUEVA Base MVC # Mini Framework 1.0 | JkDev</title>
</head>
<body>
 <p>Mini Framework 1.0 - <a href="facebook.com/joaquincetu">JkDev</a>
</body>
</html>
```


---

**Index.php**

```
<?php
	
	require_once("Config/Config.php");
	require_once("Helpers/Helpers.php");
	$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
	$arrUrl = explode("/", $url);
	$controller = $arrUrl[0];
	$method = $arrUrl[0];
	$params = "";

	if(!empty($arrUrl[1]))
	{
		if($arrUrl[1] != "")
		{
			$method = $arrUrl[1];
		}
	}

	if(!empty($arrUrl[2]))
	{
		if($arrUrl[2] != "")
			{
				for ($i=2; $i < count($arrUrl); $i++){
					$params .= $arrUrl[$i].',';
				}
				$params = trim($params,',');
			}
	}
	require_once("Lib/Core/Autoload.php");
	require_once("Lib/Core/Load.php");

?>
```


---
