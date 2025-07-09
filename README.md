# Aplikasi Pemesanan Kendaraan

Dokumentasi ini menjelaskan informasi dasar mengenai aplikasi, mulai dari username-password default, versi teknologi yang digunakan, serta panduan singkat penggunaannya.


## Daftar Username & Password Default

| Role        | Username (Email)     | Password     |
|-------------|----------------------|--------------|
| Admin       | admin@test.com       | password     |
| Approver 1  | approver1@test.com   | password     |
| Approver 2  | approver2@test.com   | password     |


## Versi Teknologi

| Komponen         | Versi           |
|------------------|-----------------|
| PHP              | 8.2.x           |
| Laravel Framework| 12.x            |
| MySQL            | 8.x             |
| Node.js          | 18.x            |
| Composer         | 2.x             |


## Panduan Penggunaan Aplikasi

### Instalasi

1. Clone repository:

   ```bash
   git clone https://github.com/dwardiansah/project-test
   cd project-test

   composer install
   npm install && npm run dev

   cp .env.example .env

   DB_DATABASE=booking_app
   DB_USERNAME=root
   DB_PASSWORD=

   php artisan key:generate
   php artisan migrate --seed


## Fitur Utama
1. Pemesanan kendaraan oleh user
2. Persetujuan dua tahap (Approver 1 & Approver 2)
3. Penugasan driver dan kendaraan
4. Riwayat dan log setiap pemesanan
5. Status booking: created → pending → approved → done/rejected/cancelled


## Developer
Nama: Dwi Wardiansah
Email: dwi.wardiansah@gmail.com
GitHub: https://github.com/dwardiansah