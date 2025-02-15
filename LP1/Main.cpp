#include "Petshop.cpp"
#include <iostream>
#include <list>

using namespace std;

int main(){
    string id, nama, kategori;
    int harga = 0;

    list<Petshop> listProduk;

    cout << "1. Tambah\n2. Lihat\n3. Edit\n4. Hapus\n5. Cari\n6. Keluar\n";

    int pilihan = 0;
    do{
        cout << "Pilih: ";
        cin >> pilihan;
        cout << "\n";

        if(pilihan == 1){//tambah
            cout << "Masukan data\n";

            Petshop temp;
            cout << "ID: "; cin >> id;
            cout << "Nama: "; cin >> nama;
            cout << "Kategori: "; cin >> kategori; 
            cout << "Harga: "; cin >> harga;

            temp.set_id(id);
            temp.set_nama(nama);
            temp.set_kategori(kategori);
            temp.set_harga(harga);
            listProduk.push_back(temp);

            cout << "Data berhasil dimasukan.\n\n";
        }else if(pilihan == 2){//lihat
            if(listProduk.empty()){
                cout << "Tidak ada produk.\n\n";
            }else{
                cout << "List Data Produk:\n";
                for(list<Petshop>::iterator i = listProduk.begin(); i != listProduk.end(); i++){
                    cout << "ID: " << i->get_id() << "\nNama: " << i->get_nama() << "\nKategori: " << i->get_kategori() << "\nHarga: " << i->get_harga() << "\n" << endl;
                }
            }
        }else if(pilihan == 3){//edit
            string target;
            cout << "Masukan ID produk yang ingin diedit\n";
            cin >> target;

            int found = 0;

            list<Petshop>::iterator i = listProduk.begin();
            while(i != listProduk.end() && found == 0){
                if(i->get_id() == target){
                    cout << "Masukan perubahan data\n";

                    cout << "Nama: "; cin >> nama;
                    cout << "Kategori: "; cin >> kategori; 
                    cout << "Harga: "; cin >> harga;
                    cout << "\n";

                    i->set_nama(nama);
                    i->set_kategori(kategori);
                    i->set_harga(harga);

                    found = 1;
                }else{
                    ++i;
                }
            }

            if(found == 0){
                cout << "ID produk tidak ditemukan.\n\n";
            }
        }else if(pilihan == 4){//hapus
            string target;
            cout << "Masukan ID produk yang ingin dihapus\n";
            cin >> target;

            int found = 0;
        
            list<Petshop>::iterator i = listProduk.begin();
            while(i != listProduk.end() && found == 0){
                if(i->get_id() == target){
                    i = listProduk.erase(i);
                    cout << "Produk berhasil dihapus.\n\n";
                    found = 1;
                }else{
                    ++i;
                }
            }

            if(found == 0){
                cout << "ID produk tidak ditemukan.\n\n";
            }
        }else if(pilihan == 5){//cari
            string target;
            cout << "Masukan ID produk yang ingin dicari\n";
            cin >> target;

            int found = 0;

            list<Petshop>::iterator i = listProduk.begin();
            while(i != listProduk.end() && found == 0){
                if(i->get_id() == target){
                    found = 1;
                }else{
                    ++i;
                }
            }

            if(found == 0){
                cout << "ID produk tidak ditemukan.\n\n";
            }else{
                cout << "ID produk ditemukan.\n\n";
            }
        }
    }while(pilihan != 6);

    cout << "Terima kasih.\n";
}
