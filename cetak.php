<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
include 'koneksi.php';
$nim = $_GET['nim'];

$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = $nim");
$user = mysqli_fetch_array($sql);

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string
$pdf->Cell(190, 7, 'PROGRAM STUDI TEKNIK INFORMATIKA', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'KARTU RENCANA STUDI', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 6, 'Nama', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$pdf->Cell(20, 6, $user['nama'], 0, 1);
$pdf->Cell(20, 6, 'NIM', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$pdf->Cell(20, 6, $user['nim'], 0, 1);


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 6, 'KODE', 1, 0);
$pdf->Cell(75, 6, 'MATA KULIAH', 1, 0);
$pdf->Cell(25, 6, 'SKS', 1, 0);
$pdf->Cell(25, 6, 'SEMESTER', 1, 0);
$pdf->Cell(30, 6, 'NILAI', 1, 1);
$pdf->SetFont('Arial', '', 10);





    $krs = mysqli_query($conn, "SELECT mata_kuliah.kode, mata_kuliah.nama, mata_kuliah.sks, mata_kuliah.sem, khs.nilai FROM khs INNER JOIN mahasiswa ON mahasiswa.id = khs.id_mhs INNER JOIN mata_kuliah ON khs.id_matkul = mata_kuliah.id WHERE mahasiswa.nim = $nim");

while ($row = mysqli_fetch_array($krs)) {
    $pdf->Cell(20, 6, $row['kode'], 1, 0);
    $pdf->Cell(75, 6, $row['nama'], 1, 0);
    $pdf->Cell(25, 6, $row['sks'], 1, 0);
    $pdf->Cell(25, 6, $row['sem'], 1, 0);
    $pdf->Cell(30, 6, $row['nilai'], 1, 1);
}
$pdf->Output();
