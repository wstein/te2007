<?php
$vorname = $_POST["T_KndVorname"];
$name = $_POST["T_KndName"];
$plz = $_POST["T_KndPLZ"];
$ort = $_POST["T_KndOrt"];
$strasse = $_POST["T_KndStrasse"];
$hausnr = $_POST["T_KndHausNr"];
$email = $_POST["T_Email"];
$kommentar = $_POST["TA_Nachricht"];
$produkte = $_POST["produkte"];
$anrede = $_POST["PD_Anrede"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>

<body>
   <h2>Sie haben die folgenden Daten &uuml;bermittelt:</h2>
   <table border="1">
      <tr>
         <td>Produkt</td>
         <td>
            <?= $produkte ?>
         </td>
      </tr>
      <tr>
         <td>Anrede</td>
         <td><?= $anrede ?></td>
      </tr>

      <tr>
         <td>Vorname</td>
         <td><?= $vorname ?></td>
      </tr>
      <tr>
         <td>Nachname</td>
         <td><?= $name ?></td>
      </tr>
      <tr>
         <td>PLZ</td>
         <td><?= $plz ?></td>
      </tr>
      <tr>
         <td>Ort</td>
         <td><?= $ort ?></td>
      </tr>
      <tr>
         <td>Strasse</td>
         <td><?= $strasse ?></td>
      </tr>
      <tr>
         <td>Hausnummer</td>
         <td><?= $hausnr ?></td>
      </tr>
      <tr>
         <td>Email</td>
         <td><?= $email ?></td>
      </tr>
      <tr>
         <td>Bemerkung</td>
         <td><?= $kommentar ?></td>
      </tr>

   </table>
</body>

</html>