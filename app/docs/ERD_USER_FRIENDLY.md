# 📊 Diagram Database Website Bukit Damar
## Penjelasan Sederhana untuk Pemula

---

## 🎯 Apa Itu ERD?

**ERD (Entity Relationship Diagram)** adalah **gambar yang menunjukkan struktur database** - seperti **denah rumah** yang menunjukkan ruangan-ruangan dan bagaimana mereka terhubung.

Bayangkan database seperti **lemari arsip** yang punya beberapa **laci** (tabel). Setiap laci menyimpan jenis data tertentu.

---

## 📁 Tabel-Tabel di Database (Seperti Laci di Lemari)

### 1. 📋 **Tabel: USERS** (Data Warga/User)
**Seperti "Kartu Warga" - menyimpan data semua orang yang punya akun**

| Nama Kolom | Tipe Data | Penjelasan | Contoh |
|------------|-----------|------------|--------|
| **id** | Nomor | Nomor urut (unik) | 1, 2, 3, ... |
| **name** | Teks | Nama lengkap | "Budi Santoso" |
| **email** | Teks | Email (harus unik) | "budi@email.com" |
| **password** | Teks | Password (terenkripsi) | (tidak bisa dibaca) |
| **role** | Pilihan | Posisi: user/admin/super_admin | "user" |
| **foto_profil** | Teks | Nama file foto | "foto-budi.jpg" |
| **email_verified_at** | Tanggal/Waktu | Kapan email diverifikasi | 2024-01-15 10:30 |
| **remember_token** | Teks | Token untuk "Ingat Saya" | (kode khusus) |
| **created_at** | Tanggal/Waktu | Kapan dibuat | 2024-01-01 08:00 |
| **updated_at** | Tanggal/Waktu | Kapan terakhir diupdate | 2024-01-20 14:00 |

**Contoh Data:**
```
id: 1
name: "Budi Santoso"
email: "budi@email.com"
role: "user"
foto_profil: "foto-budi.jpg"
```

---

### 2. 📰 **Tabel: BLOGS** (Data Artikel/Berita)
**Seperti "Arsip Artikel" - menyimpan semua artikel yang ditulis**

| Nama Kolom | Tipe Data | Penjelasan | Contoh |
|------------|-----------|------------|--------|
| **id** | Nomor | Nomor urut (unik) | 1, 2, 3, ... |
| **judul** | Teks | Judul artikel | "Pengumuman Perbaikan Jalan" |
| **slug** | Teks | URL artikel (unik) | "pengumuman-perbaikan-jalan" |
| **konten** | Teks Panjang | Isi artikel lengkap | (teks artikel) |
| **excerpt** | Teks Panjang | Ringkasan artikel | "Perbaikan jalan akan dimulai..." |
| **gambar** | Teks | Nama file gambar | "perbaikan-jalan.jpg" |
| **kategori** | Teks | Kategori artikel | "Pengumuman" |
| **status** | Pilihan | draft atau published | "published" |
| **user_id** | Nomor | ID penulis (terhubung ke users) | 1 |
| **views** | Angka | Berapa kali dibaca | 150 |
| **created_at** | Tanggal/Waktu | Kapan dibuat | 2024-01-15 09:00 |
| **updated_at** | Tanggal/Waktu | Kapan terakhir diupdate | 2024-01-16 10:00 |

**Contoh Data:**
```
id: 1
judul: "Pengumuman Perbaikan Jalan"
slug: "pengumuman-perbaikan-jalan"
konten: "Perbaikan jalan akan dimulai pada..."
user_id: 2 (artikel ini ditulis oleh user dengan id 2)
status: "published"
views: 150
```

**Hubungan:** Setiap artikel ditulis oleh **satu user** (user_id → users.id)

---

### 3. 💰 **Tabel: TRANSAKSIS** (Data Transaksi Keuangan)
**Seperti "Buku Kas" - menyimpan semua catatan pemasukan dan pengeluaran**

