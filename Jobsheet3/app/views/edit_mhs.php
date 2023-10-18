<?php
include '../classes/database.php';
$db=new database();
?>
<h3>Edit Mahasiswa</h3>


<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach($db->edit($_GET['nim']) as $d){

?>
    <table border="0">
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="nim" value="<?php echo $d['nim']?>">
                <input type="text" name="nim" value="<?php echo $d['nim']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_mahasiswa" value="<?php echo $d['nama_mahasiswa']?>"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>
</table>
<?php
}
?>
</form>
