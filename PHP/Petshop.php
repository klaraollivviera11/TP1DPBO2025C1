<!-- Saya Klara Ollivviera Augustine Gunawan dengan NIM 2306205 
mengerjakan soal Tugas Praktikum 1 dalam mata kuliah DPBO 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin -->

<?php
class Petshop{
    private $id = "";
    private $nama = "";
    private $kategori = "";
    private $harga = 0;
    private $foto = "";

    public function __construct($id = "", $nama = "", $kategori = "", $harga = 0, $foto = ""){
        $this->id = $id;
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->harga = $harga;
        $this->foto = $foto;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
    public function setKategori($kategori){
        $this->kategori = $kategori;
    }

    public function getKategori(){
        return $this->kategori;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getFoto(){
        return $this->foto;
    }
}
?>