<?php 

// $a = 10;

// if ($a >= 0 ) {
//     echo "positip "; 
// if ($a <= 10){
//     echo "lebih besar";
// }else{
//     echo "tidak";
// }
// }
// else {
//     echo "negatip";
// }



// $a = 90;
// $h = 10;

// if ($a >= 85 && $h >=98) {
//     echo "berperestasi";
// }elseif($a >= 85 ) {
//     echo "tingkatkan lagi  nilai, kehadiran sudah  bagus  ";
// }elseif ($h >= 98) {
//     echo "tingkatkan ligi kehadiran, nilai sudah bagus";
// }else {
//     echo "tidak berprestasi";
// }


// //soal 1
// $a = 75;

// if ($a >= 90) {
//     echo "A";
// }elseif ($a >= 75) {
//     echo "B";
// }else {
//     echo "C";
//  }

// //soal 2
// $a = 17;

// if ($a >=6 &&  $a <=12) {
//     echo " waktu tidur 10 jm";
// }elseif ($a >= 12 && $a <= 18 ) {
//     echo "wakti tidur 8-9 jam";
// }
// elseif ($a >= 18 && $a <= 40 ) {
//     echo "wakti tidur 7-8 jam";
// }else{
//     echo "mati"; 
// }


// ////soal 3
// $a = 9 ;

// if ($a > 0) {
//     echo "positip";
// }elseif ($a < 0) {
//     echo "negatip";
// }else {
//     echo "cacah";
// }

// //soal 4
// $JamKerja = 14 ;
// $Kompensasi = 30.000;
// $Kerja= 8 ;


// if ($JamKerja >= 8) {
//     $hasil = $JamKerja - $Kerja ;
//     $gaji = $hasil * $Kompensasi ;
//     echo "Hasil $gaji ,000 ";
// }else {
//     echo "good";
// }

// ////soal no 5

// $andi = 2001;
// $eko = 2004;
// if (($andi % 4 ) == 0 && ($eko % 4 ) == 0) {
//     echo " andi kabisat , eko kabisat";
// }
// elseif ($andi % 4 == 0) {
//     echo "andi  tahun kabisat";
// }elseif ($eko % 4 == 0 ) {
//     echo " eko tahum kabisat";
// }else{
//     echo " tidak";
// }

// //soal 6 
// $bb=  60;
// $tb= 165 ;

// $tinggibadan = $tb/100;
// $imt = $bb/($tinggibadan ** 2);

// if ($imt < 18.5 ) {
//     echo "Berat Kurang";
// }elseif (($imt >= 22.9) && ($imt <=24.9 )){
//     echo "Berat Badan lebih";
// }else {
//     echo "obesitas";
// }

//soal 7

// $h = date('l');
// $NasiGoreng = 15000;
// $AyamBakar = 20000;
// $NasiKebuli =25000;
// $AnekaJus =8000;
// $EsJeruk =5000; 
// $J = $NasiKebuli*2 + $AyamBakar + $NasiGoreng;


// if ($hari == 'Wednesday') {
//     echo  $Jumlah = ($Jumlah*0.02);
// }elseif ($hari == "Friday") {
//     echo $Jumlah = ($Jumlah*0.05);
// }else {
//     echo "tidak ada diskon ";
// }

//ternari

// $hasil = $h == "Friday" ? "Total Belanja anda  Rp ".number_format($J). " dan mendapatkan diskon 2% menjadi Rp ".number_format($J-0.02*$J) 
// :( $h == "Wednesday" ? "Total Belanja anda  Rp ".number_format($J). " dan mendapatkan diskon 5% menjadi Rp ".number_format ($J-0.05*$J ) 
// :( "tidak ada diskom ". $J)); 
// echo $hasil ;




//soal 8
// $pt = 13;
// $lt = 9;

// $luas = $pt*$lt;

// if ($luas <=90 ) {
//     echo "Tipe 36";
// }elseif ($luas >= 90 && $luas <=96) {
//     echo "Tipe 45";
// }elseif ($luas >= 96 && $luas <=120) {
//     echo "Tipe 54";
// }elseif ($luas >= 120 && $luas <=150) {
//     echo "Tipe 60";
// }else{
//     echo "Tipe 70" ;
// }

// //ternari
// $pt = 13;
// $lt = 9;
// $luas = $pt * $lt;

// echo $hasil = $luas <= 90 ? "Tipe 36"
//  :($luas >= 90 && $luas <= 98 ? "Tipe 45" 
//  :( $luas >= 96 && $luas <=120 ? "Tipe 54" 
//  :( $luas >=120 && $luas <=150 ? "Tipe 60" : "Tipe 70")));

// //soal 10

// $h = 20000;
// $vocer = 10000; 

// if ($h >= 100000 && $h <= 150000) {
    
//     echo "Jadi Rp " .number_format($h - $vocer);
// }elseif ($h >= 150000) {
//     echo "jadi  Rp ".number_format($h - $vocer). " dan 1 dus permen kaki";
// }else{
//     echo "tidak ada vocer jika anda belanja Rp  ".number_format($h);
// }

// //ternari
// $h = 170000;    
// $vocer = 10000; 
// $hasil =  $h > 100000 && $h <= 150000  ? "jadi ".number_format($h - $vocer) 
// :( $h >= 150000 ? "jadi " .number_format($h - $vocer) ." dan mendapatkan 1 dus permen kaki"
// : ("tidak ada vocer jika anda belanja Rp ".number_format($h)));
// echo $hasil;


?>