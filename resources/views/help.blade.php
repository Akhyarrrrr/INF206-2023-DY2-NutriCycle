<!-- Ini adalah kode HTML untuk halaman Help NutriCycle -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NutriCycle</title>
    <!-- Memuat file CSS dari Bootstrap untuk membuat halaman responsif -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Memuat file CSS custom -->
    <link rel="stylesheet" href="assets\css\style.css">
    <!-- Memuat fontawesome untuk ikon -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Menampilkan main halaman-->
    <main style="background: linear-gradient(to bottom, #0a1022 0%, #17388d 100%) !important;">
        <!-- Menampilkan header halaman -->
        <header>
            <nav class="navbar navbar-expand-lg" style="background-color: #13192B;">
                <div class="container-fluid">
                    <div class="navbar-brand text-white pe-3" style="border-right: 1px solid white;">
                        <img src="images/logo.png" alt="Logo NutriCycle" width="40">
                        NutriCycle
                    </div>
                    <div class="text-white collapse navbar-collapse">Help</div>
                </div>
            </nav>
        </header>

        <br>
        <br>
        <br>
        <!-- Menampilkan bagian pencarian -->
        <center>
            <div style="background-color: #60A5FA;padding-top: 30px;padding-bottom: 30px;" class="text-white mb-5">
                <h2>Hai, ada yang bisa kami bantu?</h2>
                <br>
                <input type="search" class="form-control" style="width:40%;">
                <i class="fas fa-search p-2" style="background-color: #60A5FA;color: black;position: relative;bottom: 35px;left: 268px;"></i>
            </div>
        </center>
        <br>
        <br>
        <br>
        <!-- Menampilkan bagian FAQ -->
        <div class="container">
            <h2 class="text-white">FAQ</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            [Baru di Organik] Mengapa saya tidak bisa mendaftar dengan email saya?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            [Pelacakan Pesanan] Bagaimana cara mengetahui estimasi waktu pengiriman pesanan saya?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            [Pembatalan Pesanan] Bagaimana proses pengembalian dana untuk pesanan yang dibatalkan?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Button untuk kembali kehalaman sebelumnya -->
        <div class="container text-center">
            <a href="#" onclick="history.back()" class="btn bg-white text-dark btn-logout">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
        <br>
        <br>
        <br>
    </main>

    <!-- Menampilkan footer halaman -->
    <footer style="background-color:white;" class="text-center pt-3">
        <p>Copyright 2023 &copy; NutriCycle
        </p>
    </footer>

    <!-- Memuat file JavaScript dari Bootstrap untuk membuat halaman responsif -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>