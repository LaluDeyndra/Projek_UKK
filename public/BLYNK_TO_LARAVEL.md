# Quick Guide: Integrasikan Blynk + ESP8266 ke Arctic Vision Web

Panduan ini untuk Anda yang **sudah punya project Blynk** dan ingin menambahkan integrasi ke web Laravel.

---

## 🎯 Apa yang Perlu Dilakukan

Anda hanya perlu **modifikasi 1 bagian** di kode Arduino Anda:

### Sebelum (Kode Lama - hanya ke Blynk):

```cpp
#include <WiFiClient.h>
#include <BlynkSimpleEsp8266.h>
#include "DHT.h"

// ... rest of code
```

### Sesudah (Kode Baru - ke Blynk + Laravel):

```cpp
#include <WiFiClient.h>
#include <BlynkSimpleEsp8266.h>
#include <ESP8266HTTPClient.h>  // ← TAMBAH INI
#include "DHT.h"

// ... rest of code
```

---

## 📝 Step-by-Step

### 1. Buka File Kode Anda di Arduino IDE

### 2. Copy-Paste Dari File Template

Lihat file: `/public/esp-dht11-blynk-laravel.ino`

Atau gunakan **approach minimal** - hanya modifikasi sedikit dari kode lama Anda:

**A. Tambahkan Library:**

```cpp
#include <ESP8266HTTPClient.h>
```

**B. Tambahkan Konfigurasi Laravel:**

```cpp
const char* server = "192.168.100.5";  // GANTI dengan IP server Anda
const int port = 8000;
String apiEndpoint = "/api/sensor/data";
WiFiClient wifiClient;
```

**C. Tambahkan Fungsi Baru:**

```cpp
void kirimKeLaravel(float temperature, float humidity) {
  Serial.print("Connecting to Laravel server: ");
  Serial.print(server);
  Serial.print(":");
  Serial.println(port);

  if (!wifiClient.connect(server, port)) {
    Serial.println("✗ Failed to connect to Laravel server");
    return;
  }

  Serial.println("✓ Connected to Laravel server");

  String jsonPayload = "{\"temperature\":" + String(temperature, 2) + ",\"humidity\":" + String(humidity, 2) + "}";

  String request = String("POST ") + apiEndpoint + " HTTP/1.1\r\n" +
                   "Host: " + String(server) + "\r\n" +
                   "Content-Type: application/json\r\n" +
                   "Content-Length: " + jsonPayload.length() + "\r\n" +
                   "Connection: close\r\n" +
                   "\r\n" +
                   jsonPayload;

  wifiClient.print(request);

  String response = "";
  while (wifiClient.available()) {
    char c = wifiClient.read();
    response += c;
  }

  wifiClient.stop();

  if (response.indexOf("201") > 0 || response.indexOf("200") > 0) {
    Serial.println("✓ Data sent to Laravel!");
  } else {
    Serial.println("✗ Failed to send data to Laravel");
  }
}
```

**D. Modifikasi fungsi `kirimData()`:**

```cpp
void kirimData() {
  float kelembapan = dht.readHumidity();
  float suhu = dht.readTemperature();

  if (isnan(kelembapan) || isnan(suhu)) {
    Serial.println("Gagal membaca data dari sensor!");
    return;
  }

  Serial.print("Suhu: ");
  Serial.print(suhu);
  Serial.print(" °C  |  Kelembapan: ");
  Serial.print(kelembapan);
  Serial.println(" %");

  // Kirim ke Blynk (sama seperti sebelumnya)
  Blynk.virtualWrite(V0, suhu);
  Blynk.virtualWrite(V1, kelembapan);
  Serial.println("✓ Data sent to Blynk");

  // TAMBAH: Kirim ke Laravel juga
  kirimKeLaravel(suhu, kelembapan);
}
```

### 3. Sesuaikan IP Server

Cari IP server Anda:

```bash
# Jika pakai Windows
ipconfig

# Di terminal cari IPv4 Address, contoh: 192.168.100.5
```

Update di kode:

```cpp
const char* server = "192.168.100.5";  // Ganti dengan IP Anda
```

### 4. Upload ke ESP

Sama seperti biasa di Arduino IDE:

- Tools → Board → pilih board ESP Anda
- Tools → Port → pilih COM port
- Sketch → Upload (atau Ctrl+U)

### 5. Monitor dan Test

Buka Serial Monitor (Tools → Serial Monitor), atur baud 115200.

Seharusnya terlihat output:

```
Suhu: 25.5 °C  | Kelembapan: 60 %
✓ Data sent to Blynk
Connecting to Laravel server: 192.168.100.5:8000
✓ Connected to Laravel server
✓ Data sent to Laravel!
```

### 6. Cek Web Monitoring

Buka halaman monitoring di browser:

```
http://server-ip:8000/monitoring
```

Suhu dan kelembaban seharusnya langsung muncul dari data yang dikirim ESP.

---

## 🔧 Troubleshooting

| Error                                      | Solusi                                                                              |
| ------------------------------------------ | ----------------------------------------------------------------------------------- |
| `✗ Failed to connect to Laravel server`    | Cek IP server, pastikan server running, cek firewall                                |
| `Data sent to Blynk` tapi tidak ke Laravel | Pastikan IP server benar, pastikan port 8000 tidak terblokir                        |
| Web monitoring masih menampilkan `--`      | Data belum diterima server, check Serial Monitor output                             |
| `isnan()` error di compiler                | Pastikan library DHT sudah terinstall (Sketch → Include Library → Manage Libraries) |

---

## 📊 Hasil Akhir

Setelah semuanya jalan, Anda akan punya:

✅ **Blynk App** - Tetap bisa monitor dari Blynk mobile app
✅ **Web Dashboard** (Arctic Vision) - Bisa monitor dari website
✅ **Data Tersimpan** - Riwayat 100 data terakhir di server

---

## 💡 Tips

1. **Backup kode lama** sebelum modifikasi
2. **Test dengan Serial Monitor dulu** sebelum jauh-jauh
3. **Jika offline dari Blynk tapi web bekerja:** Cek koneksi Blynk
4. **Jika offline dari web tapi Blynk bekerja:** Cek IP server dan firewall

---

Selamat! Anda sekarang punya integrated IoT monitoring system! 🎉
