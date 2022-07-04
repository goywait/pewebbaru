<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tugas Pemrograman Web PHP</title>
</head>

<body>
<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span>0110221013 - Angga Setiawan - TI16 </span>
      </a>
    </header>


    <div class="container mt-5">

        <div class="alert alert-secondary" role="alert">
            <span class="fw-bold">Daftar Nilai Siswa</span>
            <br>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $array_multidimensi = [
                    ['nim' => '01101', 'uts' => 81, 'uas' => 83, 'tugas' => 77],
                    ['nim' => '01102', 'uts' => 72, 'uas' => 62, 'tugas' => 63],
                    ['nim' => '01103', 'uts' => 61, 'uas' => 88, 'tugas' => 89],
                    ['nim' => '01104', 'uts' => 93, 'uas' => 91, 'tugas' => 90]
                ];

                $no = 1;

                foreach ($array_multidimensi as $array) {

                    $nilai_akhir = ($array['uts'] + $array['uas'] + $array['tugas']) / 3;

                    echo "<tr>";
                    echo "<td>" . $no . "</td>
                        <td>" . $array['nim'] . "</td>
                        <td>" . $array['uts'] . "</td>
                        <td>" . $array['uas'] . "</td>
                        <td>" . $array['tugas'] . "</td>
                        <td>" . number_format($nilai_akhir, 2, ',', ',',) . "</td>";
                    echo "</tr>";
                    $no++;
                }

                ?>

            </tbody>
        </table>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>