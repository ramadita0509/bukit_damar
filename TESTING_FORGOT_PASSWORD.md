# Panduan Pengujian Forgot Password dengan Email Verification di Local

Dokumen ini menjelaskan cara menguji fitur forgot password dengan verifikasi email di lingkungan lokal.

## Metode 1: Menggunakan Log Driver (Paling Sederhana)

Metode ini menggunakan driver `log` yang sudah dikonfigurasi sebagai default. Email akan ditulis ke file log Laravel.

### Langkah-langkah:

1. **Pastikan konfigurasi mail menggunakan log driver**
   
   Pastikan di file `.env` Anda:
   ```env
   MAIL_MAILER=log
   ```

2. **Akses halaman forgot password**
   ```
   http://localhost/forgot-password
   ```
   atau
   ```
   http://127.0.0.1:8000/forgot-password
   ```

3. **Masukkan email yang terdaftar di database**
   - Pastikan email tersebut sudah ada di tabel `users`
   - Submit form

4. **Cek file log untuk melihat reset link**
   
   Buka file log Laravel:
   ```bash
   tail -f storage/logs/laravel.log
   ```
   
   Atau buka file secara langsung:
   ```bash
   cat storage/logs/laravel.log | grep -A 20 "password reset"
   ```

5. **Cari reset link di log**
   
   Di dalam log, Anda akan menemukan email dengan format seperti:
   ```
   Reset Password Notification
   
   You are receiving this email because we received a password reset request for your account.
   
   Reset Password: http://localhost/reset-password/{token}?email={email}
   ```

6. **Copy reset link dan buka di browser**
   - Copy URL reset password dari log
   - Paste di browser untuk mengakses halaman reset password
   - Masukkan password baru

---

## Metode 2: Menggunakan Mailtrap (Recommended untuk Testing)

Mailtrap adalah layanan email testing yang menangkap email tanpa mengirimkannya ke inbox nyata.

### Setup Mailtrap:

1. **Daftar di Mailtrap** (gratis)
   - Kunjungi: https://mailtrap.io/
   - Buat akun dan inbox baru

2. **Dapatkan kredensial SMTP**
   - Di dashboard Mailtrap, pilih inbox Anda
   - Pilih tab "SMTP Settings"
   - Pilih "Laravel" dari dropdown
   - Copy kredensial yang diberikan

3. **Update file `.env`**
   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=your_mailtrap_username
   MAIL_PASSWORD=your_mailtrap_password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=noreply@bukitdamar.com
   MAIL_FROM_NAME="${APP_NAME}"
   ```

4. **Clear config cache**
   ```bash
   php artisan config:clear
   ```

5. **Test forgot password**
   - Akses `/forgot-password`
   - Masukkan email yang terdaftar
   - Submit form
   - Buka Mailtrap inbox di browser
   - Klik email yang masuk
   - Klik link reset password di email

---

