# 🔐 API Security Update - Panduan Setup

Sistem sudah diupdate dengan **API Key Authentication** untuk keamanan!

---

## 📋 Apa yang Berubah

### **Sebelumnya (TIDAK AMAN):**

```
Siapa saja bisa POST data ke /api/sensor/data
❌ POST /api/sensor/data dengan data palsu
❌ Tidak ada validasi pengiriman data
```

### **Sekarang (AMAN):**

```
Hanya ESP dengan API Key yang valid bisa POST
✅ Perlu X-API-Key header
✅ Invalid key = 401 Unauthorized
```

---

## 🔑 API Key

**Lokasi:** Tersimpan di `.env` file

```bash
SENSOR_API_KEY=arctic_vision_sensor_key_9a7f2b8e1c4d5f6e_secure_token
```

### Cara Generate API Key Baru (jika ingin):

```bash
# Gunakan command ini untuk generate random key
php -r "echo 'SENSOR_API_KEY=' . bin2hex(random_bytes(32)) . PHP_EOL;"
```

Kemudian update `.env` dengan output-nya.

---

## 📝 Update Arduino Code

### Step 1: Gunakan Kode Baru

- File: `/public/esp-dht11-blynk-laravel-SECURE.ino`
- Ini adalah versi dengan API Key authentication

### Step 2: Sesuaikan Konfigurasi

```cpp
const char* server = "monitoring.yourdomain.com";  // ← Domain Anda
String apiKey = "arctic_vision_sensor_key_9a7f2b8e1c4d5f6e_secure_token";  // ← SAMA dengan .env
```

**PENTING:** API Key di Arduino **HARUS SAMA** dengan `SENSOR_API_KEY` di `.env`

### Step 3: Upload ke ESP

- Buka di Arduino IDE
- Upload seperti biasa
- Check Serial Monitor untuk output

---

## ✅ Testing

### Di Serial Monitor, seharusnya terlihat:

```
=== Data Sensor ===
Suhu: 25.5 °C  | Kelembapan: 60 %
✓ Data sent to Blynk
Connecting to Laravel server: monitoring.yourdomain.com:443
✓ Connected to Laravel server
✓ Data successfully sent to Laravel!  ← SUCCESS!
```

### Jika API Key SALAH:

```
✗ UNAUTHORIZED - Check API Key!
Response: ...401...
```

---

## 🧪 Manual Testing (Optional)

Kirim request dengan curl:

**BERHASIL (dengan API Key yang benar):**

```bash
curl -X POST https://monitoring.yourdomain.com/api/sensor/data \
  -H "X-API-Key: arctic_vision_sensor_key_9a7f2b8e1c4d5f6e_secure_token" \
  -H "Content-Type: application/json" \
  -d '{"temperature": 25.5, "humidity": 60}'
```

**GAGAL (tanpa API Key):**

```bash
curl -X POST https://monitoring.yourdomain.com/api/sensor/data \
  -H "Content-Type: application/json" \
  -d '{"temperature": 25.5, "humidity": 60}'
# Response: 401 Unauthorized
```

---

## 📊 REST API (Unchanged)

Endpoint untuk **read data** tetap public (tidak perlu API Key):

```bash
# Ambil data terbaru
GET https://monitoring.yourdomain.com/api/sensor/latest

# Ambil history
GET https://monitoring.yourdomain.com/api/sensor/history?limit=100
```

---

## 🛡️ Security Checklist

| ✓   | Fitur                                         |
| --- | --------------------------------------------- |
| ✅  | API Key pada POST endpoint                    |
| ✅  | HTTPS via Cloudflare Tunnel                   |
| ✅  | Input validation (temperature & humidity)     |
| ✅  | Read endpoints public (monitoring page works) |
| ✅  | Write endpoint protected (only ESP)           |

---

## 💾 Backup API Key

```
SENSOR_API_KEY=arctic_vision_sensor_key_9a7f2b8e1c4d5f6e_secure_token
```

**Simpan di tempat aman!** Jika lupa, regenerate dengan command PHP di atas.

---

## 🔄 Migrate dari Old Code

Jika Anda sudah pakai kode lama tanpa API Key:

1. Download `/public/esp-dht11-blynk-laravel-SECURE.ino`
2. Update `server` dan `apiKey` di dalamnya
3. Upload ke ESP
4. Check Serial Monitor

**Done!** Sistem sekarang aman dari unauthorized requests.

---

## 📞 Troubleshooting

| Error                    | Solusi                                     |
| ------------------------ | ------------------------------------------ |
| `✗ UNAUTHORIZED`         | API Key di Arduino tidak match dengan .env |
| `Connect timeout`        | Server tidak online, check Laravel running |
| Data tidak muncul di web | Check apakah Serial Monitor shows success  |

---

Selesai! Sistem monitoring Anda sekarang **AMAN** 🔐
