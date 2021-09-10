<?php
class Manusia {
    public $tgl_lahir;
    protected $jenis_kelamin;
    public $umur;
    public $status;

    public function semangat() {
        return " Yuk semangat";
    }
    public function bisa() {
        return " Yuk bisa, Suka ngeluh tapi gppa <3";
    }
    public function ambil_status ($status_saat_ini){
        return $this->status = $status_saat_ini;
        //$status visibilitas private
        //makan harus dibuatkan method untuk mengakses
    }
    public function statusku(){
        return "Mahasiswa di Universitas Sebelas Maret prodi Teknik Informatika";
    }
}

class wanita extends Manusia {
    public function jk ($jk){
        //$jk visibilitas protected
        //maka harus dibuatkan method untuk mengakses dari turunan
        return $this-> jenis_kelamin = $jk;
    }
    
    public function data_diri(){
    $data1 ="<br/>Aku adalah Nindya Vinalia Mashar Meswari <br/>yang lahir $this->tgl_lahir<br/>sampai sekarang Alhamdulillah masih $this->status<br/>Umur saya hampir 20 tahun di semester 3 ini <br/>".$this->jenis_kelamin;
    return$data1;

    }
}
    $saya = new wanita;
    $saya->tgl_lahir = "20 September 2001";
    $saya->jk = ("Perempuan");
    $saya->ambil_status("Mahasiswa di Universitas Sebelas Maret prodi Teknik Informatika");

/*
$saya->status = "Mahasiswa di Universitas Sebelas Maret prodi Teknik Informatika";
jika ditulis akan error karena Private
*/
echo $saya->data_diri();
echo $saya->semangat();
echo $saya->bisa();

?>