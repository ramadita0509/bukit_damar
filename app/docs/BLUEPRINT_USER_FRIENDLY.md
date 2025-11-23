# 📘 Panduan Lengkap Website Bukit Damar
## Untuk Pemula - Mudah Dipahami

---

## 🎯 Apa Itu Website Ini?

Website Bukit Damar adalah **sistem informasi dan manajemen** untuk warga komplek Bukit Damar. Bayangkan seperti **aplikasi digital** yang membantu:
- Warga mencari informasi (cara buat KTP, SKCK, dll)
- Admin mengelola keuangan komplek
- Semua orang membaca berita/artikel terbaru

---

## 🏠 Bagian-Bagian Website (Seperti Rumah)

Bayangkan website ini seperti **rumah bertingkat**:

```
┌─────────────────────────────────────────────────────────┐
│                    RUMAH WEBSITE                        │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  🏛️ LANTAI 1: RUANG TAMU (Publik - Semua Bisa Masuk)  │
│  ├─ Halaman Depan                                      │
│  ├─ Informasi (KTP, SKCK, dll)                        │
│  ├─ Fasilitas (Masjid, Park, dll)                     │
│  ├─ Blog/Berita                                        │
│  └─ Kontak                                             │
│                                                         │
│  🔐 LANTAI 2: RUANG KELUARGA (Harus Login)             │
│  ├─ Dashboard Pribadi                                  │
│  ├─ Lihat Laporan Keuangan                            │
│  └─ Edit Profil Sendiri                                │
│                                                         │
│  👨‍💼 LANTAI 3: RUANG ADMIN (Admin & Super Admin)       │
│  ├─ Kelola Transaksi Keuangan                         │
│  ├─ Upload Laporan Iuran                              │
│  └─ Tulis Artikel/Blog                                │
│                                                         │
│  👑 LANTAI 4: RUANG SUPER ADMIN (Super Admin Saja)     │
│  ├─ Semua Fitur Admin                                  │
│  ├─ Kelola User (Tambah/Hapus User)                   │
│  └─ Hapus Transaksi                                    │
│                                                         │
└─────────────────────────────────────────────────────────┘
```

---

## 👥 Siapa Saja yang Bisa Pakai Website Ini?

### 1. 👤 **WARGA BIASA (User)**
**Seperti tamu yang sudah terdaftar**

✅ **Bisa:**
- Lihat semua halaman publik (informasi, fasilitas, blog)
- Login dan masuk ke dashboard pribadi
- Lihat laporan keuangan komplek
- Lihat bukti transaksi
- Edit profil sendiri
- Download laporan dalam bentuk Excel

❌ **Tidak Bisa:**
- Menambah atau mengubah transaksi
- Menulis artikel/blog
- Mengelola user lain

**Contoh:** Pak Budi, warga komplek yang ingin lihat laporan keuangan bulan ini.

---

### 2. 👨‍💼 **ADMIN**
**Seperti pengurus komplek**

✅ **Bisa:**
- Semua yang bisa dilakukan warga biasa
- **Menambah/Mengubah transaksi keuangan** (pemasukan/pengeluaran)
- **Upload laporan iuran** (laporan bulanan dalam bentuk PDF)
- **Menulis artikel/blog** untuk warga
- **Mengedit/Menghapus artikel**

❌ **Tidak Bisa:**
- Menghapus transaksi
- Menambah/Menghapus user

**Contoh:** Ibu Siti, sekretaris komplek yang mencatat pemasukan iuran dan pengeluaran untuk perbaikan jalan.

---

### 3. 👑 **SUPER ADMIN**
**Seperti ketua komplek - punya akses penuh**

✅ **Bisa:**
- Semua yang bisa dilakukan admin
- **Menambah/Menghapus/Mengubah user** (membuat akun admin baru, dll)
- **Menghapus transaksi** (jika ada kesalahan)

