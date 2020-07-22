<h1 align="center"><u>Das kleine 1 x 1</u></h1>
<table cellpadding='5' border='1' align='center'>
    <?php
    for ($r = 1; $r <= 10; $r++) {
        echo "<tr>";
        for ($s = 1; $s <= 10; $s++) {
            echo "<td>" . ($r * $s) . "</td>", " ";
        }
        echo "<br>";
        echo "<tr>";
    }
    ?>
</table>