<?php

class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "prak3";
    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->db);
    }
    function tampil_mahasiswa(){
        $data = mysqli_query($this->koneksi,"select * from mahasiswa");
        while($d=mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_mhs($nim,$nama_mahasiswa,$jurusan){
        mysqli_query($this->koneksi,"insert into mahasiswa (nim,nama_mahasiswa,jurusan) values('$nim','$nama_mahasiswa','$jurusan')");
    }
    function edit($nim){
        $data = mysqli_query($this->koneksi,"select * from mahasiswa where nim ='$nim'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    
    function update($nim, $nama_mahasiswa, $jurusan){
        mysqli_query($this->koneksi,"update mahasiswa set nim='$nim' ,nama_mahasiswa='$nama_mahasiswa',jurusan='$jurusan' where nim='$nim'");
    }
    function delete($nim){
        mysqli_query($this->koneksi,"delete from mahasiswa where nim='$nim'");
    }



    function tampil_dosen(){
        $data = mysqli_query($this->koneksi,"select * from dosen");
        while($d=mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_dosen($nipd,$nama_dosen,$alamat){
        mysqli_query($this->koneksi,"insert into dosen (nipd,nama_dosen,alamat) values('$nipd','$nama_dosen','$alamat')");
    }
    function edit_dosen($nipd){
        $data = mysqli_query($this->koneksi,"select * from dosen where nipd ='$nipd'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    
    function update_dosen($nipd, $nama_dosen, $alamat){
        mysqli_query($this->koneksi,"update dosen set nipd='$nipd' ,nama_dosen='$nama_dosen',alamat='$alamat' where nipd='$nipd'");
    }
    function delete_dosen($nipd){
        mysqli_query($this->koneksi,"delete from dosen where nipd='$nipd'");
    }
}
?>