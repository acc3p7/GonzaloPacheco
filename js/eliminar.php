<?php
session_start();
	$arreglo=$_SESSION['carrito'];
	for($i=0;i<count($arreglo);$i++){
		if($arreglo[$i]['ProductoID'])!=$_POST['ProductoID']){
			$datosNuevos[]=array(
				'ProductoID'=>arreglo[$i]['ProductoID'],
				'ProductoNombre'=>arreglo[$i]['ProductoNombre'],
				'ProductoPrecio'=>arreglo[$i]['ProductoPrecio'],
				'ProductoThumb'=>arreglo[$i]['ProductoThumb'],
				'ProductoCantidad'=>arreglo[$i]['ProductoCantidad'],
				);
		}
	}
	if(isset($datosNuevos)){
		$_SESSION['carrito']=datosNuevos;
	else{
		unset($_SESSION['carrito']):
		echo "0";
	}
?>