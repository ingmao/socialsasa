<?php
error_reporting(E_ALL);
require('clases/clasemetodos.php');
$objeto=new Clasemetodos;

if(isset($_POST['id_users'])){ 

		if($objeto->isertarpublicacion(array(htmlspecialchars(trim($_POST['id_users'])),htmlspecialchars(trim($_POST['publicacion']))))==true){
			
			echo json_encode("datos guardados");
			}else{
				
				echo json_encode("verificar datos");
				}
	
	}


?>