| Nama Kolom | Tipe Data | Penjelasan | Contoh |
|------------|-----------|------------|--------|
| **id** | Nomor | Nomor urut (unik) | 1, 2, 3, ... |
| **tanggal** | Tanggal | Tanggal transaksi | 2024-01-15 |
| **keterangan** | Teks | Penjelasan transaksi | "Iuran warga bulan Januari" |
| **kategori** | Teks | Kategori transaksi | "Iuran" |
| **jenis** | Pilihan | pemasukan atau pengeluaran | "pemasukan" |
| **jumlah** | Angka | Jumlah uang (2 desimal) | 5000000.00 |
| **catatan** | Teks Panjang | Catatan tambahan | "Dari 100 warga @ Rp 50.000" |
| **bukti** | Teks | Nama file bukti | "bukti-iuran-januari.jpg" |
| **created_at** | Tanggal/Waktu | Kapan dibuat | 2024-01-15 10:00 |
| **updated_at** | Tanggal/Waktu | Kapan terakhir diupdate | 2024-01-15 10:00 |

**Contoh Data:**
```
id: 1
tanggal: 2024-01-15
keterangan: "Iuran warga bulan Januari"
kategori: "Iuran"
jenis: "pemasukan"
jumlah: 5000000.00
bukti: "bukti-iuran-januari.jpg"
```

**Catatan:** Tabel ini **tidak terhubung langsung** dengan tabel users. Transaksi adalah milik komplek, bukan milik user tertentu.

---

### 4. 📄 **Tabel: LAPORAN_IURANS** (Data Laporan Iuran)
**Seperti "Arsip Laporan" - menyimpan file PDF laporan iuran**

| Nama Kolom | Tipe Data | Penjelasan | Contoh |
|------------|-----------|------------|--------|
| **id** | Nomor | Nomor urut (unik) | 1, 2, 3, ... |
| **bulan** | Teks | Bulan laporan | "Januari" |
| **tahun** | Teks | Tahun laporan | "2024" |
| **nama_file** | Teks | Nama file PDF | "Laporan_Iuran_Januari_2024.pdf" |
| **path_file** | Teks | Lokasi file di server | "storage/laporan-iuran/..." |
| **judul** | Teks | Judul laporan | "Laporan Iuran Bulan Januari 2024" |
| **keterangan** | Teks Panjang | Penjelasan laporan | "Laporan lengkap iuran warga" |
| **created_at** | Tanggal/Waktu | Kapan dibuat | 2024-01-31 15:00 |
| **updated_at** | Tanggal/Waktu | Kapan terakhir diupdate | 2024-01-31 15:00 |

**Contoh Data:**
```
id: 1
bulan: "Januari"
tahun: "2024"
nama_file: "Laporan_Iuran_Januari_2024.pdf"
path_file: "storage/laporan-iuran/laporan-januari-2024.pdf"
judul: "Laporan Iuran Bulan Januari 2024"
```

**Catatan:** Tabel ini juga **tidak terhubung langsung** dengan tabel users. Laporan adalah milik komplek.

---

### 5. 🔐 **Tabel: SESSIONS** (Data Sesi Login)
**Seperti "Daftar Tamu yang Sedang Masuk" - menyimpan info siapa yang sedang login**

| Nama Kolom | Tipe Data | Penjelasan | Contoh |
|------------|-----------|------------|--------|
| **id** | Teks | ID sesi (unik) | "abc123xyz..." |
| **user_id** | Nomor | ID user yang login (terhubung ke users) | 1 |
| **ip_address** | Teks | Alamat IP komputer | "192.168.1.1" |
| **user_agent** | Teks | Info browser yang dipakai | "Chrome/Windows" |
| **payload** | Teks Panjang | Data sesi | (kode khusus) |
| **last_activity** | Angka | Waktu terakhir aktif | 1705312800 |

**Hubungan:** Setiap sesi dimiliki oleh **satu user** (user_id → users.id)

---

