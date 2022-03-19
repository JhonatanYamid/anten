<?php 
$usuario="uapzoo2zxbxlibuj";
$pass="MnvnbSxmbYrjhVVZMdS0";
$servidor="bzkvh21dd5ogyaq4v9vn-mysql.services.clever-cloud.com";
$basedatos="bzkvh21dd5ogyaq4v9vn";

$conexion= mysqli_connect($servidor, $usuario, $pass) or die ("error en el servidor");
$bd= mysqli_select_db($conexion, $basedatos) or die ("error con la base de datos");


 ?>



 
