/*
  CONTOH KODE UNTUK ESP8266 / ESP32 + DHT11
  Mengirim data suhu dan kelembaban ke API Laravel
  
  SETUP YANG DIBUTUHKAN:
  1. Pasang DHT11 ke GPIO pin (default: D4/GPIO2 untuk ESP8266, GPIO4 untuk ESP32)
  2. Install library: DHT sensor library by Adafruit
  3. Install library: ArduinoJson
  4. Ganti SSID, PASSWORD, dan SERVER_URL sesuai kebutuhan
  
  KONEKSI DHT11:
  - VCC (merah)     → 5V atau 3.3V
  - GND (hitam)     → GND
  - DATA (kuning)   → GPIO (pin yang dipilih di bawah)
*/

#include <DHT.h>
#include <ESP8266WiFi.h>        // Ganti dengan <WiFi.h> jika pakai ESP32
#include <ESP8266HTTPClient.h>  // Ganti dengan <HTTPClient.h> jika pakai ESP32

// ===== KONFIGURASI =====
#define DHTPIN D4              // GPIO pin untuk DHT11 (ESP8266: D4/GPIO2 | ESP32: GPIO4)
#define DHTTYPE DHT11          // Tipe sensor

#define SSID "YOUR_WIFI_SSID"
#define PASSWORD "YOUR_WIFI_PASSWORD"
#define SERVER_URL "http://192.168.1.100:8000/api/sensor/data"  // Ganti dengan IP/domain Anda

// ===== VARIABEL GLOBAL =====
DHT dht(DHTPIN, DHTTYPE);
WiFiClient client;
HTTPClient http;

unsigned long lastSendTime = 0;
const unsigned long SEND_INTERVAL = 10000;  // Kirim setiap 10 detik

void setup() {
  Serial.begin(115200);
  delay(1000);
  
  Serial.println("\n\n");
  Serial.println("=== Arctic Vision Sensor Node ===");
  Serial.println("Initializing DHT11 sensor...");
  
  // Inisialisasi DHT11
  dht.begin();
  
  // Koneksi WiFi
  connectToWiFi();
}

void loop() {
  // Cek koneksi WiFi
  if (WiFi.status() != WL_CONNECTED) {
    connectToWiFi();
  }

  // Kirim data setiap interval
  if (millis() - lastSendTime >= SEND_INTERVAL) {
    sendSensorData();
    lastSendTime = millis();
  }

  delay(100);
}

void connectToWiFi() {
  Serial.print("Connecting to WiFi: ");
  Serial.println(SSID);
  
  WiFi.begin(SSID, PASSWORD);
  
  int attempts = 0;
  while (WiFi.status() != WL_CONNECTED && attempts < 20) {
    delay(500);
    Serial.print(".");
    attempts++;
  }
  
  if (WiFi.status() == WL_CONNECTED) {
    Serial.println("\n✓ WiFi Connected!");
    Serial.print("IP Address: ");
    Serial.println(WiFi.localIP());
  } else {
    Serial.println("\n✗ Failed to connect to WiFi");
  }
}

void sendSensorData() {
  // Baca data dari DHT11
  float temperature = dht.readTemperature();
  float humidity = dht.readHumidity();
  
  // Cek apakah pembacaan valid
  if (isnan(temperature) || isnan(humidity)) {
    Serial.println("✗ Error reading DHT11 sensor!");
    return;
  }
  
  Serial.println("\n--- Sending Sensor Data ---");
  Serial.print("Temperature: ");
  Serial.print(temperature);
  Serial.println(" °C");
  Serial.print("Humidity: ");
  Serial.print(humidity);
  Serial.println(" %");
  
  // Buat JSON payload
  String jsonPayload = "{\"temperature\":" + String(temperature, 2) + ",\"humidity\":" + String(humidity, 2) + "}";
  
  // Kirim ke server
  http.begin(client, SERVER_URL);
  http.addHeader("Content-Type", "application/json");
  
  int httpResponseCode = http.POST(jsonPayload);
  
  Serial.print("HTTP Response Code: ");
  Serial.println(httpResponseCode);
  
  if (httpResponseCode == 201 || httpResponseCode == 200) {
    Serial.println("✓ Data sent successfully!");
    String response = http.getString();
    Serial.println("Response: ");
    Serial.println(response);
  } else {
    Serial.println("✗ Failed to send data");
    Serial.println(http.errorToString(httpResponseCode));
  }
  
  http.end();
}
