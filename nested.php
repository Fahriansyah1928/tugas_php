<?php
// Menentukan suhu kopi
$suhu = 20; // Suhu kopi yang ingin dihitung


if ($suhu < 20) {  //  Jika suhu lebih rendah dari 20 derajat maka suhu kopi dianggap "dingin"
    echo "Dingin";     
} else { 

    if ($suhu >= 30) {  //  Jika suhu lebih besar dari 30 derajat maka suhu kopi dianggap "panas"
        echo "Panas";  
    } else {   // Jika suhu lebih kecil dari 30 dan lebih besar dari 20 maka suhu kopi dianggap "normal"
        echo "Normal";  
    }
}
?>
 