# Laravel 13 Template With Stisla

[![N|Solid](https://res.cloudinary.com/sistem-informasi/image/upload/c_auto,h_100,w_100/ChatGPT_Image_Jun_27_2026_09_35_16_PM_1_yodmed.png)](https://anamtechno.net)





Free Starter Laravel 13 Template menggunakan [stisla admin dashboard ](https://github.com/stisla/stisla)

Beberapa fitur atau komponen yang ada
[![N|Solid](https://res.cloudinary.com/sistem-informasi/image/upload/v1786376405/Screenshot_2026-08-10_at_22.39.40_rkrafr.png)](https://anamtechno.net)

# 🚀 Laravel 13 Template With Stisla

**Free Starter Laravel 13 Template** menggunakan **Stisla Admin Dashboard** sebagai template UI.

Template ini cocok digunakan sebagai **starter project** untuk membangun aplikasi web berbasis Laravel 13 dengan fitur autentikasi, role & permission, CRUD generator, import/export data, logging, notifikasi, manajemen user, pengaturan sistem, hingga integrasi berbagai layanan pihak ketiga.

## ✨ Fitur & Komponen

### 🔐 Authentication

- Login & Register
- Social Login menggunakan Laravel Socialite:
    - GitHub
    - Facebook
    - Google
    - Twitter

- Google reCAPTCHA
- Force Login
- Block / Unblock User

### 📊 Dashboard

- Dashboard dengan widget
- Log aktivitas terbaru
- Informasi sistem

### 👤 Profil

Pengguna dapat mengelola profil mereka melalui:

- Perbarui profil
- Perbarui email
- Perbarui password
- Hapus akun

### 💬 Chatting

Tersedia fitur chatting sederhana dengan beberapa kategori:

- Curhat
- Keluhan Penyakit
- Pertanyaan Lainnya

### 🛠️ Contoh Modul CRUD

Template menyediakan contoh modul CRUD yang dapat dijadikan referensi untuk pengembangan aplikasi.

Fitur yang tersedia:

- Create
- Read
- Update
- Delete
- Server-side DataTable
- Ajax Method
- Import Excel
- Export PDF
- Export JSON
- Export Excel

### 🎓 Modul Pendidikan

Modul pendidikan yang tersedia:

- Mahasiswa
- Alumni
- Fakultas
- Program Studi
- Pimpinan Fakultas
- Ormawa
- Pekerjaan

Fitur:

- CRUD
- Import Excel
- Export PDF
- Export JSON
- Export Excel

### 🏦 Modul Bank

Modul bank meliputi:

- Bank
- Deposito
- Riwayat Deposito

Fitur:

- CRUD
- Import Excel
- Export PDF
- Export JSON
- Export Excel

### 📋 Contoh Menu

Tersedia beberapa contoh menu dan halaman yang dapat digunakan sebagai referensi untuk pengembangan aplikasi.

### 📝 Logging

Template dilengkapi beberapa fitur logging:

- Log Aktivitas
- Laravel Log Viewer
- Log Request

### 👥 User, Role & Permission

Manajemen akses menggunakan **Spatie Laravel Permission**.

#### Role & Permission

- CRUD Role
- Import
- Export
- Permission Management

#### User Management

- CRUD User
- Import
- Export
- Force Login
- Block User
- Unblock User

#### Group Permission & Permission

- CRUD
- Import
- Export
- Permission Management

### 🔔 Notifikasi

Sistem notifikasi untuk memberikan informasi kepada pengguna aplikasi.

### 🖥️ Server Management

Menyediakan beberapa fitur untuk kebutuhan administrasi server:

- Ubuntu
- MySQL
- Database Backup

### 📁 File Manager

Manajemen file menggunakan **Laravel File Manager**.

Fitur dapat digunakan untuk:

- Upload file
- Mengelola file
- Menghapus file
- Mengelola folder

### ⚙️ Pengaturan

Tersedia halaman pengaturan sistem yang cukup lengkap.

#### Umum

- Pengaturan umum aplikasi

#### Reset Sistem

- Reset sistem

#### Meta

- Meta title
- Meta description
- Metadata lainnya

#### Tampilan

- Pengaturan tampilan aplikasi

#### Email

- Konfigurasi email

#### SSO Login & Register

- Pengaturan Social Login

#### Lainnya

- Google reCAPTCHA
- Setting Page

### ☁️ Dropbox

Integrasi Dropbox untuk kebutuhan penyimpanan file.

### 📑 Manajemen Menu

Pengelolaan menu aplikasi secara dinamis.

#### Menu

- CRUD Menu

#### Grup Menu

- CRUD Grup Menu

### 🧰 CRUD Generator

Template menyediakan **CRUD Generator** untuk mempercepat proses pembuatan modul.

Menu CRUD Generator sengaja disembunyikan dan dapat diakses langsung melalui URL.

Contoh:

```bash
php artisan make:module Student \
    --columns="name:Nama,nim:NIM,birthdate:Tanggal Lahir,email:Email,password:Password" \
    --icon="fa fa-users" \
    --title="Mahasiswa"
```

### 📤 Server-side Export

Export data dilakukan menggunakan server-side processing sehingga lebih cocok untuk menangani data dalam jumlah besar.

### 🏗️ Architecture

Project menggunakan beberapa konsep dan pattern untuk menjaga struktur aplikasi tetap rapi:

- Service Pattern
- Repository Pattern
- CRUD Generator
- Modular development

### 💻 Artisan Command

Tersedia command khusus untuk membuat module CRUD secara otomatis.

```bash
php artisan make:module
```

---

# 🚀 Installation & Setup

Clone repository terlebih dahulu:

```bash
git clone https://github.com/Anamcoollzz/laravel-13-template.git
```

Masuk ke directory project:

```bash
cd laravel-13-template
```

Install dependency:

```bash
composer install
```

Copy file environment:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Setup database pada file `.env`.

Contoh:

```env
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Generate JWT secret:

```bash
php artisan jwt:secret
```

Jalankan migration dan seeder:

```bash
php artisan migrate --seed
```

Buat symbolic link untuk storage:

```bash
php artisan storage:link
```

Jalankan aplikasi:

```bash
php artisan serve
```

Kemudian buka:

```text
http://127.0.0.1:8000
```

---

# 🔑 Optional Configuration

Beberapa fitur membutuhkan konfigurasi tambahan pada `.env`.

### Google reCAPTCHA

Konfigurasi:

```env
RECAPTCHA_SITE_KEY=
RECAPTCHA_SECRET_KEY=
```

### Google Login

```env
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT=
```

### Facebook Login

```env
FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=
FACEBOOK_REDIRECT=
```

### GitHub Login

```env
GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=
GITHUB_REDIRECT=
```

### Twitter Login

```env
TWITTER_CLIENT_ID=
TWITTER_CLIENT_SECRET=
TWITTER_REDIRECT=
```

> Konfigurasi Social Login dan Google reCAPTCHA bersifat **optional** dan dapat disesuaikan dengan kebutuhan project.

---

# 🧰 Membuat Modul CRUD Baru

Salah satu fitur utama template ini adalah CRUD Generator.

Contoh membuat modul **Mahasiswa**:

```bash
php artisan make:module Student \
    --columns="name:Nama,nim:NIM,birthdate:Tanggal Lahir,email:Email,password:Password" \
    --icon="fa fa-users" \
    --title="Mahasiswa"
```

Command tersebut dapat membantu membuat struktur modul CRUD secara otomatis sehingga proses development menjadi lebih cepat.

---

# 📚 Libraries & Resources

Template ini menggunakan berbagai library dan project open-source.

- **Stisla Admin Dashboard**
  [Stisla Demo](https://demo.getstisla.com?utm_source=chatgpt.com)

- **Laravel Socialite**
  [Laravel Socialite Documentation](https://laravel.com/docs/13.x/socialite?utm_source=chatgpt.com)

- **Spatie Laravel Permission**
  [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission/v6/introduction?utm_source=chatgpt.com)

- **Laravel File Manager**
  [Laravel File Manager](https://unisharp.github.io/laravel-filemanager?utm_source=chatgpt.com)

- **Laravel Excel**
  [Laravel Excel](https://laravel-excel.com/?utm_source=chatgpt.com)

- **Laravel DOMPDF**
  [Barryvdh Laravel DOMPDF](https://github.com/barryvdh/laravel-dompdf?utm_source=chatgpt.com)

- **DataTables**
  [DataTables](https://datatables.net/?utm_source=chatgpt.com)

- **Google reCAPTCHA**
  [Google reCAPTCHA](https://www.google.com/recaptcha/about?utm_source=chatgpt.com)

- **Laravel Google Captcha**
  [Laravel Google Captcha](https://github.com/thinhbuzz/laravel-google-captcha?utm_source=chatgpt.com)

- **Cloudinary Laravel**
  [Cloudinary Laravel](https://github.com/cloudinary-devs/cloudinary-laravel?utm_source=chatgpt.com)

- **Laravel Log Viewer**
  [Laravel Log Viewer](https://github.com/rap2hpoutre/laravel-log-viewer?utm_source=chatgpt.com)

- **Yajra Laravel DataTables**
  [Yajra Laravel DataTables](https://github.com/yajra/laravel-datatables?utm_source=chatgpt.com)

- **JWT Auth**
  [tymon JWT Auth](https://github.com/tymondesigns/jwt-auth?utm_source=chatgpt.com)

- **Milon Barcode**
  [Milon Barcode](https://github.com/milon/barcode?utm_source=chatgpt.com)

- **Vue.js 2**
  [Vue.js 2 Documentation](https://v2.vuejs.org?utm_source=chatgpt.com)

---

# 🎨 UI Template

Template dashboard menggunakan **Stisla Admin Dashboard**.

[Stisla Admin Dashboard](https://github.com/stisla/stisla?utm_source=chatgpt.com)

Stisla menyediakan tampilan dashboard yang modern, responsive, dan mudah dikustomisasi untuk kebutuhan aplikasi web.

---

# 📺 YouTube

Kalau project ini membantu atau bermanfaat buat kalian, **jangan lupa ramaikan channel YouTube saya**. ❤️

Dengan subscribe, like, dan komentar kalian bisa membantu saya untuk terus membuat konten seputar:

- Laravel
- PHP
- MySQL
- JavaScript
- React
- React Native
- Flutter
- Web Development
- Mobile Development
- Tutorial Programming

**Yuk belajar dan ngoding bareng! 🚀**

---

# 🌐 Portfolio

Mau lihat project dan portfolio lainnya?

[Anam Techno Portfolio](https://anamtechno.net?utm_source=chatgpt.com)

---

# ⭐ Support This Project

Kalau template ini bermanfaat, jangan lupa:

⭐ **Star repository ini**

🍴 **Fork repository**

🐛 **Laporkan bug melalui Issues**

💡 **Kirim request fitur atau module**

Kontribusi dan feedback dari kalian sangat membantu pengembangan project ini.

---

# 🤝 Contribution

Punya ide untuk module atau fitur baru?

Silakan buat:

- Issue
- Feature Request
- Pull Request

Saya sangat terbuka dengan kontribusi dan masukan dari komunitas.

---

# 📄 License

Project ini dibuat untuk kebutuhan pembelajaran dan pengembangan aplikasi berbasis Laravel.

Silakan **Star** atau **Fork** repository ini jika project ini bermanfaat.

---

## 🔗 Repository

[Laravel 13 Template GitHub Repository](https://github.com/Anamcoollzz/laravel-13-template?utm_source=chatgpt.com)

**Happy Coding! 🚀**

**Anam Techno**

#### Yuk Ramaikan channel youtubeku biar semangat ngonten dan belajar barengnya

[![N|Solid](https://res.cloudinary.com/sistem-informasi/image/upload/c_scale,w_120,z_2.7/v1677481731/youtube-logo-hd-8_x1zdwb.png)](https://www.youtube.com/channel/UCwF-njZKFE30pZwWFtp84fA)

#### Yang mau intip2 portofolioku bisa klik gambar di bawah

[![N|Solid](https://res.cloudinary.com/sistem-informasi/image/upload/c_thumb,w_100/v1677481520/1664200200147_it7bza.jpg)](https://anamtechno.net)

atau kunjungi https://anamtechno.net

https://github.com/Anamcoollzz/laravel-13-template
