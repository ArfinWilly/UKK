<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <title>Data Cafe</title>
</head>
<body>
    <h1>Coffe Maestro</h1>
    
    <form action="Output.php" method="post">

        <div class="container">

            <label for="">Nama Kopi</label> <br>
            <input type="text" name="namakopi" required> <br>
            
            <label for="">Jenis Kopi</label> <br>
            <input type="text" name="jeniskopi" required> <br>
            
            <label for="">Harga Kopi</label> <br>
            <input type="text" name="hargakopi" required> <br>
            
            <input type="submit" value="SIMPAN!">
            
        </div>
        
    </form>
    
</body>
</html>