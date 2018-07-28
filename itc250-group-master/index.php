<?php // Weather Converter Project
require_once("./lib/converter.php"); // Get the Converter
require_once("./lib/inputchecker.php"); // Get the Input Checker

// Start the page
include("./views/header.html");

if(isset($_POST["Temp"])){
  // Get our input from the user
  $temp = $_POST["Temp"];
  $input = $_POST["InputMeasurement"];
  $output = $_POST["OutputMeasurement"];
  
  // Grab the input checker
  $inputChecker = new InputChecker();

  // Is the input valid?
  if(!$inputChecker->checkNum($temp)){ // No
    include("./views/error-input.html");
    include("./views/forum.html");
  }
  else{
    // Build a converter
    $converter = new Converter();

    // Actually do the conversion
    $result = $converter->convert($temp, $input, $output);

    // Tell the user the result
    include("./views/result.php");
    include("./views/extra.php");
  }
}
else{ // No info set. Show the forum.
  include("./views/forum.html");
}

// Start the page
include("./views/footer.html");
