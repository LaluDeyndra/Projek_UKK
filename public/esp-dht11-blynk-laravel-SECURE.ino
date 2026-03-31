#define BLYNK_TEMPLATE_ID "TMPL69FRr9PJQ"
#define BLYNK_TEMPLATE_NAME "Monitoring Suhu Lalu"
#define BLYNK_AUTH_TOKEN "qus7-vooO6vz5ayE0ODX2AKZFVRfzU-R"

#include <WiFiClientSecure.h>
#include <BlynkSimpleEsp8266.h>
#include <ESP8266HTTPClient.h>
#include "DHT.h"

#define DHTPIN D7       // pin data DHT11
#define DHTTYPE DHT11

char auth[] = BLYNK_AUTH_TOKEN;
char ssid[] = "ZTE_2.lalu_2.4G";       // ganti dengan nama WiFi kamu
char pass[] = "90909090";              // ganti dengan password WiFi kamu

// ===== KONFIGURASI LARAVEL API (SECURE) =====
const char* server = "www.arvi.life";  // [Penting] Ganti dengan Domain Ngrok atau IPv4 Laptop Anda
const int port = 443;               // [Penting] 80 untuk HTTP, 443 untuk HTTPS (Pakai 443 jika Ngrok)
String apiEndpoint = "/api/sensor/data";
String apiKey = "";  // SAMA PERSIS dengan .env SENSOR_API_KEY

DHT dht(DHTPIN, DHTTYPE);
BlynkTimer timer;

// Jika Anda memakai IP Lokal (192.168.x.x / Port 80), gunakan WiFiClient biasa:
// WiFiClient wifiClient; 
// Tapi jika server memakai HTTPS/Ngrok (Port 443), gunakan WiFiClientSecure:
WiFiClientSecure wifiClient;

void kirimData() {
  float kelembapan = dht.readHumidity();
  float suhu = dht.readTemperature();

  if (isnan(kelembapan) || isnan(suhu)) {
    Serial.println("Gagal membaca data dari sensor!");
    return;
  }

  Serial.print("\n=== Data Sensor ===");
  Serial.print("Suhu: ");
  Serial.print(suhu);
  Serial.print(" °C  |  Kelembapan: ");
  Serial.print(kelembapan);
  Serial.println(" %");

  // ===== KIRIM KE BLYNK =====
  Blynk.virtualWrite(V0, suhu);        // V0 = suhu
  Blynk.virtualWrite(V1, kelembapan);  // V1 = kelembapan
  Serial.println("✓ Data sent to Blynk");

  // ===== KIRIM KE LARAVEL (DENGAN API KEY) =====
  kirimKeLaravel(suhu, kelembapan);
}

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

  // Buat JSON payload
  String jsonPayload = "{\"temperature\":" + String(temperature, 2) + ",\"humidity\":" + String(humidity, 2) + "}";

  // Buat HTTP request DENGAN API KEY HEADER
  String request = String("POST ") + apiEndpoint + " HTTP/1.1\r\n" +
                   "Host: " + String(server) + "\r\n" +
                   "X-API-Key: " + apiKey + "\r\n" +           // ← API KEY HEADER
                   "Content-Type: application/json\r\n" +
                   "Content-Length: " + jsonPayload.length() + "\r\n" +
                   "Connection: close\r\n" +
                   "\r\n" +
                   jsonPayload;

  Serial.println("Sending request to Laravel with API Key...");

  // Kirim request
  wifiClient.print(request);

  // Baca response
  String response = "";
  while (wifiClient.available()) {
    char c = wifiClient.read();
    response += c;
  }

  wifiClient.stop();

  // Parse response
  if (response.indexOf("201") > 0 || response.indexOf("200") > 0) {
    Serial.println("✓ Data successfully sent to Laravel!");
  } else if (response.indexOf("401") > 0) {
    Serial.println("✗ UNAUTHORIZED - Check API Key!");
    Serial.println("Response: ");
    Serial.println(response);
  } else {
    Serial.println("✗ Failed to send data to Laravel");
    Serial.println("Response: ");
    Serial.println(response);
  }
}

void setup() {
  Serial.begin(115200);
  delay(1000);

  Serial.println("\n\n=== Arctic Vision + Blynk (SECURE) ===");
  Serial.println("Initializing...");

  // Koneksi WiFi dan Blynk
  Blynk.begin(auth, ssid, pass);
  dht.begin();
  
  // Mengabaikan pengecekan SSL Certificate karena HTTPS biasa (Ngrok/Cloudflare) menggunakan sertifikat dinamis
  wifiClient.setInsecure();

  // Kirim data ke Blynk + Laravel setiap 60 detik (1 Menit) untuk "Real-Time Heartbeat"
  timer.setInterval(60000L, kirimData);

  Serial.println("✓ Setup complete!");
}

void loop() {
  Blynk.run();
  timer.run();
}
