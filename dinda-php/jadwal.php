<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Jadwal</title>
</head>

<body>
    <header class="sticky-top">
        <!-- include navbar -->
        <?php include "template/navbar.php"; ?>
    </header>


    <div class="container">
        <div class="table-responsive table-secondary">
            <table class="table table-borderless table-secondary">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Nama</th>
                        <th>Mata Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $days = array("Sabtu", "Minggu", "Senin");
                    $teachers = array(
                        array("Ibu Siti Sufaidah, S.Kom, M. Si.", "Ponari Isno, S. Kom."),
                        array("Sujono, S. Kom.", "Primadi Airlangga, M. IT."),
                        array("Munawarah, S. Kom, M. Si.", "Tholib Hariono, S. Kom, M. Kom.")
                    );
                    $courses = array(
                        array("Manajemen", "Algoritma"),
                        array("Sytem Operasi", "Web Programming"),
                        array("Pengantar TI", "Basis Data 1")
                    );
                    $i = 1;
                    foreach ($days as $key => $day) {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $day . "</td>";
                        echo "<td>" . $teachers[$key][0] . "<br>" . $teachers[$key][1] . "</td>";
                        echo "<td>" . $courses[$key][0] . "<br>" . $courses[$key][1] . "</td>";
                        echo "</tr>";
                        $i++;
                    }
                    ?>
                </tbody>
            </table>

            <!-- Tidak pakai tanda kurung siku karena array assosiatif, Array asosiatif adalah jenis array yang menggunakan key yang ditentukan oleh pengguna sebagai identifier daripada index default yang digunakan dalam array numerik. -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

</body>

</html>