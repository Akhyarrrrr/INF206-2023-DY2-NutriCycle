<x-app-layout>
    <!-- Ini adalah kode HTML untuk halaman Pelayanan NutriCycle -->
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NutriCycle</title>
        <!-- Memuat file CSS dari Bootstrap untuk membuat halaman responsif -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Memuat file CSS custom -->
        <link rel="stylesheet" href="assets\css\style.css">
        <!-- Memuat fontawesome untuk ikon -->
        <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <!-- Menampilkan main halaman-->
        <main style="background: linear-gradient(to bottom, #0a1022 0%, #17388d 100%) !important;">
            <br>
            <br>
            <br>
            <!-- Ilustrasi daur ulang -->
            <div class="container">
                <h2 class="text-center mb-4 text-white">
                    Sampah apa aja sih yang bisa dipakai untuk daur ulang?
                </h2>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="card p-3" style="width:35rem; background-color: #d1e3ff;">
                        <div class="d-flex justify-content-center gap-5">
                            <img src="images/p3.jpeg" class="rounded-circle">
                            <i class="fas fa-arrow-right fa-3x mt-lg-5"></i>
                            <img src="images/p2.jpeg" class="rounded-circle ">
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!-- Edukasi user contoh sampah yang dapat didaur ulang-->
                <div class="d-flex justify-content-evenly">
                    <div class="card p-3" style="width: 34rem; background-color: #d1e3ff;">
                        <p>Ini adalah contoh Sampah yang dapat di daur ulang:</p>
                        <ul>
                            <li>Sisa makanan seperti kulit buah, sayuran, daging, tulang</li>
                            <li>Daun kering, rumput, dan ranting di pekarangan rumah</li>
                            <li>Kertas tisu bekas, sisa teh atau kopi, filter kopi, dan kantong teh</li>
                            <li>Kertas koran dan kardus yang sudah tidak terpakai</li>
                            <li>Kotoran hewan peliharaan</li>
                            <li>Bahan organik lainnya seperti kulit telur, serbuk gergaji, dan jerami</li>
                        </ul>
                    </div>
                    <!-- Edukasi user keuntungan dari produk -->
                    <div class="card p-3" style="width:34rem; background-color: #d1e3ff;">
                        <p>Tentu saja Produk ini memiliki keuntungan bagi kita semua, seperti:</p>
                        <ul>
                            <li>Mengurangi limbah</li>
                            <li>Mengurangi emisi gas rumah kaca</li>
                            <li>Menyediakan pakan ternak dan pupuk yang berkualitas</li>
                            <li>Mendukung keberlanjutan lingkungan</li>
                        </ul>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <!-- Button untuk menuju halaman pemanggilan petugas-->
                <center>
                    <a href="pemanggilan" class="btn btn-dark text-white rounded-4">
                        <i class="fas fa-bell"></i> Panggil Petugas
                    </a>
                </center>
            </div>
            <br><br><br>
        </main>

        <!-- Menampilkan footer halaman -->
        <footer class="bg-white text-center pt-3">
            <p> Copyright 2023 &copy; NutriCycle</p>
        </footer>

        <!-- Memuat file JavaScript dari Bootstrap untuk membuat halaman responsif -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </body>

    </html>
</x-app-layout>