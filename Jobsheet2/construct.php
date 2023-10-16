<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <?php
    class mahasiswa {
  
    var $nim;
    var $nama;
    var $alamat;    

    function tampil_nama() {
        return "nama saya Dzuky </br>";
    }
    function __construct(){
        echo "saya mahasiswa TI";
        echo "</br>";
    }function __destruct(){
        echo "PNC";
        echo "</br>";
    }
    function tampil_alamat() {
        //isi method
    } 
    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menjoki </br>";

    }
}

$masdzuky = new mahasiswa();

echo $masdzuky->tampil_nama();
echo $masdzuky->tampil_mahasiswa();
?>
    
</body>
</html>