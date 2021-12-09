## Nama App

Winance App

## Description

Winance merupakan sebuah website tentang financial advice dimana pada website ini sementara hanya untuk mendata seluruh member yang terdaftar pada website tersebut

## Author 

Anggit Pambudi Hutomo

## Penjelasan Program

Saat Program Dijalankan halaman pertama yang muncul yaitu halaman awal atau landing page, dimana pada halaman tersebut terdapat beberapa navbar yang bisa diakses dan
mengarahkan user seperti dashboard atau login. namun untuk bagian tersebut user harus login terlebih dahulu, jika user belum memiliki akun untuk login maka user dapat
mendaftar pada halaman register. setelah berhasil mendaftar dan login. maka otomatis langsung diarahkan ke halaman dashboard yang dimana akan muncul beberapa data
yang sudah ada. user dapat menambah, mengedit, dan menghapus data pada data table. dan fitur yang terakhir yaitu ada pada bagian settings dimana user dapat mengedit data login serta dapat menambahkan foto profil untuk profil yang dibuat.

## Apps

folder apps adalah nanti dimana sebuah project small web dirancang, atau di atur mulai dari http, model, provider.

## Apps/http

Direktori ini merupakan direktori yang dibuat secara khusus untuk menyimpan seluruh file-file yang berkaitan dengan proses request dan response Http.
ada 3 sub direktori yaitu controllers, middleware, dan requests.
* Controllers berisi tentang class controller yang kita buat.
* Middleware adalah sebuah class yang akan dieksekusi sebelum http request yang masuk diberikan kepada controller
* Requests adalah sebuah class yang menerima form request yang dikirim oleh web browser

## database/migration

folder ini berisikan file-file migration yang digenerate oleh laravel pada saat kita menjalankan perintah php artisan make:migration

## public

pada folder ini berisi tentang resource aplikasi yang dapat diakses pada web seperti image, js, dan css.

## routes

folder routes ini adalah untuk mengatur path atau arah routing pada apps

## views

folder view ini adalah dimana hal yang berkaitan dengan html atau template yang akan di tampilkan pada halaman user
