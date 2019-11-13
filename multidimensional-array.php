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

//contoh pengaksesan nilai multidimensional array
echo $mahasiswa[0]['nim'];
echo '<br>';
echo $mahasiswa[0]['nama'];

?>