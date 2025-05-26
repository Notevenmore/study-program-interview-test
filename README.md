Soal 
<br>
Buatlah halaman web sederhana untuk mengatur daftar program studi dan fakultas (Institusi) yang ada di Universitas Pertamina. Berikut kebutuhan pengguna: 
1. R1: Melihat daftar semua program studi
2. R2: Menambah Institusi Baru, dengan validasi
   - Kode institusi tidak boleh sama dengan institusi lain
   - Nama singkat tidak boleh sama dengan institusi lain. Nama singkat diambil dari nama Program Studi yang diinput yaitu mengambil Karakter pertama setiap suku kata. Jika nama program studi hanya 1 suku kata, maka nama singkat diambil dari karakter pertama diulan 2x, Contoh: Ilmu hanya 1 suku kata, maka nama singkat diambil dari karakter pertama diulang 2x, Contoh : Ilmu Komputer => IK, Kimia -> KK, Teknik Industri => TI.
   - Nama tidak boleh sama dengan institusi lain
   - Nama singkat dan nama hanya boleh menggunakan huruf, tidak boleh menggunakan angka, simbol atau karakter lain.
4. R3: Mengubah data institusi
5. R4: Menghapus Institusi

Aplikasi ini wajib dibuat dengan arsitektur berbasis REST API: 
- Backend (Laravel) berfungsi sebagai penyedia layanan data (REST API) yang menangani semua proses:
  - Menyimpan, mengambil, mengubah dan menghapus data dari database (MySQL/PostgreSQL)
  - Menyediakan endpoint-endpoint yang akan dipanggil oleh frontend
- Frontend (React atau Blade Laravel) tidak terhubung langsung ke database atau model, tapi harus mengakses data melalui endpoint API yang disediakan oleh backend
- Gunakan 2 tabel untuk menyimpan daftar program studi dan fakultas

Spesifikasi : Dibangun dengan menggunakan database POSTGRESQL, Laravel Blade.
Jalankan composer install => npm install => npm run build => composer run dev
