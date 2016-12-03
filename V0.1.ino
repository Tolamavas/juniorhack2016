int sensorPin = 0;

void setup()
{
  Serial.begin(9600);
}
 
void loop()     
{
 int reading = (5.0 * analogRead(3) * 100) / 1024;  
 
 Serial.print(reading); Serial.println(" degrees C");
 
 delay(1000);

 if (reading < 24)
 {
  digitalWrite(13, HIGH);
  }
 else
 {
  digitalWrite(13, LOW);
  }                             
}
