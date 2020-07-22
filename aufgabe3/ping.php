<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Simple IP-Tool</title>
    <style type="text/css">
        h1 {
            text-align: center;
        }

        p {
            height: 10px;
            font-size: 26px;
            text-align: center;
        }

        div, input {
            background-color: #c4c4c4;
            padding: 10px;
            width: 400px;
            margin: auto;
        }

        body {
            margin: auto;
            max-width: 400px;
        }
    </style>
</head>
<body>
<div>
    <?php
    ini_set('max_execution_time', 300);
    #Members
    $base_ip = $_POST["T_Netzwerkbasis"];
    $start_ip = $_POST["T_Host-Startadresse"];
    $end_ip = $_POST["T_Host-Endadresse"];
    @$odd = $_POST["CB_odd"];
    #output the input
    echo '<h1><u>Simple IP-Tool</u></h1>';
    echo "Pinge nach: " . $base_ip . "." . $start_ip . "-" . $end_ip . "<br>";
    echo "Die folgenden IP-Adressen sind erreichbar:" . "<br>";
    #Loop
    for ($i = $start_ip; $i <= $end_ip; $i++) {
        if ($odd) {
            if ($i % 2 != 0) {
                exec("ping -n 1 -w 5 $base_ip.$i", $res, $rval);
                if ($rval === 0) echo "\n<p style='color: green'>$base_ip.$i &#10004; ist erreichbar</p>";
            }
        } else {
            exec("ping -n 1 -w 5 $base_ip.$i", $res, $rval);
            if ($rval === 0) echo "\n<p style='color: green'>$base_ip.$i &#10004; ist erreichbar</p>";
        }
    }
    ?>
    <form>
        <input type="button" value="Nochmal Pingen" onclick="window.location.reload()()">
        <input type="button" value="Andere IP Pingen" onclick="history.back()">
    </form>
</div>
</body>
</html>