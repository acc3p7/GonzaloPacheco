<?php
session_start();
include "../conexion.php";
	$arreglo=$_SESSION['carrito'];
	$pedidoNumeroVenta=0;
	$re=mysql_query("select * from tblpedido order by pedidoNumeroVenta DESC limit 1") or die(mysql_error());
	while ($f=mysql_fetch_array(($re))) {
		$pedidoNumeroVenta=$f['pedidoNumeroVenta'];
	}
	if($pedidoNumeroVenta==0){
		$pedidoNumeroVenta=1;
	}else{
		$pedidoNumeroVenta=$pedidoNumeroVenta+1;
	}
	for($i=0;$i<count($arreglo);$i++){
		mysql_query("insert into tblpedido (pedidoNumeroVenta,pedidoNombre,pedidoPrecio,pedidoCantidad,pedidoSubtotal,pedidoUsuarioID) values(
			".$pedidoNumeroVenta.",
			'".$arreglo[$i]['ProductoNombre']."',
			'".$arreglo[$i]['ProductoPrecio']."',
			'".$arreglo[$i]['ProductoCantidad']."',
			'".$arreglo[$i]['ProductoPrecio']*$arreglo[$i]['ProductoCantidad']."',
			'1'
			)")or die (mysql_error());
	}
unset($_SESSION['carrito']);
header("Location: ../admin.php");
?>