/*Saya Klara Ollivviera Augustine Gunawan dengan NIM 2306205 
mengerjakan soal Tugas Praktikum 1 dalam mata kuliah DPBO 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin */

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;
import java.util.Scanner;

public class Main{
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);//scanner

        //atribut
        String id, nama, kategori;
        int harga = 0;

        //list untuk menyimpan produk
        List<Petshop> listProduk = new ArrayList<>();

        System.out.println("1. Tambah\n2. Lihat\n3. Edit\n4. Hapus\n5. Cari\n6. Keluar\n");
        
        //untuk pilihan user
        int pilihan = 0;
        do{ 
            System.out.println("Masukan pilhan menu: ");
            try{
                pilihan = sc.nextInt();
            }catch (Exception e){
            }
            
            if(pilihan == 1){//add
                System.out.println("Masukan data:\n");

                //meminta masukan data ke user
                System.out.print("ID: "); id = sc.next();
                System.out.print("Nama: "); nama = sc.next();
                System.out.print("Kategori: "); kategori = sc.next();
                System.out.print("Harga: "); 
                try{
                    harga = sc.nextInt();
                }catch (Exception e){
                }
                
                Petshop addProduk = new Petshop();
                addProduk.setId(id); addProduk.setNama(nama); addProduk.setKategori(kategori); addProduk.setHarga(harga);
                listProduk.add(addProduk);

                System.out.println("Produk berhasil ditambahkan.\n");
            }else if(pilihan == 2){//view
                if(listProduk.isEmpty()){//apabila list kosong
                    System.out.println("Tidak ada produk.\n");
                }else{//apabila tidak kosong
                    System.out.println("List Data Produk:\n");

                    for(Petshop produk : listProduk){//looping untuk semua list data
                        System.out.println("ID: " + produk.getId());
                        System.out.println("Nama: " + produk.getNama());
                        System.out.println("Kategori: " + produk.getKategori());
                        System.out.println("Harga: " + produk.getHarga() + "\n");
                    }
                }
            }else if(pilihan == 3){//edit
                String target;//untuk ID produk yang ingin diedit
                System.out.println("Masukan ID produk: ");

                target = sc.next();

                //mencari data yang ingin diubah
                int found = 0;//flag untuk menentukan apakah ID produk yang dicari ada di dalam list atau tidak
                Iterator<Petshop> iterator = listProduk.iterator();
                while(iterator.hasNext() && found == 0){
                    Petshop produk = iterator.next();
                    
                    if(target.equals(produk.getId())){
                        System.out.println("Masukan perubahan data:\n");

                        //meminta user untuk mengubah data
                        System.out.print("ID: "); produk.setId(sc.next());
                        System.out.print("Nama: "); produk.setNama(sc.next());
                        System.out.print("Kategori: "); produk.setKategori(sc.next());
                        System.out.print("Harga: "); 
                        try{
                            produk.setHarga(sc.nextInt());
                        }catch (Exception e){
                        }

                        System.out.println("Data produk berhasil diubah.\n");

                        found = 1;//diubah menjadi 1 (true)
                    }
                }

                if(found == 0){//apabila false
                    System.out.println("ID produk tidak ditemukan.\n");
                }                
            }else if(pilihan == 4){//delete
                String target;//untuk ID produk yang ingin dihapus
                System.out.println("Masukan ID produk: ");

                target = sc.next();
                
                //mencari data yang ingin diubah
                int found = 0;//flag untuk menentukan apakah ID produk yang dicari ada di dalam list atau tidak
                Iterator<Petshop> iterator = listProduk.iterator();
                while(iterator.hasNext() && found == 0){
                    Petshop produk = iterator.next();
                    
                    if(target.equals(produk.getId())){
                        iterator.remove();//hapus data dalam array
                        System.out.println("Data produk berhasil dihapus.\n");

                        found = 1;//diubah menjadi 1 (true)
                    }
                }

                if(found == 0){//apabila false
                    System.out.println("ID produk tidak ditemukan.\n");
                }
            }else if(pilihan == 5){//search
                String target;//untuk ID produk yang ingin dicari
                System.out.println("Masukan ID produk: ");

                target = sc.next();

                //mencari data yang ingin diubah
                int found = 0;//flag untuk menentukan apakah ID produk yang dicari ada di dalam list atau tidak
                Iterator<Petshop> iterator = listProduk.iterator();
                while(iterator.hasNext() && found == 0){
                    Petshop produk = iterator.next();
                    
                    if(target.equals(produk.getId())){
                        //menampilkan data yang dicari
                        System.out.println("Data produk berhasil ditemukan.\n");
                        System.out.println("ID: " + produk.getId());
                        System.out.println("Nama: " + produk.getNama());
                        System.out.println("Kategori: " + produk.getKategori());
                        System.out.println("Harga: " + produk.getHarga() + "\n");

                        found = 1;//diubah menjadi 1 (true)
                    }
                }

                if(found == 0){//apabila false
                    System.out.println("ID produk tidak ditemukan.\n");
                }
            }
        }while(pilihan != 6);//while brejalan hingga masukan user 6 (exit)

        sc.close();
    }
}