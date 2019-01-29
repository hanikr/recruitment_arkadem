<?php
// array
$array = Array (
    "0" => Array (
        "name" => "Hani Krisnawati",
        "address" => "Batu",
        "hobbies" => "Makan",
        "is_merried" => "true",
        "school" => "SKARIGA",
        "skill" => "ABCD"
    )
);

// encode array to json
$json = json_encode(array('data' => $array));

// write json to file
if (file_put_contents("data.json", $json))
    echo "File JSON sukses dibuat...";
else 
    echo "Oops! Terjadi error saat membuat file JSON...";

data.json

 {"data":[{"name":"Hani Krisnawati","address":"Batu","hobbies":"Makan","is_merried":"true","school":"SKARIGA","skill":"ABCD"}]}
?>