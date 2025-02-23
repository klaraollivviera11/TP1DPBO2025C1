# Saya Klara Ollivviera Augustine Gunawan dengan NIM 2306205 
# mengerjakan soal Tugas Praktikum 1 dalam mata kuliah DPBO 
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

# import class 
from Petshop import Petshop

# instansiasi
produk = Petshop()

# array menyimpan list produk
listProduk = []

print("1. Tambah\n2. Lihat\n3. Edit\n4. Hapus\n5. Cari\n6. Keluar\n")
pilihan = 0 # untuk pilihan user

while pilihan != 6: # while berjalan apabila masukan user bukan 6 (exit)
    print("Masukan pilhan menu: ")
    pilihan = int(input())

    if pilihan == 1:# add
        print("Masukan data:\n")

        # masukan user
        id = input("ID: ")
        nama = input("Nama: ")
        kategori = input("Kategori: ")
        harga = int(input("Harga: "))
        
        produk_baru = Petshop(id, nama, kategori, harga)
        listProduk.append(produk_baru)

        print("Produk berhasil ditambahkan.\n")
    elif pilihan == 2:# view
        if len(listProduk) == 0:# apabila list kosong
            print("Tidak ada produk.\n")
        else:
            print("List Data Produk:\n")

            for produk in listProduk:# menampilkan seluruh data dalam list
                print(f"ID: {produk.getId()}")
                print(f"Nama: {produk.getNama()}")
                print(f"Kategori: {produk.getKategori()}")
                print(f"Harga: {produk.getHarga()}\n")
    elif pilihan == 3:# edit
        target = input("Masukan ID produk: ")# user memasukan target ID yang ingin diubah datanya

        found = 0# flag untuk menentukan apakah ID produk yang dicari ada di dalam list atau tidak

        i = 0# iterator loop
        for produk in listProduk:# mencari data yang ingin diubah
            if produk.getId() == target:
                print("Masukan perubahan data:\n")
                
                # meminta user untuk mengubah data
                produk.setId(input("ID: "))
                produk.setNama(input("Nama: "))
                produk.setKategori(input("Kategori: "))
                produk.setHarga(int(input("Harga: ")))

                print("Data produk berhasil diubah.\n")

                found = 1# diubah menjadi 1 (true)
            i+=1

        if found == 0:# apabila false
            print("ID produk tidak ditemukan.\n")
    elif pilihan == 4:# delete
        target = input("Masukan ID produk: ")# user memasukan target ID yang ingin dihapus datanya

        found = 0# flag untuk menentukan apakah ID produk yang dicari ada di dalam list atau tidak

        i = 0# iterator loop
        for produk in listProduk:# mencari data yang ingin diubah
            if produk.getId() == target:
                listProduk.pop(i)# menghapus data

                print("Data produk berhasil dihapus.\n")

                found = 1# diubah menjadi 1 (true)
            i+=1
        
        if found == 0:# apabila false
            print("ID produk tidak ditemukan.\n")
    elif pilihan == 5:
        target = input("Masukan ID produk: ")# user memasukan target ID yang ingin dicari datanya

        found = 0# flag untuk menentukan apakah ID produk yang dicari ada di dalam list atau tidak

        i = 0# iterator loop
        for produk in listProduk:# mencari data yang ingin diubah
            if produk.getId() == target:
                print("Data produk berhasil ditemukan.\n")

                # menampilkan data yang dicari
                print(f"ID: {produk.getId()}")
                print(f"Nama: {produk.getNama()}")
                print(f"Kategori: {produk.getKategori()}")
                print(f"Harga: {produk.getHarga()}\n")

                found = 1# diubah menjadi 1 (true)
            i+=1
        
        if found == 0: # apabila false
            print("ID produk tidak ditemukan.\n")