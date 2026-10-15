<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST, GET");

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_portofolio";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(["error" => "Koneksi database gagal"]));
}

$method = $_SERVER['REQUEST_METHOD'];

// 1. JIKA WEB MEMINTA DATA (GET)
if ($method === 'GET') {
    $result = $conn->query("SELECT * FROM testimoni ORDER BY id DESC");
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
}

// 2. JIKA WEB MENGIRIM DATA (POST)
if ($method === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    $nama = $conn->real_escape_string($input['nama']);
    $instansi = $conn->real_escape_string($input['instansi']);
    $pesan = $conn->real_escape_string($input['pesan']);

    if (!empty($nama) && !empty($pesan)) {
        $sql = "INSERT INTO testimoni (nama, instansi, pesan) VALUES ('$nama', '$instansi', '$pesan')";
        if ($conn->query($sql)) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["error" => "Gagal menyimpan data"]);
        }
    } else {
        echo json_encode(["error" => "Data tidak boleh kosong"]);
    }
}
$conn->close();
?>