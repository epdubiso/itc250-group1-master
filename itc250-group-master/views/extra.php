<?php // Extra credit

echo "
<form action='' method='post'>
  <input class='hidden' type='text' name='Temp' value=$result>
  <input class='hidden' name='InputMeasurement' value=$output>

  <div class='container-half'>
    <div class='description'>To</div>
      <input type='radio' name='OutputMeasurement' id='outC' value='C' checked='checked'>
      <label for='outC'>Celcius</label>
      <input type='radio' name='OutputMeasurement' id='outF' value='F'>
      <label for='outF'>Ferinheight</label>
      <input type='radio' name='OutputMeasurement' id='outK' value='K'>
      <label for='outK'>Kelvin</label>
    </div>
  </div>

  <div class='container-full'>
    <input type='submit' value='Convert'>
  </div>
";