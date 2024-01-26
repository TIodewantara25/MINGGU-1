<?php
// function kategoriIIMT($bb, $tb){
//     $imt = $bb / ($tb * $tb / 10000);

//     if($imt < 18.5){
//         return "Berat Badan Kurang";
//     }
//     else if($imt >= 18.5 && $imt < 22.9){
//         return "Normal";
//     }
//     else if($imt >= 22.9 && $imt < 24.9){
//         return "Berat Badan Lebih";
//     }
//     else{
//         return "Obesitas";
//     }
// }

// echo kategoriIIMT(60,165);



///

function assada($tanggal){
	$hari = date('l', strtotime($tanggal));

if ($hari == 'Monday') {
    return 'Senin'; 
}elseif ($hari == 'Tuesday') {
    return 'Selasa';
}elseif ($hari == 'Wednesday') {
    return 'Rabu';
}elseif ($hari == 'Thursday') {
    return 'Kamis';

}elseif ($hari == "Friday") {
    return 'Jumat';

}elseif ($hari == 'Saturday') {
    return 'Sabtu';
}elseif ($hari == "Sunday") {
	return 'Minggu';
}
else {
    return "tidak  ";
}


}
echo assada ('2024-01-26') 


?>    