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

//Menyimpan data ke dalam mahasiswa.json
file_put_contents('mahasiswa.json', $json);

?>