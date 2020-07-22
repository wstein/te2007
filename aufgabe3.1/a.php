<?php
$input = $_POST["T_input"];
echo "Input Number= " . $input . " <br><br>";

for ($i = 1; $i <= $input; $i++) {
    echo $i . ", ";
}
