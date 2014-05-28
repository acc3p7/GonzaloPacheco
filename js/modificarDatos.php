<?php
session_start();

	$arreglo=$_SESSION['carrito'];
	$total=0;
	$numero=0;
	for ($i=0; $i<count($arreglo); $i++) { 
		if ($arreglo[$i]['ProductoID']==$_POST['Id']){
			$numero=$i;
		}	
	}
	$arreglo[$numero]['ProductoCantidad']=$_POST['Cantidad'];
		for ($i=0; $i<count($arreglo); $i++) { 
				$total=($arreglo[$i]['ProductoPrecio']*$arrego[$i]['ProductoCantidad'])+$total;
		}
	$_SESSION['carrito']=$arreglo;
	echo $total;
?>