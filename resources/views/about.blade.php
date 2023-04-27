<!-- Ini adalah kode HTML untuk halaman About NutriCycle -->
<x-app-layout>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NutriCycle</title>
    <!-- Memuat file CSS dari Bootstrap untuk membuat halaman responsif -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- Memuat fontawesome untuk ikon -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Menampilkan header halaman -->
   

    <!-- Menampilkan main halaman-->
    <main style="background: linear-gradient(to bottom, #0a1022 0%, #17388d 100%) !important;">
        <br>
        <br>
        <br>
        <center>
            <h1 class="text-white">Kenapa sih harus NutriCycle?</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="row justify-content-between mx-5 p-3 rounded-pill mb-5" style="background-color: #60A5FA;">
                <!-- Menampilkan Keunggulan pertama -->
                <div class="col">
                    <span
                        style="display: inline-block; height: 200px; width: 200px; background-color: white; border-radius: 50%; overflow: hidden;">
                        <img src="images/about-1.png" alt="" style="height: 100%; width: 80%;">
                    </span>
                    <h3>Simple</h3>
                </div>
                <!-- Menampilkan Keunggulan kedua -->
                <div class="col">
                    <span
                        style="display: inline-block; height: 200px; width: 200px; background-color: white; border-radius: 50%; overflow: hidden;">
                        <img src="images/about-2.png" alt="" style="height: 85%; width: 85%;">
                    </span>
                    <h3>Pakan Berkualitas</h3>
                </div>
                <!-- Menampilkan Keunggulan ketiga -->
                <div class="col">
                    <span
                        style="display: inline-block; height: 200px; width: 200px; background-color: white; border-radius: 50%; overflow: hidden;">
                        <img src="images/about-3.png" alt="" style="height: 100%; width: 90%;">
                    </span>
                    <h3>Lingkungan Bersih</h3>
                </div>
            </div>
            <br>
            <br>
            <!-- Button untuk kembali kehalaman sebelumnya -->
            <a href="#" onclick="history.back()">
                <button class="btn bg-white text-dark btn-logout">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
            </a>
        </center>
        <br>
        <br>
    </main>

    <!-- Menampilkan footer halaman -->
    <footer style="background-color:white;" class="text-center pt-3">
        <p>Copyright 2023 &copy; NutriCycle</p>
    </footer>

    <!-- Memuat file JavaScript dari Bootstrap untuk membuat halaman responsif -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
</x-app-layout>
