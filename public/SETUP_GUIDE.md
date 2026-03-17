# Setup Guide: Menghubungkan ESP + DHT11 ke Arctic Vision Web

## 📋 Daftar Isi

1. [Hardware Setup](#hardware-setup)
2. [Software Setup](#software-setup)
3. [Konfigurasi Backend](#konfigurasi-backend)
4. [Upload Kode ke ESP](#upload-kode-ke-esp)
5. [Testing & Troubleshooting](#testing--troubleshooting)

---

## 🔧 Hardware Setup

### Komponen yang Dibutuhkan:

- ESP8266 atau ESP32
- Sensor DHT11
- Kabel jumper
- Power supply (USB atau external)

### Koneksi DHT11 ke ESP:

```
DHT11 PIN         ESP8266      ESP32
─────────────────────────────────────
VCC (merah)   →  5V / 3.3V  →  5V / 3.3V
GND (hitam)   →  GND        →  GND
DATA (kuning) →  D4 (GPIO2) →  GPIO4
```

**Catatan:**

- ESP8266 menggunakan pin D4 (GPIO2)
- ESP32 menggunakan pin GPIO4
- Anda bisa menggunakan pin lain, tapi harus disesuaikan di kode

---

## 💻 Software Setup

### 1. Install Arduino IDE

- Download dari: https://www.arduino.cc/en/software
- Install sesuai OS Anda

### 2. Setup Board di Arduino IDE

**Untuk ESP8266:**

1. File → Preferences
2. Di "Additional Board Manager URLs" tambahkan:
    ```
    http://arduino.esp8266.com/stable/package_esp8266com_index.json
    ```
3. Tools → Board Manager → Cari "ESP8266" → Install
4. Tools → Board → Pilih "NodeMCU 1.0" atau "Generic ESP8266 Module"

**Untuk ESP32:**

1. File → Preferences
2. Di "Additional Board Manager URLs" tambahkan:
    ```
    https://raw.githubusercontent.com/espressif/arduino-esp32/gh-pages/package_esp32_index.json
    ```
3. Tools → Board Manager → Cari "ESP32" → Install
4. Tools → Board → Pilih "ESP32 Dev Module" atau sesuai board Anda

### 3. Install Library yang Diperlukan

1. Buka Arduino IDE
2. Sketch → Include Library → Manage Libraries
3. Cari dan install:
    - **DHT sensor library** (by Adafruit)
    - **Adafruit Unified Sensor** (dependency DHT)
    - **ArduinoJson** (by Benoit Blanchon)

---

## ⚙️ Konfigurasi Backend

### 1. Buat Folder untuk Penyimpanan Data

```bash
mkdir -p storage/app/sensor
chmod 777 storage/app/sensor
```

### 2. API Endpoints yang Tersedia:

| Method | Endpoint                       | Deskripsi              |
| ------ | ------------------------------ | ---------------------- |
| POST   | `/api/sensor/data`             | Menerima data dari ESP |
| GET    | `/api/sensor/latest`           | Ambil data terbaru     |
| GET    | `/api/sensor/history?limit=24` | Ambil history data     |

### 3. Response Format

**POST `/api/sensor/data` - Request:**

```json
{
    "temperature": -15.8,
    "humidity": 68
}
```

**POST `/api/sensor/data` - Response:**

```json
{
    "status": "success",
    "message": "Data sensor berhasil disimpan",
    "data": {
        "temperature": -15.8,
        "humidity": 68,
        "timestamp": "2025-03-17T10:30:45Z",
        "ip": "192.168.1.50"
    }
}
```

**GET `/api/sensor/latest` - Response:**

```json
{
    "status": "success",
    "data": {
        "temperature": -15.8,
        "humidity": 68,
        "timestamp": "2025-03-17T10:30:45Z"
    }
}
```

---

## 📤 Upload Kode ke ESP

### Pilihan Kode:

#### **Opsi A: Kode Sederhana (Rekomendasi untuk pemula)**

- File: `/public/esp-dht11-example.ino`
- Mengirim data langsung ke Laravel API saja
- Setup: Ubah SSID, PASSWORD, SERVER_URL

#### **Opsi B: Kode dengan Blynk (Jika sudah ada project Blynk)**

- File: `/public/esp-dht11-blynk-laravel.ino`
- Mengirim data ke **Blynk + Laravel** secara bersamaan
- Setup: Ubah IP server (server & port), SSID, PASSWORD
- Cocok jika Anda sudah pakai Blynk dan ingin integrasi ke web juga

---

### 1. Download Kode Sesuai Opsi

Pilih salah satu file di atas sesuai kebutuhan Anda

### 2. Edit Konfigurasi

**Untuk Opsi A (Simple):**
Buka file `esp-dht11-example.ino` dan ubah:

```cpp
#define SSID "YOUR_WIFI_SSID"           // Ganti dengan WiFi Anda
#define PASSWORD "YOUR_WIFI_PASSWORD"   // Ganti dengan password WiFi
#define SERVER_URL "http://192.168.1.100:8000/api/sensor/data"  // Ganti dengan IP/domain server
```

Cari IP server Anda:

```bash
# Windows
ipconfig

# Mac/Linux
ifconfig
```

**Untuk Opsi B (Blynk + Laravel):**
Buka file `esp-dht11-blynk-laravel.ino` dan ubah:

```cpp
// ===== KONFIGURASI LARAVEL API =====
const char* server = "192.168.1.100";  // Ganti dengan IP server/domain Anda
const int port = 8000;                 // Port Laravel (default 8000)

// Blynk credentials (sudah otomatis dari #define di atas)
#define BLYNK_AUTH_TOKEN "qus7-vooO6vz5ayE0ODX2AKZFVRfzU-R"
#define BLYNK_TEMPLATE_ID "TMPL69FRr9PJQ"

char ssid[] = "ZTE_2.lalu_2.4G";       // Ganti dengan WiFi Anda
char pass[] = "90909090";              // Ganti dengan password WiFi
```

**Keuntungan Opsi B:**
✅ Data tersimpan di Blynk (bisa lihat history di app Blynk)
✅ Data juga ke web Laravel (bisa lihat di halaman monitoring)
✅ Redundansi - jika satu server down, masih punya yang satunya
✅ Bisa kontrol dari 2 tempat (Blynk + Web)

### 3. Upload ke ESP

1. Hubungkan ESP ke komputer via USB
2. Di Arduino IDE:
    - Tools → Port → Pilih port ESP
    - Tools → Upload Speed → 115200
    - Sketch → Upload (atau Ctrl+U)
3. Tunggu sampai "Upload Complete"

### 4. Monitor Serial Output

1. Tools → Serial Monitor
2. Set baud rate ke 115200
3. Lihat output dari ESP

Seharusnya terlihat seperti:

```
=== Arctic Vision Sensor Node ===
Initializing DHT11 sensor...
Connecting to WiFi: YOUR_NETWORK
...
✓ WiFi Connected!
IP Address: 192.168.1.50

--- Sending Sensor Data ---
Temperature: 25.5 °C
Humidity: 60 %
HTTP Response Code: 201
✓ Data sent successfully!
```

---

## 🧪 Testing & Troubleshooting

### Testing API Secara Manual

**Kirim data dummy:**

```bash
curl -X POST http://localhost:8000/api/sensor/data \
  -H "Content-Type: application/json" \
  -d '{"temperature": -15.8, "humidity": 68}'
```

**Ambil data terbaru:**

```bash
curl http://localhost:8000/api/sensor/latest
```

**Ambil history (24 data terakhir):**

```bash
curl http://localhost:8000/api/sensor/history?limit=24
```

### Troubleshooting

| Problem                         | Solusi                                              |
| ------------------------------- | --------------------------------------------------- |
| WiFi tidak connect              | Cek SSID & password, pastikan WiFi 2.4GHz           |
| Data tidak terkirim             | Cek firewall, pastikan server bisa diakses dari ESP |
| Sensor membaca 0                | Cek koneksi DHT11, ganti pin jika perlu             |
| Halaman monitoring tidak update | Buka DevTools (F12), cek Console untuk error        |

### Cek Status ESP di Serial Monitor

```
Temperature reading error?
→ Cek koneksi pin DATA DHT11 ke ESP
→ Coba ganti dengan pin lain

WiFi connect error?
→ Cek SSID & password
→ Pastikan board sudah punya WiFi (ESP8266/ESP32)

HTTP connection error?
→ Cek IP address server
→ Pastikan server Laravel sedang running
→ Cek firewall port 8000
```

---

## 📊 Webpage Monitoring

Setelah setup selesai, akses halaman monitoring:

```
http://localhost:8000/monitoring
```

Data akan otomatis update setiap 5 detik dari API backend.

**Status Indicator:**

- 🟢 **Online** - Data updated dalam 60 detik terakhir
- 🟡 **Warning** - Data tidak update lebih dari 60 detik
- 🔴 **Offline** - Data tidak update lebih dari 5 menit

---

## 📝 Catatan Penting

### Umum:

1. **Keep ESP powered on**: ESP harus selalu aktif untuk mengirim data
2. **WiFi stability**: Pastikan WiFi stabil dan ESP memiliki sinyal bagus
3. **Data storage**: Data disimpan di `storage/app/sensor/` sebagai JSON file
4. **Data retention**: Hanya 100 data terakhir yang disimpan di history

### Untuk Opsi A (Simple):

- Update frequency: Arduino sketch mengirim data setiap 10 detik (bisa diubah di `SEND_INTERVAL`)

### Untuk Opsi B (Blynk):

- Data dikirim setiap 2 detik ke Blynk + Laravel
- Pastikan Blynk auth token valid
- Server Laravel harus accessible dari local network (bukan localhost)
- Jika menggunakan domain/IP eksternal, pastikan firewall/port forwarding sudah diatur

---

## 🆘 Support

Jika ada masalah, cek:

1. Serial Monitor output dari ESP (Tools → Serial Monitor)
2. Laravel logs di `storage/logs/`
3. Browser console (F12 → Console tab)
4. Pastikan semua dependencies sudah terinstall

Selamat setup! 🎉
