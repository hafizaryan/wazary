# WAZARY - Layanan Penginstalan Software dan Sistem Operasi

Selamat datang di repositori GitHub resmi WAZARY. WAZARY adalah bisnis yang didirikan oleh tiga pendiri, Waviq, Zacky, dan Aryan, yang bertujuan membantu pelanggan dengan penginstalan software dan sistem operasi, serta menawarkan layanan troubleshooting untuk software atau driver yang bermasalah.

## Mengapa Memilih WAZARY

1. Keahlian tim: tim terdiri dari orang-orang yang berpengalaman dalam penginstalan software dan sistem operasi, serta troubleshooting.
2. Kepuasan pelanggan: kepuasan pelanggan adalah prioritas, dengan komitmen memberikan layanan terbaik.
3. Fleksibilitas: menangani berbagai jenis software dan sistem operasi, dari perangkat lunak umum hingga sistem operasi khusus, termasuk penyesuaian sesuai kebutuhan.

## Cara Menggunakan Layanan

1. Hubungi kami melalui situs web resmi WAZARY atau kontak yang tersedia.
2. Konsultasikan kebutuhan Anda, dan kami bantu memilih layanan yang sesuai.
3. Penginstalan diatur jadwalnya sesuai kesepakatan.
4. Untuk masalah software atau driver, beri tahu kami dan tim akan membantu menyelesaikannya.

## Isi Repositori

Repositori ini berisi situs web profil bisnis WAZARY beserta form kontak yang terhubung ke database:

- `index.html`, halaman utama situs
- `layanan.html`, halaman daftar layanan
- `tentang.html`, halaman tentang WAZARY
- `contact.php` dan `tambah_aksi.php`, pemrosesan form kontak yang menyimpan pesan pengunjung ke database
- `koneksi.php`, konfigurasi koneksi database
- `contactme.sql`, skema database untuk tabel pesan kontak
- Folder `assets` dan `vendor` berisi aset tampilan dan library pendukung

## Teknologi

- HTML dan CSS
- JavaScript
- PHP native dengan MySQLi
- MySQL atau MariaDB

## Cara Menjalankan

Untuk halaman statis, cukup buka `index.html` di browser. Untuk menjalankan form kontak secara penuh:

Prasyarat: server lokal seperti XAMPP dengan Apache dan MySQL.

1. Salin folder proyek ke dalam `htdocs`.
2. Buat database bernama `contactme`, lalu impor berkas `contactme.sql`.
3. Sesuaikan kredensial koneksi pada `koneksi.php` bila perlu.
4. Buka `http://localhost/wazary/` di browser. Pesan yang dikirim melalui form kontak akan tersimpan pada tabel pesan di database.

## Hubungi Kami

- Situs web resmi WAZARY: wazary.com (halaman GitHub Pages di hafizaryan.github.io/wazary)
- Email: wazaryx@gmail.com
- Telepon: 083131944004

Terima kasih telah memilih WAZARY sebagai mitra Anda dalam mengatasi masalah penginstalan software dan sistem operasi.
