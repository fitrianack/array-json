<?php

$mahasiswa = array(
    array(
        'nim' => 123,
        'nama' => 'Udin',
    ),
    array(
        'nim' => 124,
        'nama' => 'Joko',
    ),
    array(
        'nim' => 125,
        'nama' => 'Tatang',
    )
);

//ENCODE PHP associative ke format JSON
$json = json_encode($mahasiswa);

//Decode JSON ke PHP associative array
$arr = json_decode($json, true);

//Mengakses nilai dari array associative
foreach ($arr as $data) {
    echo $data['nim']." ".$data['nama']."<br>";
}

?>