### 6. 🔑 **Tabel: PASSWORD_RESET_TOKENS** (Token Reset Password)
**Seperti "Kode Reset Password" - menyimpan kode untuk reset password**

| Nama Kolom | Tipe Data | Penjelasan | Contoh |
|------------|-----------|------------|--------|
| **email** | Teks | Email user (unik) | "budi@email.com" |
| **token** | Teks | Kode reset password | "abc123xyz..." |
| **created_at** | Tanggal/Waktu | Kapan dibuat | 2024-01-15 10:00 |

**Hubungan:** Terhubung ke users melalui email

---

## 🔗 Hubungan Antar Tabel (Seperti Jalan yang Menghubungkan Rumah)

### 1. **USERS → BLOGS** (Satu ke Banyak)
```
1 User bisa menulis BANYAK Blog
```

**Contoh:**
- User "Budi" (id: 1) menulis 3 artikel
- User "Siti" (id: 2) menulis 5 artikel

**Cara Kerja:**
- Di tabel BLOGS ada kolom `user_id`
- `user_id` = 1 berarti artikel ditulis oleh user dengan id 1

**Gambar:**
```
┌──────────┐         ┌──────────┐
│  USER    │────────▶│  BLOG    │
│ (1 orang)│   1:N   │ (banyak) │
└──────────┘         └──────────┘
```

---

### 2. **USERS → SESSIONS** (Satu ke Banyak)
```
1 User bisa punya BANYAK Sesi (login dari berbagai perangkat)
```

**Contoh:**
- User "Budi" login dari laptop → ada 1 sesi
- User "Budi" login dari HP → ada 1 sesi lagi
- Total: 2 sesi untuk 1 user

**Gambar:**
```
┌──────────┐         ┌──────────┐
│  USER    │────────▶│ SESSION  │
│ (1 orang)│   1:N   │ (banyak) │
└──────────┘         └──────────┘
```

---

### 3. **USERS → PASSWORD_RESET_TOKENS** (Satu ke Banyak)
```
1 User bisa punya BANYAK Token Reset Password (jika lupa password berkali-kali)
```

**Gambar:**
```
┌──────────┐         ┌──────────────────────┐
│  USER    │────────▶│ PASSWORD_RESET_TOKEN │
│ (1 orang)│   1:N   │ (banyak)             │
└──────────┘         └──────────────────────┘
```

---

### 4. **TRANSAKSIS** (Tidak Terhubung)
```
Tabel TRANSAKSIS tidak terhubung langsung dengan USERS
Karena transaksi adalah milik komplek, bukan milik user tertentu
```

**Gambar:**
```
┌──────────┐
│TRANSAKSI │  (Standalone - tidak terhubung)
│(banyak)  │
└──────────┘
```

---

### 5. **LAPORAN_IURANS** (Tidak Terhubung)
```
Tabel LAPORAN_IURANS tidak terhubung langsung dengan USERS
Karena laporan adalah milik komplek, bukan milik user tertentu
```

**Gambar:**
```
┌──────────────┐
│LAPORAN_IURAN │  (Standalone - tidak terhubung)
│  (banyak)    │
└──────────────┘
```

---

## 📊 Diagram Lengkap (Versi Sederhana)

