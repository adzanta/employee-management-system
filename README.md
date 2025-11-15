# 📘 Employee Management System (Laravel + Filament 3)

Aplikasi manajemen pegawai untuk keperluan technical test.\
Fitur utama terdiri dari login admin, dashboard, dan CRUD pegawai.

------------------------------------------------------------------------

## 🚀 Tech Stack

-   **Laravel 11**
-   **PHP 8.2**
-   **FilamentPHP**
-   **MySQL**
-   **Node.js**

------------------------------------------------------------------------

## 🔐 Login Admin

Gunakan akun berikut:

-   **Email:** admin@example.com
-   **Password:** 123

Jika akun tidak ada, jalankan ulang seeder.

------------------------------------------------------------------------

## ⭐ Fitur Utama

-   Login admin
-   Dashboard
    -   Total pegawai
    -   Chart pegawai per divisi
    -   5 pegawai terbaru
-   CRUD pegawai lengkap
-   Validasi form lengkap
-   ID pegawai otomatis (**ULID**)

------------------------------------------------------------------------

## 📦 Cara Instalasi

### 1️⃣ Clone Repo

``` bash
git clone https://github.com/USERNAME/employee-management-system.git
```

### 2️⃣ Install dependency

``` bash
composer install
npm install
npm run build
npm run dev
```

### 3️⃣ Copy file environment

``` bash
cp .env.example .env
```

### 4️⃣ Generate key

``` bash
php artisan key:generate
```

### 5️⃣ Buat database dan migrate

``` bash
php artisan migrate --seed
```

Seeder akan membuat akun default:

-   **Email:** admin@example.com
-   **Password:** 123

### 6️⃣ Jalankan aplikasi

``` bash
php artisan serve
```

Admin panel dapat diakses di:

👉 **http://localhost:8000/admin**
