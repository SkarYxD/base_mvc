<?php

spl_autoload_register(function($class){
		if(file_exists("Lib/".'Core/'.$class.".php")){
			require_once("Lib/".'Core/'.$class.".php");
		}
	});

?>