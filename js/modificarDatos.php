<?php
session_start();

	$arreglo=$_SESSION['carrito'];
	$total=0;
	$numero=0;
	for ($i=0; $i<count($arreglo); $i++) { 
		if ($arreglo[$i]['productoID']==$_POST['Id']){
			$numero=$i;
		}	
	}
	$arreglo[$numero]['productoCantidad']=$_POST['Cantidad'];
		for ($i=0; $i<count($arreglo); $i++) { 
				$total=($arreglo[$i]['productoPrecio']*$arrego[$i]['Cantidad'])+$total;
		}
	$_SESSION['carrito']=$arreglo;
	echo $total;
?>