<?php
class Converter{

  // Rounds a float to 2 decimal places
  private function roundResults($val){
    return round ($val, 2);
  }

  // Converts fahrenheit to celsius
  private function fahrenheitToCelsius($fahrenheit){
    return 5/9*($fahrenheit-32);
  }
  
  // Converts kelvin to celsius
  private function kelvinToCelsius($kelvin){
    return $kelvin - 273.15;
  }
  
  // Converts celsius to fahrenheit
  private function celsiustoFahrenheit($celsius){
    return $celsius*9/5 + 32;
  }
  
    // Converts celsius to kelvin
  private function celsiustoKelvin($celsius){
    return $celsius + 273.15;
  }

  // Converts a given temprature according to it's input measurment method
  // and output measurement method.
  public function convert($temp, $input, $output){
    // Sanity checking: are the inputs/outputs the same?
    if($input == $output){ // Yes.
      return  $this->roundResults($temp); // So no conversion has to be done.
    }  
    
    // Convert the temp to a Floating Point Value.
    $value = (float)$temp;

    // Convert the inital measurement to Celcius
    switch ($input){
      case "F":
      $value = $this->fahrenheitToCelsius($value);
      break;
      case "K":
      $value = $this->kelvinToCelsius($value);
      break;
    }   
    
    // Now convert the measurement
    switch($output){
      case "F":
      $value = $this->celsiustoFahrenheit($value);
      break;
      case "K":
      $value = $this->celsiustoKelvin($value);
      break;
    }
    // return the value
    return  $this->roundResults($value);
  }
}
