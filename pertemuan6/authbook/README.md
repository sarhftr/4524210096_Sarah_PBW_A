
# AuthBook — Praktikum Laravel & Filament 3.3

**Nama:** Sarah Syafitri Hilmi  
**NPM:** 4524210096

## 1. Deskripsi

AuthBook merupakan proyek praktikum pengembangan aplikasi web menggunakan Laravel dan Filament 3.3. Proyek ini mencakup pengelolaan data buku dan penulis, database, autentikasi admin, serta pengaturan hak akses menggunakan Policies.

## 2. Persiapan Instalasi

Pastikan perangkat telah memiliki PHP, Composer, dan database SQLite.

Periksa versi PHP dan Composer:

```bash
php -v
composer -V
```

## 3. Setup Project Laravel

Buat proyek Laravel:

```bash
composer create-project laravel/laravel authbook
```

Masuk ke direktori proyek:

```bash
cd authbook
```

Jalankan server Laravel:

```bash
php artisan serve
```

Akses aplikasi melalui:

```text
http://127.0.0.1:8000
```

### Konfigurasi Database

Atur konfigurasi database pada file `.env`:

```env
DB_CONNECTION=sqlite
```

Pastikan file `database/database.sqlite` tersedia. Jika belum ada, buat file tersebut terlebih dahulu.

Jalankan migration:

```bash
php artisan migrate
```

## 4. Model dan Database

Buat model Author dan Book beserta migration:

```bash
php artisan make:model Author -m
php artisan make:model Book -m
```

Migration digunakan untuk menentukan struktur tabel, sedangkan model digunakan untuk berinteraksi dengan data.

Setelah migration selesai dikonfigurasi, jalankan:

```bash
php artisan migrate
```

## 5. Factory dan Seeder

Buat factory untuk menghasilkan data dummy:

```bash
php artisan make:factory AuthorFactory
php artisan make:factory BookFactory
```

Buat seeder untuk memasukkan data awal:

```bash
php artisan make:seeder AuthorSeeder
php artisan make:seeder BookSeeder
```

Jalankan seeder:

```bash
php artisan db:seed
```

Untuk menjalankan ulang seluruh migration dan seeder:

```bash
php artisan migrate:fresh --seed
```

**Catatan:** Perintah `migrate:fresh` menghapus seluruh tabel sebelum membuatnya kembali.

## 6. Filament Resources

Instal Filament:

```bash
composer require filament/filament:"^3.0"
```

Instal panel admin Filament:

```bash
php artisan filament:install --panels
```

Buat resource Author:

```bash
php artisan make:filament-resource Author
```

Buat resource Book:

```bash
php artisan make:filament-resource Book --generate --view
```

Filament Resource digunakan untuk mengelola data melalui panel admin, seperti melihat, menambahkan, mengubah, dan menghapus data sesuai konfigurasi aplikasi.

## 7. Authorization dengan Policies

Buat policy untuk model Author dan Book:

```bash
php artisan make:policy AuthorPolicy --model=Author
php artisan make:policy BookPolicy --model=Book
```

Contoh metode policy untuk mengatur izin akses:

```php
public function viewAny(User $user): bool
{
    return true;
}
```

Policy dapat digunakan untuk mengatur izin melihat, membuat, mengubah, dan menghapus data. Sesuaikan aturan akses dengan kebutuhan aplikasi.

## 8. Admin User dan Testing

Buat akun admin Filament:

```bash
php artisan make:filament-user
```

Masukkan nama, email, dan password sesuai instruksi terminal.

Jalankan aplikasi:

```bash
php artisan serve
```

Buka panel admin:

```text
http://127.0.0.1:8000/admin
```

Lakukan pengujian login dan fitur pengelolaan data buku serta penulis.

## 9. Verification and Optimization

Periksa daftar route aplikasi:

```bash
php artisan route:list
```

Periksa informasi database:

```bash
php artisan db:show
```

Bersihkan cache aplikasi:

```bash
php artisan optimize:clear
```

Pastikan panel admin dapat diakses dan fitur pengelolaan data berjalan sesuai konfigurasi.

## 10. Tugas 1 — Implementasi Dasar

Bagian ini berisi dokumentasi hasil implementasi dan bukti pengerjaan tugas praktikum.

### A. Login Admin Berhasil

Menampilkan halaman panel admin setelah berhasil login.

![Login Admin](screenshots/adminpanel.png)

### B. Daftar Buku

Menampilkan daftar buku yang tersedia di dalam aplikasi.

![Daftar Buku](screenshots/listbook.png)

### C. Form Tambah Buku

Menampilkan form untuk menambahkan data buku baru.

![Form Tambah Buku](screenshots/createbook.png)

### D. Hasil Pencarian

Menampilkan hasil pencarian buku berdasarkan kata kunci.

![Hasil Pencarian](screenshots/search.png)

### E. Active Filter

Menampilkan penerapan filter pada daftar buku.

![Active Filter](screenshots/filter.png)
