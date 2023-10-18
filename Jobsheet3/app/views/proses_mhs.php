<?php
include '../classes/database.php';
$db=new database();


$aksi= $_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_mhs($_POST['nim'],$_POST['nama_mahasiswa'],$_POST['jurusan'],);
    header("location:tampil_mahasiswa.php?success=tambah");
}elseif($aksi=="update"){
    $db->update($_POST['nim'],$_POST['nama_mahasiswa'],$_POST['jurusan'],);
    header("location:tampil_mahasiswa.php?success=update");
}elseif($aksi=="hapus"){
    $db->delete($_GET['nim']);
    header("location:tampil_mahasiswa.php?success=hapus");
}