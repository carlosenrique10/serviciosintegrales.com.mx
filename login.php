<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$user_name=null;
			$sql1= "select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				$user_name=$r["username"];
				break;
			}

			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='plogin.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$_SESSION["$user_name"]=$user_name;
				print "<script>window.location='index.php';</script>";		
			}
		}
	}
}



?>