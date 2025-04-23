<?php
// studi kasus investasi
$modal = 1000000;  // Modal yang digunakan untuk investasi 

$pendapatan = 12000000;  // pendapatan yang diterima setelah investasi

$status = ($pendapatan > $modal) ? "Untung" :           //  jika pendapatan lebih besar dari modal maka akan mengirimkan "untung"
         (($pendapatan < $modal) ? "Rugi" : "Impas");   //  jika pendapatan lebih kecil dari modal maka akan mengirimkan "rugi"
                                                        //  jika pendapatan dan modal sama maka akan mengirimkan "impas"

                                                        
echo "Status: $status";  // Outputnya bisa "Untung", "Rugi", atau "Impas"
?>

