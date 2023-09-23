<?php

include('kelipatan.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = isset($_POST['angka']) ? (int) $_POST['angka'] : 0;
    echo 'Hasil: <br>';
    $kelipatan = new Kelipatan($input);
    $kelipatan->cetak();
    echo "-------------------------------------";
    echo "<br><br>";
}

?>

<html>
<head>
    <title>Program Kelipatan</title>
</head>
<body>
    <form method="POST" action="">
        <label>Input angka perulangan:</label>
        <input type="number" name="angka" id="angka">
        <button type="submit">Submit</button>
    </form>
</body>
</html>