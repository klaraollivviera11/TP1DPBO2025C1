/*Saya Klara Ollivviera Augustine Gunawan dengan NIM 2306205 
mengerjakan soal Tugas Praktikum 1 dalam mata kuliah DPBO 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin */

public class Petshop{
    //atribut yang dibutuhkan
    private String id;
    private String nama;
    private String kategori;
    private int harga;

    //constructor
    public Petshop(){
        this.id = "";
        this.nama = "";
        this.kategori = "";
        this.harga = 0;
    }

    //constructor parameter
    public Petshop(String id, String nama, String kategori, int harga){
        this.id = id;
        this.nama = nama;
        this.kategori = kategori;
        this.harga = harga;
    }

    //getter & setter 
    public String getId(){
        return this.id;
    }

    public void setId(String id){
        this.id = id;
    }

    public String getNama(){
        return this.nama;
    }

    public void setNama(String nama){
        this.nama = nama;
    }
    public String getKategori(){
        return this.kategori;
    }

    public void setKategori(String kategori){
        this.kategori = kategori;
    }

    public int getHarga(){
        return this.harga;
    }

    public void setHarga(int harga){
        this.harga = harga;
    }

}