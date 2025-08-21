# Management Student App

## Langkah-langkah Instalasi
1. **Clone Repository**  
   ```bash
   git clone https://github.com/aptarr/manajement_student.git
   ```

2. **Instalasi Dependensi**  

    ```bash
    composer install
    ```

3. **Setup Environment**  

   Salin file konfigurasi `.env` dan generate application key:

   ```bash
    cp .env.example .env
    php artisan key:generate
   ```
4. **Jalankan Migrasi Database**  

    Pastikan sudah mengatur koneksi database di file `.env`, lalu jalankan migrasi:

    ```bash
    php artisan migrate
    ```
5. **Install & Compile Asset Frontend**  

    Pastikan sudah menginstal Node.js. Lalu jalankan perintah berikut:

    ```bash
    npm install
    ```
6. **Menjalankan Aplikasi**  

    Buka dua terminal:

    - Terminal 1: Menjalankan Laravel

    ```
    php artisan serve
    ```

    - Terminal 2: Menjalankan Vite (frontend dev server)

    ```
    npm run dev
    ```
    
    Aplikasi dapat diakses melalui: [http://localhost:8000](http://localhost:8000)


## Additional
### Demo Aplikasi
Video demo aplikasi dapat dilihat pada bagian berikut: 
- [Video demo aplikasi](https://youtu.be/dFhcukyNHr4)

## Requirements

Pastikan sistem Anda memiliki versi berikut:

| Komponen     | Versi Minimum | Cek Versi di Terminal         |
|--------------|----------------|-------------------------------|
| PHP          | 8.x            | `php -v`                      |
| Composer     | 2.x            | `composer --version`          |
| Node.js      | 22.x           | `node -v`                     |
| NPM          | 8.x            | `npm -v`                      |
| Laravel      | 9.x            | `php artisan --version`       |
| Database     | MySQL          | -                             |


