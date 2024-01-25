<?php

function peserta($nopeserta, $kondisiterminasi, $th2, $th3, $th10, $tb6, $tb8, $sk9, $sk13){
    echo "<h1>=== Program Peserta Didik ===</h1>";
    for($nopeserta; $nopeserta <= $kondisiterminasi; $nopeserta++){
        if($nopeserta == $th2 || $nopeserta == $th3 || $nopeserta == $th10){
            echo "Peserta Didik no absen $nopeserta tidak hadir <br/>";
        }else if($nopeserta == $tb6 || $nopeserta == $tb8){
            echo "Peserta Didik no absen $nopeserta terlambat <br/>";
        }else if($nopeserta == $sk9 || $nopeserta == $sk13){
            echo "Peserta Didik no absen $nopeserta sakit <br/>";
        }else{
            echo "Peserta Didik no absen $nopeserta hadir <br/>";
        }
    }
}
echo peserta(1, 15, 2, 3, 10, 6, 8, 9, 13);

?>