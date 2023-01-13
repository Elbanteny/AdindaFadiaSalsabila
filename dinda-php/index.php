<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <header class="sticky-top">
        <!-- include navbar -->
        <?php include "template/navbar.php"; ?>
    </header>
    <main>
        <div class="container">
            <h3 class="text-center">Welcome To My Profile</h3>
            <!-- penggunaan statement -->
            <?php include "template/state.php"; ?>
            <br>

            <!-- penggunaan layout grid -->
            <div class="row text-center align-item-center">
                <div class="col12">
                    <img src="img/dinda.jpg" class="rounded rounded-4 p-2" alt="" width="230px" height="360px">
                    <br>
                    <h4 class="text-center">Adinda Fadia Salsabila</h4>
                    <h4 class="text-center">2202041083</h4>
                    <blockquote class="blockquote text-center">"Mahasiswa Fakultas Teknologi Informas Prodi Informatika
                        Kelas A Semester 1"</blockquote>
                </div>
            </div>
        </div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
