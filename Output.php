<link rel="stylesheet" href="tabel.css">
<?php

session_start();

//jika ada session dengan nama ... maka
//tampung dalam variabel ...
if(isset($_SESSION['ssnamakopi']))
{
   $ssnamakopi = $_SESSION['ssnamakopi'] ;
}

if(isset($_SESSION['ssjeniskopi']))
{
   $ssjeniskopi = $_SESSION['ssjeniskopi'] ;
}

if(isset($_SESSION['sshargakopi']))
{
   $sshargakopi = $_SESSION['sshargakopi'] ;
}

$ssnamakopi[] = $_POST['namakopi'];
$ssjeniskopi[] = $_POST['jeniskopi'];
$sshargakopi[] = $_POST['hargakopi'];

$_SESSION['ssnamakopi'] = $ssnamakopi ;
$_SESSION['ssjeniskopi'] = $ssjeniskopi ;
$_SESSION['sshargakopi'] = $sshargakopi ;

?>

<table>
    <tr>
        <th>Nama Kopi</th>
        <th>Jenis Kopi</th>
        <th>Harga Kopi</th>
    </tr>

    <?php

// lakukan perulangan menggunakan for ulai dari 0 sari sejumlah data
// yang ada , lakukan perulangan terus menerusvsampai data terakhir

        for ($i=0; $i < count($ssnamakopi); $i++) {
            echo "<tr>" ;
            echo "<td>" .$ssnamakopi[$i]."</td>
            <td>" .$ssjeniskopi[$i]."</td>
            <td>" .$sshargakopi[$i]."</td>
            </tr>" ;
        }

    ?>
</table>

<a href="Input.php" class="linkhome">Kembali ke Halaman Utama</a>