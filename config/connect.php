<?php
$hostname="localhost";
$user="root";
$password="";
$database="ppdb_aknl";
$connect = mysql_connect ($hostname,$user,$password);
if (!$connect){
	echo "koneksi gagal".mysql_error();
}
$connectdb = mysql_select_db($database);
if (!$connectdb){
	echo "Gagal Mengambil database";
}
function autogenerate($field,$tabel,$digit,$kode){
	$data = mysql_fetch_array(mysql_query("SELECT MAX(RIGHT($field,$digit)) FROM $tabel"));
	$id = (int)$data[0]+1;
	$id_baru = $kode.sprintf('%0'.$digit.'s',$id);
	echo $id_baru;

}
?>