#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>
#include <Adafruit_Sensor.h>
#include <DHT.h>
#include <SPI.h>
#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
WiFiServer server(80);

char str;
#define DHTPIN 14
#define DHTTYPE    DHT11

DHT dht(DHTPIN, DHTTYPE);

float hum;  //Stores humidity value
float temp;
/* Set these to your desired credentials. */
const char *ssid = "Manok na Pula";  //ENTER YOUR WIFI SETTINGS
const char *password = "phoebelieve97";

void setup() {
  Serial.begin(9600);
  delay(10);
  dht.begin();
  WiFi.mode(WIFI_OFF);        //Prevents reconnection issue (taking too long to connect)
  delay(1000);
  WiFi.mode(WIFI_STA);
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.print(ssid);

  WiFi.begin(ssid,password);

  while(WiFi.status() != WL_CONNECTED) {
      delay(500);
      Serial.print(".");
    }

  Serial.println("");
  Serial.print("Wifi Connected");
  Serial.println("");

  server.begin();
  Serial.println("Server Started");

  Serial.println(WiFi.localIP());
  
}

void loop() {

  asd();
  delay(2000);
  WiFiClient client = server.available();
  if(!client) { return; }
  while(!client.available()) {
      delay(1);
    }

  String req = client.readStringUntil('\r');
  client.flush();

  int val;
  if(req.indexOf("/gpio/01") != -1) {
    Serial.write('A');
    delay(200);
       
  }
  else if(req.indexOf("/gpio/02") != -1) {
    Serial.write('B');
    delay(200);
       
  }
  else if(req.indexOf("/gpio/03") != -1) {
    Serial.write('C');
    delay(200);
       
  }
  else if(req.indexOf("/gpio/04") != -1) {
    Serial.write('D');
    delay(200);
       
  }
  else if(req.indexOf("/gpio/11") != -1) {
    Serial.write('E');
    delay(200);
       
  }
  else if(req.indexOf("/gpio/21") != -1) {
    Serial.write('F');
    delay(200);
       
  }
  else if(req.indexOf("/gpio/20") != -1) {
    Serial.write('G');
    delay(200);
       
  }
  else if(req.indexOf("/gpio/31") != -1) {
    Serial.write('H');
    delay(200);
       
  }
  else if(req.indexOf("/gpio/30") != -1) {
    Serial.write('I');
    delay(200);
        
  }
  else if(req.indexOf("/gpio/40") != -1) {
    Serial.write('J');
    delay(200);
        
  }   
  client.flush();

String s = "HTTP/1.1 200 OK \r\nContent-Type: text/html\r\n\r\n<!DOCTYPE HTML>\r\n<html>\r\nGPIO is now ON";

client.print(s);
client.println("HTTP/1.1 200 OK\r\nContent-Type: text/html\r\n\r\n <!DOCTYPE html>\n<html>\n<head>\n\t<title></title>\n\n\n</head>\n<body style=\"margin: 0;padding: 0;background: radial-gradient(white,black);min-height: 100vh;\">\n<header style=\"text-align: center; width: 50%;height: 50px; margin: 0 auto 20px auto;\">\n\t");
client.println("<h1 style=\" font-size:3rem;\"><span style=\"background:black;color:white;border-radius: 30px 30px 30px 30px;padding:10px 0 10px 10px;\">ONLINE<span style=\"background:orange;color:black;border-radius:30px;padding:10px 10px 10px 0;\">ELEVATOR</span></span></h1>\t\n</header>\n<div style=\"display: flex; justify-content: space-around; width: 80%; margin:0 auto;\">\n\t");
client.println("<div style=\"background-color: #73c0d7;padding: 20px; border-raduis:30px;\">\n\t<h2>OUTSIDE BUTTON</h2>\n\t");
client.println("<label>1st floor</label><br>\t\n\t<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/11\\\">UP</a> </button> <br><br>\n\n\t");
client.println("<label>2nd floor</label><br>\t\n\t<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/21\\\">DOWN</a></button> <br>\n\t");
client.println("<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/20\\\">UP</a></button> <br>\n\n\t");
client.println("<label>3rd floor</label><br>\n\t<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/31\\\">DOWN</a></button> <br>\n\t");
client.println("<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/30\\\">UP</a></button> <br>\n\n\t");
client.println("<label>4th floor</label><br>\n\t<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/40\\\">DOWN</a></button> <br>\n\t");
client.println("</div>\n\n\t<div style=\"background-color: #7898f3;padding: 20px;border-raduis:30px;\">\n\t\t<h2>INSIDE BUTTON</h2>\n\t\t");
client.println("<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/01\\\">1st</a></button> <br><br>\n\t\t");
client.println("<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/02\\\">2nd</a></button> <br><br>\n\t\t");
client.println("<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/03\\\">3rd</a></button> <br><br>\n\t\t");
client.println("<button style=\"border-radius: 20px;border: 2px solid;text-align: center;width: 100px;height: 50px;margin: 5px 0 5px 50px;background: #71bdff;\"><a style=\"padding:10px 30px; text-decoration: none;\" href=\\\"/gpio/04\\\">4th</a></button> \n\n\t</div>\n</div>\n\t\n</body>\n</html>");
 
delay(1);



}

void asd() {

  HTTPClient http;    //Declare object of class HTTPClient
  
  String station, temperature , humidity, getData, Link;
  station = "M";
  float temp = dht.readTemperature();
  float hum = dht.readHumidity();
  Serial.print(temp);
  //GET Data
  getData = "?station=" + station + "&temperature=" + temp + "&humidity=" + hum ;  //Note "?" added at front
  Link = "http://192.168.254.146/ahrve/getdemo.php" + getData;
  
  http.begin(Link);     //Specify request destination
  
  int httpCode = http.GET();            //Send the request
  String payload = http.getString();    //Get the response payload

  Serial.println(httpCode);   //Print HTTP return code
  Serial.println(payload);    //Print request response payload

  http.end();  //Close connection
  }

    
