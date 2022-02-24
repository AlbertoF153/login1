<?php
@ $db = new mysqli ('localhost', 'root', '', 'login1');
if(mysqli_connect_errno()){
	echo 'Conexion fallida:',mysqli_connect_errno();
exit();}
	?>