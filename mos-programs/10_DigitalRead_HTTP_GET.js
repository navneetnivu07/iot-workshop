load('api_gpio.js');
load("api_timer.js");
load("api_http.js")

let d6 = 12; // Button or PIR
GPIO.set_mode(d6, GPIO.MODE_INPUT); // Config D6 as Input Pin

let A0 = 0;

// Timer Call Every Second
Timer.set(5000, true, function () {
  let value = GPIO.read(d6);
  print('Button Value D6 : ', value);

  let voltage = ADC.read(A0);
  let sensorValue = voltage * (3.3 / 1023.0);
  print(sensorValue * 10);

  HTTP.query({
    url: 'localhost/insert.php?d=' + value + '&a=' + sensorValue,
    success: function (body, full_http_msg) {
      print(body);
    },
    error: function (err) {
      print(err);
    },
  });
}, null)