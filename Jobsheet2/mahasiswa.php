<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <?php
    class dosen {
  
    var $nidn;
    var $nama;
    var $prodi;

 
    function tampil_nama() {
        return "nama saya Dzuky";
     }
    function tampil_nidn() {
        //isi method
    } 
}

$masdzuky = new dosen();

echo $masdzuky->tampil_nama();
?>
    
</body>
</html>