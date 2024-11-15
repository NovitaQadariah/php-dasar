<?php
$multidimensi = [
    [ 
        "No" => 1,
        "Nim" => "D212111033",
        "Nama" => "Novita Qadariah",
    ],
    [
        "No" => 2,
        "Nim" => "D212111035",
        "Nama" => "Zaltin",
    ],
    [
        "No" => 3,
        "Nim" => "D212111034",
        "Nama" => "Rahmatia",
    ],
    [
        "No" => 4,
        "Nim" => "D212111014",
        "Nama" => "Rizaldy Muhamad Sopyan",
    ],
    [
        "No" => 5,
        "Nim" => "D212111008",
        "Nama" => "Intan Khoirunnisa",
    ],
    [
        "No" => 6,
        "Nim" => "D212111016",
        "Nama" => "Seli Pebriani",
    ],
    [
        "No" => 7,
        "Nim" => "D212111015",
        "Nama" => "Rudi Loilatu",
    ],
    [
        "No" => 8,
        "Nim" => "D212111009x",
        "Nama" => "Islah Nurhasanah",
    ],
    [
        "No" => 9,
        "Nim" => "D212111003",
        "Nama" => "Dasimah Seftiani",
    ],
    [
        "No" => 10,
        "Nim" => "D212111002",
        "Nama" => "Cahya Julianti",
    ],
];

echo "<table border='1' cellspacing= '0'>";
echo "<tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
     </tr>";

foreach ($multidimensi as $value) {
    echo "<tr>
            <td>{$value['No']}</td>
            <td>{$value['Nim']}</td>
            <td>{$value['Nama']}</td>
          </tr>";
}
echo "</table>";
?>