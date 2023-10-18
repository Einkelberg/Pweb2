<?php 
include '../classes/database.php';
$db=new database();


$aksi= $_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_dosen($_POST['nipd'],$_POST['nama_dosen'],$_POST['alamat'],);
    header("location: tampil_dosen.php?success=tambah");
}elseif($aksi=="update"){
    $db->update_dosen($_POST['nipd'],$_POST['nama_dosen'],$_POST['alamat'],);
    header("location: tampil_dosen.php?success=update");
}elseif($aksi=="hapus"){
    $db->delete_dosen($_GET['nipd']);
    header("location: tampil_dosen.php?success=hapus");

}
