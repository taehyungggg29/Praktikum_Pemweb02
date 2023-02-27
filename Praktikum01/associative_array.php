<?php
$profileArray = [
    "nama" => "Delia", 
    "semester" => 2
];
echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";

echo "<br>";
$profileMultiArray = [
    [
        "nama" => "Delia",
        "semester" => 2
    ], [
        "nama" => "Taehyung",
        "semester" => 6
    ]
];
foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}