```
┌─────────────────────────────────────────────────────────────┐
│                    DATABASE BUKIT DAMAR                     │
└─────────────────────────────────────────────────────────────┘

┌──────────────┐
│    USERS     │  (Data Warga/User)
│              │
│  id          │
│  name        │
│  email       │──┐
│  password    │  │
│  role        │  │
│  foto_profil │  │
└──────┬───────┘  │
       │          │
       │ 1:N      │ 1:N
       │          │
       ▼          ▼
┌──────────────┐  ┌──────────────────────┐
│    BLOGS     │  │     SESSIONS         │
│              │  │                      │
│  id          │  │  id                  │
│  user_id ────┘  │  user_id ────────────┘
│  judul          │  ip_address
│  slug           │  user_agent
│  konten         │  payload
│  status         │  last_activity
│  views          │
└────────────────┘  └──────────────────────┘

┌──────────────┐
│ TRANSAKSIS   │  (Tidak terhubung)
│              │
│  id          │
│  tanggal     │
│  keterangan  │
│  jenis       │
│  jumlah      │
│  bukti       │
└──────────────┘

┌──────────────┐
│LAPORAN_IURANS│  (Tidak terhubung)
│              │
│  id          │
│  bulan       │
│  tahun       │
│  nama_file   │
│  path_file   │
└──────────────┘

┌──────────────────────┐
│PASSWORD_RESET_TOKENS │
│                      │
│  email ──────────────┼─── (terhubung via email)
│  token               │
└──────────────────────┘
```

---

## 💡 Penjelasan Istilah Teknis

### **PK (Primary Key)**
- **Artinya:** Kunci Utama
- **Fungsi:** Nomor unik untuk setiap baris data
- **Contoh:** id = 1, 2, 3, ... (tidak boleh sama)

### **FK (Foreign Key)**
- **Artinya:** Kunci Asing
- **Fungsi:** Menghubungkan ke tabel lain
- **Contoh:** `user_id` di tabel BLOGS menghubungkan ke `id` di tabel USERS

### **1:N (One to Many)**
- **Artinya:** Satu ke Banyak
- **Contoh:** 1 user bisa menulis banyak blog

### **Unique**
- **Artinya:** Harus Unik (tidak boleh sama)
- **Contoh:** Email harus unik (tidak boleh ada 2 user dengan email sama)

### **Nullable**
- **Artinya:** Boleh Kosong
- **Contoh:** `foto_profil` boleh kosong (user tidak wajib punya foto)

### **Enum**
- **Artinya:** Pilihan Terbatas
- **Contoh:** `role` hanya bisa: "user", "admin", atau "super_admin"

---

## 📝 Contoh Skenario: Bagaimana Data Terhubung?

### Skenario 1: User Menulis Artikel

```
1. User "Budi" (id: 1) login
2. Budi menulis artikel "Pengumuman Acara"
3. Sistem simpan ke tabel BLOGS:
   - judul: "Pengumuman Acara"
   - user_id: 1  ← Menghubungkan ke USERS
4. Ketika artikel ditampilkan:
   - Sistem cari user dengan id = 1
   - Tampilkan nama "Budi Santoso" sebagai penulis
```

### Skenario 2: Lihat Semua Artikel User

```
1. User "Budi" (id: 1) ingin lihat semua artikelnya
2. Sistem cari di tabel BLOGS:
   - Cari semua baris dengan user_id = 1
3. Tampilkan semua artikel yang ditulis Budi
```

### Skenario 3: Transaksi Tidak Terhubung dengan User

```
1. Admin tambah transaksi "Iuran Januari"
2. Sistem simpan ke tabel TRANSAKSIS:
   - Tidak ada kolom user_id
   - Transaksi adalah milik komplek
3. Semua user yang login bisa lihat transaksi ini
```

---

## ✅ Checklist: Memahami ERD

Setelah membaca ini, Anda seharusnya bisa:

- [ ] Menjelaskan apa itu tabel USERS dan isinya
- [ ] Menjelaskan apa itu tabel BLOGS dan isinya
- [ ] Menjelaskan apa itu tabel TRANSAKSIS dan isinya
- [ ] Menjelaskan apa itu tabel LAPORAN_IURANS dan isinya
- [ ] Memahami hubungan USERS → BLOGS (1 user bisa menulis banyak blog)
- [ ] Memahami bahwa TRANSAKSIS tidak terhubung dengan USERS
- [ ] Memahami perbedaan PK dan FK
- [ ] Memahami arti "1:N" (satu ke banyak)

---

**Dokumen ini dibuat untuk memudahkan pemahaman tentang struktur database website Bukit Damar. Semoga bermanfaat!** ✨

