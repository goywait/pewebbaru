<?php

require_once 'libraryfunction.php';

$nama_siswa = $_POST['namalengkap'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilaiuts'];
$nilai_uas = $_POST['nilaiuas'];
$nilai_tugas = $_POST['nilaitugas'];

echo '<br/>Nama : ' . $nama_siswa;
echo '<br/>Mata Kuliah : ' . $mata_kuliah;
echo '<br/>';

echo '<br/>Nilai UTS : ' . $nilai_uts;
echo '<br/>Nilai UAS : ' . $nilai_uas;
echo '<br/>Nilai Tugas : ' . $nilai_tugas;
echo '<br/>';



$count_nilai = $nilai_uts + $nilai_uas + $nilai_tugas;

$get_nilai = $count_nilai / 3;

echo '<br/>';


// GET NILAI
$hasil_ujian = grade($get_nilai);
echo '<br>';
echo 'Mendapatkan Nilai : ' . $hasil_ujian;

echo '<br/>';

//KELULUSAN
$hasil_ujian = kelulusan($get_nilai);
echo '<br>';
echo 'Dinyatakan : ' . $hasil_ujian;

echo '<br/>';

//Perikat
$hasil_ujian = predikat($get_nilai);
echo '<br>';
echo 'Predikat : ' . $hasil_ujian;
