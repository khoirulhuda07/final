<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <nav class="navbar flex">
        <h1>Final_Project <span> Kecerdasan</span> Buatan</h1>
        <div class="nav-menu flex">
                    <div class="nav-item"  id="tab-1"><a href="pusatdata.php" target="blank">pusat data</a></div>
                </div>
        </nav>
    </header>
    <br>
    <br>
    <form action="perhitungan.php" method="post" class="from-input" >
        <h3>Masukkan Data</h3>
    <table>
        <tr>
            <td><label for="input1">input 1:</label></td>
            <td><input type="text" name="feature1" id="feature1" required></td>
        </tr>
        <tr>
            <td><label for="input2">Input 2:</label></td>
            <td><input type="text" name="feature2" id="feature2" required></td>
        </tr>
        <tr>
            <td> <label for="input3">Input 3:</label></td>
            <td><input type="text" name="feature3" id="feature3" required></td>
        </tr>
        <tr>
            <td><label for="input3">Input 4:</label></td>
            <td><input type="text" name="feature4" id="feature4" required></td>
        </tr>
    </table>
    <table align="center" class="table-kirim">
        <tr>
            <td><input type="submit" value="kirim"></td>
        </tr>
    </table>
    </form>
</body>
</html>