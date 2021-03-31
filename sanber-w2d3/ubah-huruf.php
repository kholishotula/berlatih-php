<?php
function ubah_huruf($string){
//kode di sini
    $alpha = "abcdefghijklmnopqrstuvwxyz";
    $changed_str = '';
    for($i=0; $i<strlen($string); $i++){
        $position = strpos($alpha, $string[$i]);
        $changed_str = $changed_str . $alpha[$position+1];
    }
    $changed_str = $changed_str . "<br>";
    return $changed_str;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>