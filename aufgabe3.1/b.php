<?php
$input = $_POST["T_input"];
echo "Input Number= " . $input . " <br><br>";

for ($i = $input; $i >= 2; $i--) {
    if ($i % 2 == 0) {
        echo $i . ", ";

    }
}