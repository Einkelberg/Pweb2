<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="px-4 py-3">
<h3>Tambah  Mahasiswa</h3>
<div class="card px-3 py-3" style="width: 30%;">

<form action="proses_mhs.php?aksi=tambah" method="post">
    <table class="table table-borderless">
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_mahasiswa"></td>
        </tr>
        <tr>
            <td>Jurursan</td>
            <td><input type="text" name="jurusan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>
</table>
</form>
</div>
</div>