# Vanilla Nusantara Company Profile Site

This repository contains a simple company profile website for **Vanilla Nusantara** built with
[Laravel](https://laravel.com/) and [Livewire](https://livewire.laravel.com/). The site presents
information about the company, its vanilla grades, and contact details. Styling is provided by
[Bootstrap](https://getbootstrap.com/).

## Fitur

- **Laravel Livewire** – Komponen `CompanyProfile` menampilkan daftar grade vanilla tanpa controller.
- **Model & Migrasi** – Model `Grade` beserta migrasinya untuk menyimpan data grade (panjang, kadar air, deskripsi, gambar).
- **Tampilan Resource** – Template Blade responsif dengan Bootstrap, menampilkan profil perusahaan, daftar grade, dan info kontak.
- **Seeder** – `GradeSeeder` untuk mengisi tabel `grades` dengan data awal (Grade A, B, C).

## Struktur Direktori

```
vanilla_nusantara/
├── app/
│   ├── Http/
│   │   └── Livewire/CompanyProfile.php        # Komponen Livewire
│   └── Models/Grade.php                      # Model Eloquent
├── database/
│   ├── migrations/2026_06_12_000000_create_grades_table.php
│   └── seeders/
│       ├── GradeSeeder.php
│       └── DatabaseSeeder.php
├── resources/
│   └── views/
│       ├── layouts/app.blade.php             # Layout utama
│       └── livewire/company-profile.blade.php  # Tampilan komponen
├── routes/web.php                             # Rute web tanpa controller
├── composer.json                              # Dependensi (Laravel & Livewire)
└── .env.example                               # Contoh konfigurasi environment
```

## Cara Menjalankan

1. **Clone** repository ini dan masuk ke direktori `vanilla_nusantara`:

   ```bash
   git clone https://github.com/bachrul25/vanillanusantara.git
   cd vanillanusantara/vanilla_nusantara
   ```

2. **Install** dependensi via Composer (pastikan PHP 8+ dan Composer terinstal):

   ```bash
   composer install
   ```

3. **Copy** file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database MySQL:

   ```bash
   cp .env.example .env
   # ubah DB_DATABASE, DB_USERNAME, dan DB_PASSWORD sesuai lingkungan Anda
   ```

4. **Generate** key aplikasi Laravel:

   ```bash
   php artisan key:generate
   ```

5. **Migrate** dan **seed** database untuk membuat tabel `grades` dan mengisinya dengan data contoh:

   ```bash
   php artisan migrate --seed
   ```

6. **Serve** aplikasi menggunakan server bawaan Laravel:

   ```bash
   php artisan serve
   ```

7. Akses situs di `http://localhost:8000`. Anda akan melihat halaman profil Vanilla Nusantara dengan daftar grade vanilla dan informasi kontak.

## Menambahkan Gambar

Field `image` pada model `Grade` dapat diisi dengan path relatif menuju gambar yang disimpan di direktori `public/images`.
Untuk contoh ini, Anda dapat membuat folder `public/images` dan menambahkan file gambar (misalnya `grade_a.jpg`,
`grade_b.jpg`, dan `grade_c.jpg`). Pastikan nama file sesuai dengan data di `GradeSeeder` atau rubah nilainya.

## Lisensi

Proyek ini bersifat open source untuk kebutuhan belajar dan presentasi. Silakan gunakan dan kembangkan
lebih lanjut sesuai kebutuhan Anda.
