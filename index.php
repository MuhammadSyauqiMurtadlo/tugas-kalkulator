<?php
$inputdec = (empty($_GET["inpdec"])) ? "" : $_GET["inpdec"];
// echo "desimal : $inputdec <br>";

$binnary = "";
$tempDec = $inputdec;
while ($tempDec >= 1) {
    $modulus = $tempDec % 2;
    $binnary = $modulus . $binnary;
    $tempDec = $tempDec - $modulus;
    $tempDec = $tempDec / 2;
    // echo "temp biner: $binnary<br>;
}
// echo "binnery: $binnary <br>;

$octa = "";
$tempDec = $inputdec;
while ($tempDec >= 1) {
    $modulus = $tempDec & 8;
    $octa = $modulus . $octa;
    $tempDec = $tempDec - $modulus;
    if ($tempDec > 0) {
        $tempDec = $tempDec / 8;
    }

    // echo "temp octa: $octa<br>;
}
// echo "octa: $octa <br>

$hex = "";
$tempDec = $inputdec;
while ($tempDec >= 1) {
    $modulus = $tempDec % 16;
    if ($modulus > 9) {
        if ($modulus = 10) {
            $hex = "A" . $hex;
        } elseif ($modulus = 11) {
            $hex = "B" . $hex;
        } elseif ($modulus = 12) {
            $hex = "C" . $hex;
        } elseif ($modulus = 13) {
            $hex = "D" . $hex;
        } elseif ($modulus = 14) {
            $hex = "E" . $hex;
        } elseif ($modulus = 15) {
            $hex = "F" . $hex;
        }
    } else {
        $hex = $modulus . $hex;
    }
    $tempDec = $tempDec - $modulus;
    if ($tempDec > 0) {
        $tempDec = $tempDec / 16;
    }

    // echo "temp hex: $hex<br>;
}
// echo "hex: $hex <br>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="container-h1">CONVERTER</h1>
        <form action="" method="get">
            <div class="form-group">
                <label class="control-label">DEC</label>
                <div class="contril-input">
                    <input type="text" id="inp-dec" name="inpdec" class="form-control" value="<?= (empty($inputdec)) ? "" : $inputdec ?>">
                </div>
            </div>
            <input type="submit" value="convers">
        </form>
        <div class="form-group">
            <label class="control-label">OCT</label>
            <div class="control-input">
                <input type="text" id="inp-oct" class="form-control" disabled value="<?= (empty($octa)) ? "" : $octa ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">HEX</label>
            <div class="control-input">
                <input type="text" id="inp-hex" class="form-control" disabled value="<?= (empty($hex)) ? "" : $hex ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">BIN</label>
            <div class="control-input">
                <input type="text" id="inp-bin" class="form-control" disabled value="<?= (empty($binnary)) ? "" : $binnary ?>">
            </div>
        </div>
    </div>
</body>

</html>