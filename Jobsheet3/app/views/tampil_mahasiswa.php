<?php

include '../classes/database.php';

$db=new database;

?>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <div class="px-3 py-3">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="tampil_mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dosen.php">Dosen</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>


<h3>Data Mahasiswa</h3>
<a class="btn btn-primary mb-3" href="input_mhs.php">Tambah</a>
<?php
error_reporting(E_ERROR | E_PARSE);

if ($_GET['success'] === "tambah"){
  echo '<div class="alert  alert-dismissible fade show bg-success" role="alert" >
  <strong>Berhasil Ditambahkan</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}elseif($_GET['success'] === "update"){
  echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Berhasil Diedit</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}elseif($_GET['success'] === "hapus"){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Berhasil Dihapus</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
'
;
} 
?>
<table class="table table-striped">
    <tr class="table-primary">
        <th >NO</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php
     $no=1;
    foreach($db->tampil_mahasiswa() as $x){
        ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama_mahasiswa'] ?></td>
        <td><?php echo $x['jurusan'] ?></td>
        <td>
            <a class="btn btn-warning" href="edit_mhs.php?nim=<?php echo $x['nim'];?>&aksi=edit">edit</a>
            <a class="btn btn-danger" href="proses_mhs.php?nim=<?php echo $x['nim'];?>&aksi=hapus" onclick="return confirm('Apakah anda ingin menghapus data ini')">hapus</a>
        </td>
        </tr>
        <?php
    }
    ?>
</table>
</div>