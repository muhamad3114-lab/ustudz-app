# Sistem Informasi Manajemen Aset Sekolah (SIMASET Sekolah)

SIMASET adalah aplikasi web untuk mendata dan mengelola aset sekolah seperti tanah, bangunan, ruangan, dan inventaris barang. Dibangun menggunakan Laravel 12, aplikasi ini ditujukan untuk membantu sekolah mengelola aset secara terstruktur dan profesional.

---

## 📌 Ringkasan Proyek

Proyek ini mengajarkan bagaimana:
- Merancang database aplikasi.
- Mengimplementasikan CRUD (Create, Read, Update, Delete).
- Mengelola relasi antar entitas.
- Membuat sistem login berbasis role.
- Membangun aplikasi web dengan Laravel.

---

## 🚀 Fitur Utama

### 1. Manajemen Aset
- Data Tanah  
- Data Bangunan (relasi ke Tanah)  
- Data Ruangan (relasi ke Bangunan)  
- Kategori Barang  

### 2. Inventaris Barang
- Kode inventaris otomatis  
- Kondisi barang  
- Lokasi barang  
- Tahun pengadaan  

### 3. Pelaporan
- Cetak barang per ruangan  

### 4. Manajemen Pengguna
- Admin  
- Petugas Inventaris  

---

## 🛠️ Teknologi

- Laravel 12  
- PHP 8+  
- MySQL / MariaDB  
- Bootstrap 5 / TailwindCSS  

---

# 💻 **Cara Instalasi (Lengkap & Mudah Diikuti)**

1. Persiapan awal

Pastikan sudah menginstal:
- **XAMPP** (PHP ≥ 8.1)
- **Composer**
- **Node.js & NPM**
- **Git**

---

2. Clone projeknya
Jika project berasal dari GitHub:

```bash
git clone https://github.com/username/simaset-sekolah.git
cd simaset-sekolah
`````

3. Install Dependensi Backend (Composer)
```bash
composer install
```

4. Install Dependensi Frontend (npm)
```bash
npm install
Build asset:
npm run build
Atau jika ingin mode development:
npm run dev
```

5. Konfigurasi File .env
```bash
DB_DATABASE=simaset
DB_USERNAME=root
DB_PASSWORD=
```
Buat database di phpMyAdmin dengan nama simaset.

6. Generate Key Laravel
```bash
php artisan key:generate
```

7. Migrasi Database
```bash
php artisan migrate
Jika kamu punya seeder (opsional):
php artisan db:seed
```

8. Menjalankan Server
```bash
php artisan serve
```
Akses aplikasi di:

➡️ http://localhost:8000

9. Login Awal (Jika pakai seeder)
```
1.role:Admin
2.Email kita sendiri seperti ini contoh:admin@simaset.com
3.Password nya menggunakan password kita sendiri, disini contohnya:admin123
```

ERD (Struktur Database)
erDiagram
    tanah {
        int id PK
        string nama_tanah
        string kode_tanah
        string luas
        string no_sertifikat
    }
    bangunan {
        int id PK
        string nama_bangunan
        string kode_bangunan
        int tanah_id FK
    }
    ruangan {
        int id PK
        string nama_ruangan
        string kode_ruangan
        int bangunan_id FK
    }
    kategori {
        int id PK
        string nama_kategori
    }
    barang {
        int id PK
        string nama_barang
        string kode_inventaris
        int kategori_id FK
        int ruangan_id FK
        int tahun_pengadaan
        string sumber_dana
        string kondisi
    }
    users {
        int id PK
        string name
        string email
        string password
        string role
    }

    tanah ||--o{ bangunan : memiliki
    bangunan ||--o{ ruangan : memiliki
    ruangan ||--o{ barang : berisi
    kategori ||--o{ barang : dikelompokkan

link Repository projek Ustudz APP -> https://github.com/muhamad3114-lab/ustudz-app

hasil record saya dibawah 

https://github.com/user-attachments/assets/37c247c0-143e-4756-9c4e-45508dbff979











