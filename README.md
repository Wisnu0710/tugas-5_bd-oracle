# 1. Membuat Koneksi Oracle Menggunakan PHP

Hal yang pertama dilakukan untuk membuat program Oracle menggunakan PHP adalah dengan mengkoneksikan Oracle ke PHP.

<?php   $user="wisnu_938";   $pass="wisnu_938";   $database="LOCALHOST/XE";   $con = oci_connect($user, $pass, $database);   if($con){    echo "Koneksi Sukses";  }   else{    $err = oci_error();    echo "Gagal". $err['text'];   } ?>

![koneksi php](https://user-images.githubusercontent.com/46640078/146669901-92f363ae-6f7b-4e09-a630-c5cbcc3562a1.png)

# 2. Membuat view
Selanjutnya adalah untuk membuat view.

CREATE OR REPLACE view apotek_mawar as SELECT * FROM obat WHERE jenis = 'tablet'; 
select * from apotek_mawar;

CREATE OR REPLACE view karyawan as SELECT * FROM pegawai WHERE jabatan = 'perawat';
select * from karyawan;

CREATE OR REPLACE view pelanggan as SELECT * FROM pembeli WHERE jk = 'P';
select * from pelanggan;

CREATE OR REPLACE view memesan as SELECT * FROM pesanan WHERE id_pesanan = 20201;
select * from memesan;

![view 1](https://user-images.githubusercontent.com/46640078/146670022-4f9b845d-c026-48a6-88bb-f53c04c8dedc.png)
![view 2](https://user-images.githubusercontent.com/46640078/146670026-804a8484-4e67-4cc0-a068-9e3bc881083b.png)![view 3 4](https://user-images.githubusercontent.com/46640078/146670030-2f53666e-9ccb-4ce6-8d79-9f27289edd8d.png)

# 3. Membuat Halaman Home/Beranda
Selanjutnya kita akan coba menampilkan view yang sudah dibuat kedalam project PHP menggunakan sublime Text 3. Berikut tampilannya!

![Screenshot (10)](https://user-images.githubusercontent.com/46640078/146670072-819bef52-7802-42eb-acea-f53d14971e2c.png)

# 4. Membuat Tabel Master
Setelah sukses koneksi, membuat view dan menjalankan di PHP maka kali ini kita akan membuat Tabel Master / Data Tabel dari Database yang sudah kita buat di Oracle.
![Screenshot (11)](https://user-images.githubusercontent.com/46640078/146670116-0af8f8c8-c11a-4f0c-b210-be80a3aacf15.png)

![Screenshot (12)](https://user-images.githubusercontent.com/46640078/146670119-b5bb9f0c-6069-4f0d-be29-370342a938a9.png)

![Screenshot (13)](https://user-images.githubusercontent.com/46640078/146670124-91049363-c02c-4447-a0d4-571c8d16b7b8.png)

![Screenshot (14)](https://user-images.githubusercontent.com/46640078/146670128-3cbb6711-9906-4817-8293-d20240a4bf2e.png)



