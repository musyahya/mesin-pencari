<?php
error_reporting(0);
header('Content-Type: application/json; charset=utf8');
header('Acces-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disporsi,Content-Deskription');
//connection
include('connection.php');
//sql
 
$sql = "select * from obat";
$query = mysql_query($sql) or die(mysql_error());
$res[obat]=array();
while($data = mysql_fetch_array($query))
{
$ft[kode]=$data[kode];
$ft[obat]=$data[obat];
$ft[produsen]=$data[produsen];
$ft[satuan]=$data[satuan];
$ft[harga]=$data[harga];
array_push($res["obat"],$ft);
}
echo json_encode($res,JSON_PRETTY_PRINT);
?>