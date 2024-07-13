# APLIKASI TRANSAKSI PEMBAYARAN SPP

Aplikasi pembayaran SPP yang kami buat dengan tujuan tugas pemprograman web. Dalam aplikasi ini, admin dapat melihat jumlah tagihan SPP yang harus dibayarkan, melakukan pembayaran SPP dengan mudah dan cepat, serta memperoleh informasi tentang status pembayaran SPP secara real-time. Selain itu, dalam aplikasi ini juga terdapat fitur seperti melihat tunggakan siswa,tunggakan kelas, jumlah pembayaran siswa, jumlah pembayaran kelas serta cetak kwitansi, laporan, dan rekap pembayaran.

Aplikasi pembayaran SPP saya juga dilengkapi dengan fitur laporan pembayaran SPP, yang memungkinkan para admin memantau dan melacak pembayaran SPP yang telah dilakukan. Dalam laporan ini, terdapat informasi detail tentang tanggal pembayaran, jumlah yang dibayarkan, dan status pembayaran. Dengan fitur ini, para siswa dan orang tua dapat dengan mudah mengakses catatan pembayaran SPP mereka dan memastikan bahwa pembayaran SPP telah dilakukan dengan benar. Dalam rangka meningkatkan kualitas layanan.

kelompok 10:
solihin
ravi
rikki

## Teknologi
1. [Laravel 9](https://laravel.com/)
2. [Data Tabel](https://datatables.net/)
3. [Select 2](https://select2.org/)
4. [Bootstrap 5](https://getbootstrap.com/)

## Fitur

1. Sistem login 
2. Multiusers
3. Multiroles
4. Homepage dan Dashboard
5. Manajement Transaksi
6. Cetak Laporan,Kwitansi,Rekap, dan Tunggakan
7. Manajement Siswa, Kelas, Petugas, dan Spp
8. Pelacakan Transaksi Pembayaran
9. ...dll

## Cara Install dan Mengatur Aplikasi
 buka terminal seperti bash, zsh, command prompt atau powershell dan nstall dependency composer dengan command berikut :
```bash
composer install && composer update
```
Lanjut, copy file `.env.example` dengan nama `.env` sebagai berikut:
```bash
cp .env.example .env
```
Kemudian, silahkan ganti credentials database di file .env nya seperti
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=xxx
DB_USERNAME=root
DB_PASSWORD=
```
untuk panduan atau dokumentasi mengenai setup database pada file `.env` bisa kalian baca pada dokumentasi resmi laravelnya bang yahh.., [klik disini.](https://laravel.com/docs/9.x/database)

Kemudian, silahkan migrate semua database di project ini dengan menggunakan artisan command:
```bash
php artisan migrate
```
Lanjut, generate aplikasi key untuk keamanan pada project laravel dengan menggunakan artisan command berikut:
```bash
php artisan key:generate
# atau 
php artisan key:generate --show
```
Langkah Terakhir, silahkan jalankan local development server Laravel dengan menggunakan artisan command sebagai berikut:
```bash
php artisan serve
```
Project ini akan berjalan di `https://localhost:8000`





