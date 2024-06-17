<!DOCTYPE html>
<html>
<head>
    <title>Form Perulangan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-box">
        <h2>Form Perulangan</h2>
        <form method="post" action="E Result.php">
            <div class="textbox">
                <input type="text" placeholder="Masukkan teks" name="inputText" required>
            </div>
            <div class="textbox">
                <input type="number" placeholder="Jumlah perulangan" name="repeatCount" required>
            </div>
            <input type="submit" class="btn" value="Cetak">
        </form>
    </div>
</body>
</html>

<style>
    body {
    margin: 0;
    padding: 0;
    background: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
}

.form-box, .result-box {
    width: 300px;
    padding: 40px;
    background: #fff;
    text-align: center;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
    margin: 20px;
}

.form-box h2, .result-box h2 {
    margin: 0 0 20px;
    padding: 0;
    color: #333;
}

.textbox {
    position: relative;
    margin-bottom: 30px;
}

.textbox input {
    width: 100%;
    padding: 10px;
    background: #f2f2f2;
    border: none;
    outline: none;
}

.btn {
    width: 100%;
    background: #333;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    text-decoration: none;
}

.btn:hover {
    background: #555;
}
</style>