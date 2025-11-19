#!/bin/bash

# Script helper untuk testing forgot password
# Usage: ./test-forgot-password.sh [email]

echo "=========================================="
echo "  Testing Forgot Password - Bukit Damar"
echo "=========================================="
echo ""

# Warna untuk output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Cek apakah email diberikan sebagai argument
if [ -z "$1" ]; then
    echo -e "${YELLOW}Usage: ./test-forgot-password.sh [email]${NC}"
    echo ""
    echo "Contoh: ./test-forgot-password.sh user@example.com"
    echo ""
    exit 1
fi

EMAIL=$1

echo "Email yang akan di-test: $EMAIL"
echo ""

# Cek apakah user ada di database
echo "1. Mengecek apakah user ada di database..."
php artisan tinker --execute="
\$user = App\Models\User::where('email', '$EMAIL')->first();
if (\$user) {
    echo '✓ User ditemukan: ' . \$user->name . ' (' . \$user->email . ')' . PHP_EOL;
} else {
    echo '✗ User tidak ditemukan dengan email: $EMAIL' . PHP_EOL;
    exit(1);
}
"

if [ $? -ne 0 ]; then
    echo ""
    echo -e "${YELLOW}User tidak ditemukan. Pastikan email sudah terdaftar di database.${NC}"
    exit 1
fi

echo ""
echo "2. Mengirim reset password link..."
php artisan tinker --execute="
use Illuminate\Support\Facades\Password;
\$status = Password::sendResetLink(['email' => '$EMAIL']);
echo 'Status: ' . \$status . PHP_EOL;
"

echo ""
echo "3. Mencari reset link di log file..."
echo ""

# Cek log file untuk reset link
LOG_FILE="storage/logs/laravel.log"
if [ -f "$LOG_FILE" ]; then
    echo -e "${GREEN}Reset link ditemukan di log:${NC}"
    echo "----------------------------------------"
    # Cari reset link di log (baris terakhir yang mengandung reset-password)
    tail -100 "$LOG_FILE" | grep -o "reset-password/[^[:space:]]*" | tail -1 | while read -r link; do
        if [ ! -z "$link" ]; then
            echo "http://localhost/$link?email=$EMAIL"
            echo ""
            echo "Atau buka file log untuk melihat email lengkap:"
            echo "tail -f $LOG_FILE"
        fi
    done

    # Jika tidak ditemukan di tail, cari di seluruh file
    if ! tail -100 "$LOG_FILE" | grep -q "reset-password"; then
        echo "Mencari di seluruh log file..."
        grep -o "reset-password/[^[:space:]]*" "$LOG_FILE" | tail -1 | while read -r link; do
            if [ ! -z "$link" ]; then
                echo "http://localhost/$link?email=$EMAIL"
            fi
        done
    fi
else
    echo -e "${YELLOW}Log file tidak ditemukan: $LOG_FILE${NC}"
fi

echo ""
echo "4. Untuk melihat email lengkap, jalankan:"
echo "   tail -f storage/logs/laravel.log | grep -A 10 'password reset'"
echo ""
echo "5. Atau cek token di database:"
echo "   php artisan tinker"
echo "   DB::table('password_reset_tokens')->where('email', '$EMAIL')->first();"
echo ""
echo -e "${GREEN}Testing selesai!${NC}"

