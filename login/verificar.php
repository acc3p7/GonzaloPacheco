<?php
	session_start();
	include "../conexion.php";
	$re=mysql_query("select * from tblusuario where usuarioNombre='".$_POST['Usuario']."' AND 
 					usuarioPass='".$_POST['Password']."'")	or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
			$arreglo[]= array('Nombre' =>$f['usuarioNombre'],
							  'Apellido' => $f['usuarioApellidos'] );
		}
		if(isset($arreglo)){
			$_SESSION['Usuario']=$arreglo;
			header("Location: ../admin.php");
		}else{
			header("Location: ../login.php?error=datos no validos");
		}
?>