**Contoh:** Pak Ahmad, ketua komplek yang mengatur semua hal termasuk membuat akun untuk admin baru.

---

## 📱 Halaman-Halaman di Website

### 🏛️ **LANTAI 1: Halaman Publik (Semua Orang Bisa Lihat)**

#### 🏠 **Halaman Depan** (`/`)
- Halaman pertama yang muncul saat buka website
- Menampilkan informasi umum tentang komplek

#### 📰 **Blog/Berita** (`/blog`)
- Daftar artikel/berita terbaru
- Bisa klik untuk baca detail artikel
- Contoh: "Pengumuman Perbaikan Jalan", "Acara Halal Bihalal"

#### 📋 **Halaman Informasi**
Semua warga bisa akses tanpa login:

| Halaman | URL | Isinya |
|---------|-----|--------|
| **SKCK** | `/skck` | Cara membuat SKCK, syarat-syaratnya |
| **KTP** | `/ktp` | Cara membuat KTP, bisa download formulir PDF |
| **Domisili** | `/domisili` | Cara membuat surat domisili, bisa download PDF |
| **Akta Lahir** | `/akta-lahir` | Informasi tentang akta lahir |
| **Surat Kematian** | `/surat-kematian` | Cara membuat surat kematian, bisa download PDF |
| **Izin Usaha** | `/izin-usaha` | Cara membuat surat izin usaha, bisa download PDF |
| **Nikah** | `/nikah` | Informasi persyaratan surat nikah, bisa download PDF |
| **Kontak** | `/kontak` | Nomor telepon, alamat, dll |
| **Kepengurusan** | `/kepengurusan` | Struktur kepengurusan komplek |
| **Tentang** | `/tentang` | Tentang komplek Bukit Damar |

#### 🏢 **Halaman Fasilitas**
Informasi tentang fasilitas di komplek:

| Fasilitas | URL |
|-----------|-----|
| **Damar Sport Center** | `/fasilitas/damar-sport-center` |
| **Masjid** | `/fasilitas/masjid` |
| **Damar Park** | `/fasilitas/damar-park` |
| **Balai Warga** | `/fasilitas/balai-warga` |
| **Meeting Point** | `/fasilitas/meeting-point` |
| **Keamanan** | `/fasilitas/keamanan` |

---

### 🔐 **LANTAI 2: Dashboard Warga (Harus Login)**

#### 📊 **Dashboard** (`/dashboard`)
- Halaman utama setelah login
- Menampilkan ringkasan informasi penting
- Seperti "ruang keluarga" digital

#### 💰 **Laporan Keuangan** (`/laporan`)
- Lihat semua transaksi keuangan komplek
- Bisa filter berdasarkan bulan/tahun
- Bisa download dalam bentuk Excel
- Bisa download laporan iuran (PDF)

#### 👤 **Profil Saya** (`/profile`)
- Lihat dan edit data diri
- Ganti foto profil
- Ganti password

---

### 👨‍💼 **LANTAI 3: Panel Admin (Admin & Super Admin)**

#### 💵 **Kelola Transaksi** (`/transaksi`)
**Seperti buku kas digital**

- **Tambah Transaksi Baru:**
  - Pilih jenis: Pemasukan atau Pengeluaran
  - Isi tanggal, keterangan, kategori, jumlah
  - Upload bukti (foto struk, kwitansi, dll)
  - Tambahkan catatan jika perlu

- **Edit Transaksi:**
  - Ubah data transaksi yang sudah ada
  - Perbaiki jika ada kesalahan input

**Contoh Transaksi:**
- **Pemasukan:** Iuran warga bulan Januari = Rp 5.000.000
- **Pengeluaran:** Perbaikan jalan = Rp 2.000.000

#### 📄 **Kelola Laporan Iuran** (`/laporan-iuran`)
**Upload laporan bulanan dalam bentuk PDF**

