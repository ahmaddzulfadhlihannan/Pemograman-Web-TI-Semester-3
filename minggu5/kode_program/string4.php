
<?php
$pesan = "saya arek nganjuk";
# ubah variabel $pesan menjadi array dengan perintah explode 
$pesanPerkata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerkata = array_map(fn($pesan) => strrev($pesan), $pesanPerkata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerkata);
echo $pesan . "<br>";
?>
