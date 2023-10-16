<?php
class manusia{

    public $nama_saya;
    protected $alamat_saya = "Gandrungmangu";


    function panggil_nama($saya){
        $this->nama_saya= $saya;
    }
    function panggil_alamat(){
        return $this->alamat_saya;
        
    }

}

class mahasiswa extends manusia{
    public $nama_mahasiswa;
    private $nim_mahasiswa = "220302088";

    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa= $mahasiswa;
        
    }
    function panggil_nim(){
        return $this->nim_mahasiswa;
        
    }
}

$masdzuky = new mahasiswa();

$masdzuky->panggil_nama("Mas Dzuky Ar-Rouf");
$masdzuky->panggil_mahasiswa("Mas Dzuky");


echo "nama lengkap saya : " . $masdzuky->nama_saya . "</br>";
echo "nama depan saya : " . $masdzuky->nama_mahasiswa . "</br>";
echo $masdzuky->panggil_nim();
echo "</br>"
echo $masdzuky->panggil_alamat();

?>