- Upload file PDF laporan iuran
- Isi bulan dan tahun
- Beri judul dan keterangan
- Warga bisa download laporan ini

**Contoh:** Upload "Laporan Iuran Januari 2024.pdf"

#### ✍️ **Kelola Blog/Artikel** (`/blogs`)
**Tulis berita dan pengumuman untuk warga**

- **Tambah Artikel Baru:**
  - Tulis judul dan isi artikel
  - Upload gambar
  - Pilih kategori
  - Simpan sebagai draft atau langsung publish

- **Edit/Delete Artikel:**
  - Edit artikel yang sudah ada
  - Hapus artikel yang tidak diperlukan

**Contoh Artikel:**
- "Pengumuman: Perbaikan Jalan Akan Dimulai Minggu Depan"
- "Acara Halal Bihalal 2024"

---

### 👑 **LANTAI 4: Panel Super Admin (Super Admin Saja)**

#### 👥 **Kelola User** (`/users`)
**Mengatur siapa saja yang punya akun**

- **Tambah User Baru:**
  - Buat akun untuk admin baru
  - Atau buat akun untuk warga tertentu
  - Tentukan role (user, admin, atau super_admin)

- **Edit User:**
  - Ubah data user
  - Ubah role (misalnya naikkan jadi admin)

- **Hapus User:**
  - Hapus akun yang tidak diperlukan lagi

#### 🗑️ **Hapus Transaksi** (`/transaksi/{id}`)
- Hapus transaksi yang salah atau tidak diperlukan
- Hanya super admin yang bisa melakukan ini

---

## 💾 Data yang Disimpan di Database

Bayangkan database seperti **lemari arsip** yang menyimpan semua data:

### 📁 **Kartu Warga (Tabel: users)**
Menyimpan data semua orang yang punya akun:

| Data | Contoh |
|------|--------|
| Nama | "Budi Santoso" |
| Email | "budi@email.com" |
| Password | (disimpan dalam bentuk terenkripsi) |
| Role | "user", "admin", atau "super_admin" |
| Foto Profil | "foto-budi.jpg" |

**Hubungan:** Satu user bisa menulis banyak artikel/blog

---

### 📰 **Arsip Artikel (Tabel: blogs)**
Menyimpan semua artikel/berita:

| Data | Contoh |
|------|--------|
| Judul | "Pengumuman Perbaikan Jalan" |
| Isi | (teks lengkap artikel) |
| Gambar | "perbaikan-jalan.jpg" |
| Kategori | "Pengumuman" |
| Status | "published" (sudah terbit) atau "draft" (masih draf) |
| Penulis | (ID dari tabel users) |
| Jumlah Dilihat | 150 |

**Hubungan:** Setiap artikel ditulis oleh satu user

---

### 💰 **Buku Kas (Tabel: transaksis)**
Menyimpan semua transaksi keuangan:

| Data | Contoh |
|------|--------|
| Tanggal | "2024-01-15" |
| Keterangan | "Iuran warga bulan Januari" |
| Kategori | "Iuran" |
| Jenis | "pemasukan" atau "pengeluaran" |
| Jumlah | 5000000 |
| Catatan | "Dari 100 warga @ Rp 50.000" |
| Bukti | "bukti-iuran-januari.jpg" |

**Catatan:** Tabel ini tidak terhubung langsung dengan user (transaksi adalah milik komplek, bukan milik user tertentu)

---

### 📄 **Arsip Laporan (Tabel: laporan_iurans)**
Menyimpan file laporan iuran (PDF):

| Data | Contoh |
|------|--------|
| Bulan | "Januari" |
| Tahun | "2024" |
| Nama File | "Laporan_Iuran_Januari_2024.pdf" |
| Path File | "storage/laporan-iuran/..." |
| Judul | "Laporan Iuran Bulan Januari 2024" |
| Keterangan | "Laporan lengkap iuran warga" |

---

