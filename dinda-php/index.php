<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header class="sticky-top">
        <!-- include navbar -->
        <?php include "template/navbar.php"; ?>
    </header>
    <main>
        <div class="container">
            <h3 class="text-center">Welome To My Profile</h3>
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
                    <blockquote class="blockquote text-center">"Saya adalah Mahasiswa prodi INFORMATIKA KELAS A SEMESTER
                        SATU"</blockquote>
                </div>
            </div>
        </div>
    </main>


    <!-- <footer>
        <div
            class="col-md-12 text-center container sticky-bottom p-3 bg-secondary position-absolute bottom-0 start-50 translate-middle-x ">
            <span class="text-white">&copy; RIZQI WILDAN HARIRI - INFORMATIKA KELAS A - TUGAS UAS</span>
        </div>
    </footer> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>