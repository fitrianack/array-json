<?php

$mahasiswa = array(
    'nim' => array (123,124,125),
    'nama' => array ('Udin', 'Joko', 'Tatang')
);

//contoh pengaksesan nilai multidimensional array
echo $mahasiswa['nim'][0];
echo '<br>';
echo $mahasiswa['nama'][0];

?>