## 🔄 Alur Kerja Website (Bagaimana Website Bekerja?)

### Contoh 1: Warga Lihat Laporan Keuangan

```
1. Warga buka website
   ↓
2. Klik "Login" → Masukkan email & password
   ↓
3. Sistem cek: "Apakah email & password benar?"
   ↓
4. Jika benar → Masuk ke Dashboard
   ↓
5. Klik "Laporan" → Sistem ambil data dari database
   ↓
6. Tampilkan semua transaksi keuangan
   ↓
7. Warga bisa download Excel jika mau
```

### Contoh 2: Admin Tambah Transaksi Baru

```
1. Admin login
   ↓
2. Masuk ke halaman "Kelola Transaksi"
   ↓
3. Klik "Tambah Transaksi"
   ↓
4. Isi form:
   - Tanggal: 15 Januari 2024
   - Keterangan: "Iuran warga"
   - Jenis: Pemasukan
   - Jumlah: Rp 5.000.000
   - Upload bukti: foto.jpg
   ↓
5. Klik "Simpan"
   ↓
6. Sistem simpan ke database
   ↓
7. Transaksi muncul di daftar
   ↓
8. Semua warga yang login bisa lihat transaksi ini
```

### Contoh 3: Admin Tulis Artikel

```
1. Admin login
   ↓
2. Masuk ke "Kelola Blog"
   ↓
3. Klik "Tulis Artikel Baru"
   ↓
4. Isi:
   - Judul: "Pengumuman Acara"
   - Isi: (tulis artikel lengkap)
   - Upload gambar
   - Status: "Published"
   ↓
5. Klik "Simpan"
   ↓
6. Sistem simpan ke database
   ↓
7. Artikel langsung muncul di halaman blog (publik)
   ↓
8. Semua orang (termasuk yang tidak login) bisa baca
```

---

## 🔐 Sistem Keamanan

### 1. **Login/Password**
- Semua halaman yang butuh login memerlukan email & password
- Password disimpan dalam bentuk terenkripsi (tidak bisa dibaca langsung)

### 2. **Role/Posisi**
- Sistem tahu siapa yang login dan posisinya (user/admin/super_admin)
- Setiap halaman cek: "Apakah user ini boleh akses?"
- Jika tidak boleh → Dilarang masuk

### 3. **File Upload**
- File yang diupload (foto, PDF) disimpan di folder khusus
- Tidak semua orang bisa akses file tersebut
- Hanya yang berhak saja yang bisa lihat

---

## 📂 Di Mana File-File Disimpan?

Seperti **lemari penyimpanan** yang terorganisir:

```
📁 storage/app/public/
   ├── 📁 bukti-transaksi/     → Foto bukti transaksi
   │   └── bukti-iuran-januari.jpg
   │
   ├── 📁 laporan-iuran/        → File PDF laporan
   │   └── Laporan_Iuran_Januari_2024.pdf
   │
   ├── 📁 blog-images/          → Gambar artikel
   │   └── perbaikan-jalan.jpg
   │
   └── 📁 foto-profil/          → Foto profil user
       └── foto-budi.jpg
```

---

## 🎨 Teknologi yang Digunakan

Website ini dibuat dengan teknologi modern:

| Teknologi | Fungsinya |
|-----------|-----------|
| **Laravel** | Framework utama (seperti "kerangka rumah") |
| **MySQL/PostgreSQL** | Database (tempat menyimpan data) |
| **Blade Templates** | Template untuk tampilan halaman |
| **Tailwind CSS** | Untuk membuat tampilan cantik |
| **DomPDF** | Untuk membuat file PDF |
| **Laravel Breeze** | Sistem login/register |

---

## 📊 Diagram Sederhana: Hubungan Data

