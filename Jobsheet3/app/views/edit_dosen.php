<?php
include '../classes/database.php';
$db=new database();
?>
<h3>Edit Dosen</h3>


<form action="proses_dosen.php?aksi=update" method="post">
    <?php
    foreach($db->edit_dosen($_GET['nipd']) as $d){

?>
    <table border="0">
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="nipd" value="<?php echo $d['nipd']?>">
                <input type="text" name="nipd" value="<?php echo $d['nipd']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_dosen" value="<?php echo $d['nama_dosen']?>"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="10"></textarea>
        </td>
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
