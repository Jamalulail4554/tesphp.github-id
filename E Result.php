<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perulangan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="E Result-box">
        <h2>Hasil Perulangan</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputText = $_POST['inputText'];
            $repeatCount = intval($_POST['repeatCount']);
            
            for ($i = 0; $i < $repeatCount; $i++) {
                echo "<p>$inputText</p>";
            }
        }
        ?>
        <a href="D Perulangan.php" class="btn">Kembali</a>
    </div>
</body>
</html>
