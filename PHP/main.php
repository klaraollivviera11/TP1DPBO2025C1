<!-- Saya Klara Ollivviera Augustine Gunawan dengan NIM 2306205 
mengerjakan soal Tugas Praktikum 1 dalam mata kuliah DPBO 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Petshop</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        img {
            width: 80px;
            height: auto;
        }
    </style>
</head>
<body>
    <?php
    require ('Petshop.php');

    $produkArray = [];//array untuk menyimpan list data

    //add produk
    $produkArray[] = new Petshop('01', 'RoyalCanin', 'MakananKering', 10000, 'foto/RoyalCanin.jpg');
    $produkArray[] = new Petshop('02', 'CatChoize', 'MakananBasah', 20000, 'foto/CatChoize.jpg');
    $produkArray[] = new Petshop('03', 'MeO', 'Snack', 3000, 'foto/MeO.jpg');
    ?>

    <!-- menampilkan data -->
    <h2 style="text-align: center;">View Data</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga (Rp)</th>
            <th>Foto</th>
        </tr>

        <?php foreach ($produkArray as $produk) { ?>
        <tr>
            <td><?php echo $produk->getId(); ?></td>
            <td><?php echo $produk->getNama(); ?></td>
            <td><?php echo $produk->getKategori(); ?></td>
            <td><?php echo number_format($produk->getHarga(), 0, ',', '.'); ?></td>
            <td>
                <img src="<?php echo $produk->getFoto(); ?>" alt="<?php echo $produk->getNama(); ?>">
            </td>
        </tr>
        <?php } ?>
    </table>
    
    <!-- edit data -->
    <h2 style="text-align: center;">Edit Data</h2>
    <?php
        //edit
        $target = '01'; //target ID produk yang akan diedit
        
        $found = 0;//flag untuk menentukan apakah ID produk yang dicari ada di dalam list atau tidak
        $i = 0;//iterator loop
        while($i < count($produkArray) && $found == 0){//mencari data yang akan diedit
            if($target == $produkArray[$i]->getId()){
                //mengubah data produk
                $produkArray[$i]->setId('01');
                $produkArray[$i]->setNama('RoyalCanon');
                $produkArray[$i]->setKategori('MakananKering');
                $produkArray[$i]->setHarga(20000);
                $produkArray[$i]->setFoto('foto/RoyalCanin.jpg');

                $found = 1;//diubah menjadi 1 (true)
            }
            $i++;
        }
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga (Rp)</th>
            <th>Foto</th>
        </tr>

        <?php foreach ($produkArray as $produk) { ?>
        <tr>
            <td><?php echo $produk->getId(); ?></td>
            <td><?php echo $produk->getNama(); ?></td>
            <td><?php echo $produk->getKategori(); ?></td>
            <td><?php echo number_format($produk->getHarga(), 0, ',', '.'); ?></td>
            <td>
                <img src="<?php echo $produk->getFoto(); ?>" alt="<?php echo $produk->getNama(); ?>">
            </td>
        </tr>
        <?php } 
            if($found == 0){//apabila false
                echo "<p style='text-align: center; color: red;'>Produk tidak ditemukan.</p>";
            }
        ?>
    </table>
        
    <!-- delete data -->
    <h2 style="text-align: center;">Delete Data</h2>
    <?php
        //delete
        $target = '03';//target ID produk yang akan dihapus
        
        $found = 0;//flag untuk menentukan apakah ID produk yang dicari ada di dalam list atau tidak
        $i = 0;//iterator loop
        while($i < count($produkArray) && $found == 0){//mencari data yang akan diedit
            if($target == $produkArray[$i]->getId()){
                unset($produkArray[$i]);//menghapus data

                $found = 1;//diubah menjadi 1 (true)
            }
            $i++;
        }
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga (Rp)</th>
            <th>Foto</th>
        </tr>

        <?php foreach ($produkArray as $produk) { ?>
        <tr>
            <td><?php echo $produk->getId(); ?></td>
            <td><?php echo $produk->getNama(); ?></td>
            <td><?php echo $produk->getKategori(); ?></td>
            <td><?php echo number_format($produk->getHarga(), 0, ',', '.'); ?></td>
            <td>
                <img src="<?php echo $produk->getFoto(); ?>" alt="<?php echo $produk->getNama(); ?>">
            </td>
        </tr>
        <?php } 
            if($found == 0){//apabila false
                echo "<p style='text-align: center; color: red;'>Produk tidak ditemukan.</p>";
            }
        ?>
    </table>

    <h2 style="text-align: center;">Search Data</h2>
    <?php
        $target = '02';//target ID produk yang akan dicari

        $found = 0;//flag untuk menentukan apakah ID produk yang dicari ada di dalam list atau tidak
        $i = 0;//iterator loop
        while($i < count($produkArray) && $found == 0){//mencari data yang akan diedit
            if($target == $produkArray[$i]->getId()){
                $found = 1;//diubah menjadi 1 (true)
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga (Rp)</th>
            <th>Foto</th>
        </tr>
        <tr>
            <td><?php echo $produk->getId(); ?></td>
            <td><?php echo $produk->getNama(); ?></td>
            <td><?php echo $produk->getKategori(); ?></td>
            <td><?php echo number_format($produk->getHarga(), 0, ',', '.'); ?></td>
            <td><img src="<?php echo $produk->getFoto(); ?>" alt="<?php echo $produk->getNama(); ?>"></td>
        </tr>
    </table>
    <?php
            }
            $i++;
        }

        if($found == 0){//apabila false
            echo "<p style='text-align: center; color: red;'>Produk tidak ditemukan.</p>";
        }
    ?>
</body>
</html>