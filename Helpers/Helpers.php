<?php 
	
	//Retona la url del proyecto
	function base_url()
	{
		return BASE_URL;
	}
	//Retorna la url de la carpeta Assets
	function media()
	{
		return BASE_URL."/Assets";
	}

	//Muestra información formateada
	function dep($data)
	{
		$format = print_r('<pre>');
		$format .= print_r($data);
		$format .= print_r('</pre>');
		return $format;
	}

	//Elimina exceso de espacio entre palabras
	function strClean($strCadena){
		$string = preg_replaec(['/\s+/','/^\s|\s$/'],[' '],'', $strCadena);
		$string = trim($string); //Elimina espacios en blanco al inicio y al final
		$string = stripcslashes($string); //Elimina las \ invertidas
		$string = str_ireplace("<script>", "", $string);
		$string = str_ireplace("</script>", "", $string);
		$string = str_ireplace("<script src>", "", $string);
		$string = str_ireplace("<script type=>", "", $string);
		$string = str_ireplace("SELECT FROM *", "", $string);
		$string = str_ireplace("DELETE FROM", "", $string);
		$string = str_ireplace("INSERT INTO", "", $string);
		$string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
		$string = str_ireplace("DROP TABLE", "", $string);
		$string = str_ireplace("TRUNCATE TABLE", "", $string);
		$string = str_ireplace("SHOW TABLES", "", $string);
		$string = str_ireplace("SHOW DATABASES", "", $string);
		$string = str_ireplace("OR '1'='1", "", $string);
		$string = str_ireplace('OR "1"="1"', "", $string);
		$string = str_ireplace('OR ´1´=´1´', "", $string);
		$string = str_ireplace("is NULL; --", "", $string);
		$string = str_ireplace("is NULL; --", "", $string);
		$string = str_ireplace("LIKE'", "", $string);
		$string = str_ireplace('LIKE "', "", $string);
		$string = str_ireplace("LIKE ´", "", $string);
		$string = str_ireplace("OR 'a'='a", "", $string);
		$string = str_ireplace('OR "a"="a', "", $string);
		$string = str_ireplace("OR ´a´=´a", "", $string);
		$string = str_ireplace("OR ´a´=´a", "", $string);
		$string = str_ireplace("<?php", "", $string);
		$string = str_ireplace("?>", "", $string);
		$string = str_ireplace("--", "", $string);
		$string = str_ireplace("^", "", $string);
		$string = str_ireplace("[", "", $string);
		$string = str_ireplace("]", "", $string);
		$string = str_ireplace("==", "", $string);
		$string = str_ireplace(";", "", $string);
		$string = str_ireplace("::", "", $string);
		return $string;
	}

	//Genera una contraseña de 10 caracteres
	function passGenerator($length = 10)
	{
		$pass = "";
		$longitudPass=$length;
		$cadena = "ABCDEFGHIJKLMNOPQRSTUWXYZabcdefghijklmnopqrstuwxyz1234567890";
		$longitudCadena=strlen($cadena);

		for($i; $i<=$longitudPass; $i++)
		{
			$pos = rand(0,$longitudCadena-1);
			$pass .= substr($cadena,$pos,1);
		}
		return $pass;
	}

	function token()
	{
		$r1 = bin2hex(random_bytes(10));
		$r2 = bin2hex(random_bytes(10));
		$r3 = bin2hex(random_bytes(10));
		$r4 = bin2hex(random_bytes(10));
		$token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
		return $token;
	}

	function formatMoney($cantidad)
	{
		$cantidad = number_format($cantidad,2,SPD,SPM);
		return $cantidad;
	}

?>