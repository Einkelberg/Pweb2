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
  ///properties
    public $nama;
    private $nim = "220302088";

 //method
    public function tampilkan_nama() {
        return "Nama saya Dzuky </br>";
     }
      function tampilkan_nim(){
        return " NIM saya ". $this->nim;
     }
    
}
//instantsiasi objek
$masdzuky = new mahasiswa();

echo $masdzuky->tampilkan_nama();
echo $masdzuky->tampilkan_nim();
?>
    
</body>
</html>