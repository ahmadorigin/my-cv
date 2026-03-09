<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Project</title>
</head>

<body>

    <form action="" method="post">
        <label for="panjang-sisi">Panjang sisi :</label>
        <input type="number" name="panjang-sisi">
        <button type="submit" name="hitung-luas">Hitung Luas</button>
        <button type="submit" name="hitung-keliling">Hitung Keliling</button>
    </form>

    <?php
     
        if( isset($_POST["hitung-luas"]) ) {
            $panjangSisi = $_POST["panjang-sisi"];

            if($panjangSisi > 0) {
                echo sqrt($panjangSisi);
            }
        }

        if( isset($_POST["hitung-keliling"]) ) {
            $panjangSisi = $_POST["panjang-sisi"];

            if($panjangSisi > 0) {
                $result = 4 * $panjangSisi;
                echo $result;
            }
        }

    ?>

</body>

</html>