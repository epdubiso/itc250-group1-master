<?php // InputChecker
// Gets input and checks for errors.

class InputChecker{
  public function checkNum($str){
    return is_numeric($str);
  }
}