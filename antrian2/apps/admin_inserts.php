<?php
include "mysql_connect.php";
for ($i=1; $i <=100 ; $i++) { 
	# code...
	$tgl = date('Y-m-d h:i:s');
	$results = $mysqli->query("INSERT INTO data_antrian (waktu,status) VALUES ('$tgl','3')");
}
echo json_encode( array('status'=> "Data Berhasil di input") );
include 'mysql_close.php';
