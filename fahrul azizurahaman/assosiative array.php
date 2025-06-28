<!DOCTYPE html>
<html>
<head>
    <title>Penulis Novel Terkenal di Indonesia</title>
    <style>
        table {
            border-collapse: collapse;
            width: 95%;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<h2>Penulis Novel Terkenal di Indonesia</h2>

<?php
$penulis = array(
    array(
        "nama" => "andrea hirata",
        "asal" => "indonesia",
        "bidang" => "sastra",
        "tahun" => 1967,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Andrea_Hirata.jpg/500px-Andrea_Hirata.jpg"
    ),
    array(
        "nama" => "tere liye",
        "asal" => "Sumatera Selatan",
        "bidang" => "Penulis",
        "tahun" => 1979,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/e/e9/Tere-liye.png"
    ),
    array(
        "nama" => "Eka Kurniawan",
        "asal" => "Jawa Barat",
        "bidang" => "sastra",
        "tahun" => 1975,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Eka_Kurniawan%2C_DSC_0071B.jpg/500px-Eka_Kurniawan%2C_DSC_0071B.jpg"
    ),
    array(
        "nama" => "dewi lestari",
        "asal" => "Jawa Barat",
        "bidang" => "sastra",
        "tahun" => 1976,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/5/56/Dewi_Lestari.JPG"
    ),
    array(
        "nama" => "Habiburrahman El Shirazy",
        "asal" => "Jawa Tengah",
        "bidang" => "sastra",
        "tahun" => 1976,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/c/c1/Habiburrahman_El_Shirazy%2C_2020.jpg"
    ),
    array(
        "nama" => "Pramoedya Ananta Toer",
        "asal" => "indonesia",
        "bidang" => "sastra",
        "tahun" => 1922,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Pramoedya_Ananta_Toer_Kesusastraan_Indonesia_Modern_dalam_Kritik_dan_Essai_1_%281962%29_p136.jpg/500px-Pramoedya_Ananta_Toer_Kesusastraan_Indonesia_Modern_dalam_Kritik_dan_Essai_1_%281962%29_p136.jpg"
    ),
    array(
        "nama" => "raditya dika",
        "asal" => "Indonesia",
        "bidang" => "sastra",
        "tahun" => 1984, ,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Raditya_Dika_on_Interview_GoGirl_TV.jpg/500px-Raditya_Dika_on_Interview_GoGirl_TV.jpg"
    ),
    array(
        "nama" => "ahmad fuadi",
        "asal" => "Sumatera Barat",
        "bidang" => "sastra",
        "tahun" => 1972, ,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/4/4a/Ahmad_Fuadi.jpg"
    ),
    array(
        "nama" => "tissa biani azzahra",
        "asal" => "Jawa Barat",
        "bidang" => "sastra",
        "tahun" => 2001,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Tissa_Biani_on_Media_Indonesia_-_04.17.png/500px-Tissa_Biani_on_Media_Indonesia_-_04.17.png"
    ),
    array(
        "nama" => "leila s. chudori",
        "asal" => "Jakarta",
        "bidang" => "sastra",
        "tahun" => 1962,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Leilachudori1.jpg/500px-Leilachudori1.jpg"
    )
);

echo "<table>";
echo "<tr><th>Nama</th><th>Asal</th><th>bidang</th><th>Tahun</th><th>Gambar</th></tr>";

foreach ($perusahaan as $data) {
    echo "<tr>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>{$data['asal']}</td>";
    echo "<td>{$data['bidang']}</td>";
    echo "<td>{$data['tahun']}</td>";
    echo "<td><img src='{$data['gambar']}' alt='{$data['nama']}'></td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>