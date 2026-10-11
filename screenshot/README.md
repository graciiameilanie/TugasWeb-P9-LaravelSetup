# TugasWeb-P9-LaravelSetup

Tugas Rutin 9 Pemrograman Web tentang setup Laravel.

Nama: Gracia Meilanie Sinaga  
Program Studi: Ilmu Komputer, Universitas Negeri Medan

## Langkah Instalasi

Untuk membuat dan menjalankan project Laravel ini, langkah-langkah yang saya lakukan yaitu:

1. Memastikan PHP 8.2 atau versi yang lebih baru dan Composer sudah terpasang.
2. Clone repository, kemudian masuk ke folder project.
3. Menjalankan `composer install` untuk menginstall package yang dibutuhkan.
4. Menyalin file `.env.example` menjadi `.env`.
5. Menjalankan `php artisan key:generate`.
6. Membuat database dengan nama `laravel_p9` di phpMyAdmin.
7. Mengatur database pada file `.env`, yaitu:
   - DB_CONNECTION=mysql
   - DB_HOST=127.0.0.1
   - DB_PORT=3306
   - DB_DATABASE=laravel_p9
   - DB_USERNAME=root
   - DB_PASSWORD=
8. Menjalankan `php artisan migrate` untuk membuat tabel yang dibutuhkan.
9. Menjalankan `php artisan serve`.
10. Membuka `http://127.0.0.1:8000` di browser untuk melihat hasil project.

## Route

Pada project ini saya membuat 3 route, yaitu:

- `/` untuk halaman beranda.
- `/about` untuk halaman tentang saya.
- `/contact` untuk halaman kontak.

Setiap route mengirimkan data berupa array ke halaman Blade. Data tersebut kemudian ditampilkan pada halaman masing-masing.

## Struktur Folder

Beberapa folder dan file yang digunakan pada project ini yaitu:

- `app/Http/Controllers` digunakan untuk menyimpan controller yang mengatur proses dari website.
- `app/Models` digunakan untuk menyimpan model yang berhubungan dengan database.
- `routes/web.php` digunakan untuk membuat dan mengatur route.
- `resources/views` digunakan untuk menyimpan halaman yang dibuat menggunakan Blade.
- `database/migrations` digunakan untuk mengatur tabel yang ada pada database.
- `config` berisi file pengaturan dari Laravel.
- `public` merupakan folder yang digunakan untuk bagian yang bisa diakses oleh pengguna.
- `vendor` berisi package yang sudah diinstall menggunakan Composer.
- `.env` digunakan untuk menyimpan pengaturan project, termasuk pengaturan database.

## Screenshot

### Halaman Welcome

![Halaman Welcome](screenshots/welcome.png)

### Halaman Beranda

![Halaman Beranda](screenshots/home.png)

### Halaman Tentang Saya

![Halaman Tentang Saya](screenshots/about.png)

### Halaman Kontak

![Halaman Kontak](screenshots/contact.png)