```
┌─────────────┐
│    USER     │ (Warga/Admin)
│  (1 orang)  │
└──────┬──────┘
       │
       │ bisa menulis banyak
       │
       ▼
┌─────────────┐
│    BLOG     │ (Artikel/Berita)
│ (banyak)    │
└─────────────┘

┌─────────────┐
│ TRANSAKSI   │ (Catatan Keuangan)
│ (banyak)    │ ← Tidak terhubung langsung dengan user
└─────────────┘   (transaksi adalah milik komplek)

┌─────────────┐
│ LAPORAN     │ (File PDF Laporan)
│ IURAN       │ ← Tidak terhubung langsung dengan user
│ (banyak)    │   (laporan adalah milik komplek)
└─────────────┘
```

---

## ✅ Checklist: Apa Saja yang Bisa Dilakukan?

### Untuk Warga Biasa (User):
- [ ] Lihat semua halaman informasi (KTP, SKCK, dll)
- [ ] Baca artikel/blog
- [ ] Login ke dashboard
- [ ] Lihat laporan keuangan
- [ ] Download laporan Excel
- [ ] Lihat bukti transaksi
- [ ] Edit profil sendiri

### Untuk Admin:
- [ ] Semua yang bisa dilakukan warga
- [ ] Tambah transaksi (pemasukan/pengeluaran)
- [ ] Edit transaksi
- [ ] Upload laporan iuran (PDF)
- [ ] Hapus laporan iuran
- [ ] Tulis artikel/blog
- [ ] Edit artikel/blog
- [ ] Hapus artikel/blog

### Untuk Super Admin:
- [ ] Semua yang bisa dilakukan admin
- [ ] Tambah user baru
- [ ] Edit user
- [ ] Hapus user
- [ ] Hapus transaksi

---

## 💡 Tips & Catatan Penting

1. **Password Harus Kuat**
   - Gunakan kombinasi huruf, angka, dan simbol
   - Jangan bagikan password ke orang lain

2. **Backup Data**
   - Data penting sebaiknya di-backup secara berkala
   - File-file yang diupload juga perlu di-backup

3. **Transaksi Tidak Bisa Dihapus (Kecuali Super Admin)**
   - Admin tidak bisa hapus transaksi (untuk keamanan)
   - Hanya super admin yang bisa hapus (jika benar-benar salah)

4. **Artikel Bisa Disimpan Sebagai Draft**
   - Sebelum publish, bisa simpan dulu sebagai draft
   - Draft tidak akan muncul di halaman publik
   - Bisa edit lagi nanti sebelum publish

5. **File Upload**
   - Pastikan file tidak terlalu besar
   - Format yang didukung: JPG, PNG, PDF
   - Nama file akan diubah otomatis oleh sistem

---

## 🆘 Pertanyaan Umum (FAQ)

**Q: Siapa yang bisa lihat laporan keuangan?**
A: Semua warga yang sudah login bisa lihat laporan keuangan.

**Q: Siapa yang bisa tambah transaksi?**
A: Hanya admin dan super admin yang bisa tambah transaksi.

**Q: Apakah artikel yang ditulis admin langsung muncul?**
A: Ya, jika statusnya "published". Jika "draft", tidak akan muncul di halaman publik.

**Q: Bisa ganti role user?**
A: Ya, tapi hanya super admin yang bisa melakukan ini.

**Q: File PDF laporan iuran bisa dihapus?**
A: Ya, admin dan super admin bisa hapus laporan iuran.

**Q: Transaksi yang sudah dibuat bisa dihapus?**
A: Hanya super admin yang bisa hapus transaksi. Admin tidak bisa.

---

## 📞 Bantuan

Jika ada pertanyaan atau masalah:
1. Hubungi admin atau super admin
2. Cek dokumentasi teknis (file `DATABASE_ERD_AND_BLUEPRINT.md`)
3. Hubungi developer website

---

**Dokumen ini dibuat untuk memudahkan pemahaman tentang struktur dan cara kerja website Bukit Damar. Semoga bermanfaat!** ✨

