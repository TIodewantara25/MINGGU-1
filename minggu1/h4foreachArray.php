<?php
//perulangan for
//huruf
// for ($i = 0; $i < 100; $i++) {
//     echo "Wajib Ngulik <br>";
// }


// //angka
// for ($i = 1; $i <= 10; $i++) {
//     echo "{$i} <br>";
// }


// //angka atas ke bawah
// for ($i = 10; $i > 0; $i--) {
//     echo "{$i} <br>";
// }



// //while
// $i = 0;

// while ($i < 20) {
//     echo "{$i} <br>";

//     $i++;
// }


// //do while
// while (false) {
//     echo "Perulangan while! <br>";
// }       

// do {
//     echo "Perulangan do while! <br>";
// } while (false);


// //foreach

// $list = ['RPL', 'Wajib', 'Ngulik'];

// foreach ($list as $l) {
//     echo "Nama:{$l}<br>";
// } 


// $list = ['RPL', 'Wajib', 'Ngulik'];

// foreach ($list as $l) {
//     echo "Nama:{$l}<br>";
// }

//soal 1 = 5 
// $a = "wikrama";
// echo $b = substr($a,-2,1);


// soal 2-4 = 5

// for ($i = 1; $i <= 10; $i++) {
//     echo "{$i} <br>";
// }

// for ($i = 10; $i >= 0; $i--) {
//     echo "{$i} <br>";
// }

// for ($i = 1; $i < 6; $i++) {
//     echo " <h$i> HTML $i </h$i>";
// }


// //soal 5 - 6 = 10

// for ($a = 1; $a <= 30; $a++) {
//     if ($a % 4 == 0) {
//         echo $a. "<br>";
//     }


// }
// echo "<br>";
// $hasil = 0 ;
//     for ($a = 5; $a <= 25; $a+=5) {
//         if (225 % $a == 0 ) {
//              $hasil++;
//         }
//     }
//     echo "$hasil";
//soal 7 = 5        

// $datas   = [
//   [  'nama' => 'Tio',
//     'rombel' => 'PPLG XI-1',
//     'rayon' => 'Ciawi 4',
//     'jk' => 'J',
//   ],
//   [  'nama' => 'Fakhri',
//     'rombel' => 'PPLG XI-5',
//     'rayon' => 'Ciawi 2',
//     'jk' => 'J',
//   ],
//   [  'nama' => 'Aska',
//     'rombel' => 'PPLG XI-4',
//     'rayon' => 'Cisarua 5',
//     'jk' => 'J',
//   ],
//   [  'nama' => 'Siti',
//     'rombel' => 'PPLG XI-1',
//     'rayon' => 'sukasari',
//     'jk' => 'P',
//   ],

// ];

// foreach($datas as $data){
//     echo "nama : ".$data["nama"]."<br>";
//     echo "rombel :".$data["rombel"]. "<br>";
//     echo "rayom : ".$data["rayon"]. "<br>";
//     echo "jenis keamin : ".$data["jk"]. "<br>";
//     echo "<hr>";
// }

// // soal no 8 =

// $nilai = [75, 77, 87, 70, 90, 81, 69, 87, 66];

//     for ($i = 0; $i < 9; $i++) {
//         $nilaiIndividu = $nilai[$i];

//         if ($nilaiIndividu >= 75) {
//             echo "Nilai $nilaiIndividu Kompeten<br>";
//         } else {
//             echo "Nilai $nilaiIndividu belum Kompeten<br>";
//     }
// }


// // // sola no 9 =
// for ($a = 1; $a <= 3; $a++) {
//     for ($i=1; $i <= 10 ; $i++) { 
//         $jumlah = $a*$i ;
//     echo "$a X $i  = $jumlah <br> <br>";
//     }
//     }



// // //soal no 10 =

// $barang = [
//     [
//         'nama_barang' => 'Pasta Gigi',
//         'harga_barang' => 18000,
//         'jumlah_beli' => 1, 
//     ],
//     [
//         'nama_barang' => 'Sabun Mandi',
//         'harga_barang' => 5000,
//         'jumlah_beli' => 3, 
//     ],
//     [
//         'nama_barang' => 'Masker Wajah',
//         'harga_barang' => 15000,
//         'jumlah_beli' => 5, 
//     ],
// ];
// $total_harga = 0;

// foreach($barang as $data) {
//     $total_harga += $data['harga_barang'] * $data['jumlah_beli'];
// }

// echo "Total harga barang adalah: Rp" . $total_harga. "<br>";

// // // soal no 11 =

// $bil1 = [80,77,65,89,55,12,90,86];
// $bil2 = [77,99,55,81,45,90,91,98];


// $kelompok1 = [];
// $kelompok2 = [];

// foreach ($bil1 as $b1) {
//     if (in_array($b1, $bil2)) {
//         $kelompok1[] = $b1;
//     } else {
//         $kelompok2[] = $b1;
//     }
// }foreach ($bil2 as $b1) {
//     if (!in_array($b1, $bil1)) {
//         $kelompok2[] = $b1;
//     } 
//     }


// echo "Kelompok 1 : " . implode(", ", $kelompok1)."<br>";
// echo "Kelompok 2 : " . implode(", ", $kelompok2);

//soal no 12 =

$barang = [
    [ 'nama' => 'Ban', 'diskon' => '10' ],
    [ 'nama' => 'oli mesin'],
    [ 'nama' => 'kampas rem'],
    [ 'nama' => 'busi', 'diskon' => '9' ],
    [ 'nama' => 'akumulator', 'diskon' => '7' ],
];


foreach ($barang  as $item ){
    if (isset ($item ['diskon'])) {
        echo "<br> Nama Barang : " .$item['nama'] . ", Diskon: " . $item['diskon']. "%";
    }
}
?>