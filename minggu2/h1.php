<?php
function kalkulator($nilai1, $op, $nilai2)
{
	if($op=="+"){
    $h = $nilai1+$nilai2;
    }else if($op=="-"){
	$h  = $nilai1-$nilai2;
    }else if($op=="x"){
	$h = $nilai1*$nilai2;
    }else if($op=="/"){
	$h = $nilai1/$nilai2;
    }else {
        echo "tidak ada";
    }
    echo $h;
}
kalkulator (6, "x" , 3);


// //fungsi
// $rmbl = ['PPLG XI-5', 'PPLG XI-4', 'PPLG XI-3', 'PPLG XI-2', 'PPLG XI-1'];
// array_reverse($rmbl);
// print_r($rmbl);

// $angka = ['1','4','5','10','2'];
// arsort ($angka);
// print_r($angka);


// $rmbl = ['PPLG', 'DKV', '', 'TJKT', 'BDP'];
// echo ' data sebanyak ' .  count($rmbl) . ' data';

// $date = date_create("2024-02-6");
// date_modify($date, "+3 days");
// echo "Tanggal setelah ditambah 3 hari: " . date_format($date, "Y-m-d"); 


// function sum($a, $b){
//     $c = $a + $b;
//     return $c;
// }
// echo "5 + 8 = " .sum(5,8) ;

// $string_pertama = "Saya Tingal Di Jakarta";
// $string_kedua = "Di";

// $jumlah = strpos($string_pertama,$string_kedua);

// if ($jumlah !== false) {
//     echo "substring '$string_kedua' di temukan pada posisi $jumlah ";
// }else {
//     echo "substring '$string' tidak di temukan dalam string";
// }

// $angk = rand (1, 100);
// echo "angka acak antara 1 dan 100 : .$angk";

// $a = "tio";
// echo strtoupper($a);


// $data = 2;

// if (is_array($data)) {
//     echo "data adalah array";
// }else{
//     echo "data bukan array";
// }

// $kendaraan = array('mobil', 'motor', 'sepeda');
// $super = array_map(function($value) {
//     return strtoupper($value);
// },$kendaraan);
// echo "<pre>";print_r($super);

// $kendaraan = ['Motor', 'mobi', 'sepeda', 'truk', 'bus'];
// if (in_array('mobil',$kendaraan)) {
//     echo "ok";
// }else {
//     echo "no";
//}

// echo (abs(-3));

// echo (floor(0.2));


// $n = [0,9,6,5,4,3,2];
// sort($n);
// print_r($n)

// function hi ($a, $b) {
// 	return $a * $b;
// }

// function hello ($a, $b) {
// 	return hi($a, $b + 2);
// }

// echo hello(2, 3)

    // function kata($kalimat){
    //     return preg_replace("/[^a-zA-Z0-9]/", "", $kalimat);

       
    // }function kat($kalimat){
    //     return str_word_count ($kalimat);
    // }
    // echo kata("halo nama saya");
    // echo kat("halo nama saya");

?>