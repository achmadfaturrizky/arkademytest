<?php
function myBiodata()
{
    $biodata = [
        'name' => 'Achmad Fatur Rizky',
        'adderss' => 'Jl. Purwomukti Barat 1 no 07, Semarang, Jawa Tengah 50192',
        'hobbies' => ['Coding', 'Nonton Film', 'Travelling', 'Touring'],
        'is_married' => false,
        'school' => ['highSchool' => 'SMK NEGERI 9 SEMARANG', 'university' => ''],
        'skills' => ['skills' => ['PHP Native', 'JS']]
    ];

    return print_r(json_encode($biodata, true));
}

myBiodata();