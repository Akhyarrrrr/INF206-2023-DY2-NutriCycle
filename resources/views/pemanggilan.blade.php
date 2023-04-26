<x-app-layout>
<!-- Ini adalah kode HTML untuk halaman Pemanggilan NutriCycle -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NutriCycle</title>
    <!-- Memuat file CSS dari Bootstrap untuk membuat halaman responsif -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
        <br>
        <div class="d-flex justify-content-center">
            <div class="card px-3" style="background: #60A5FA; height:550px; width: 400px;">
                <br>
                <h1 class="text-center fw-bold">Schedule</h1>
                <i class="fas fa-shipping-fast text-center fa-3x"></i>
                <br>
                <h5 class="text-center">Tentukan jadwal penjemputan</h5>
                <br>
                <!-- Opsi pilihan tanggal-bulan-tahun -->
                <div class="mb-3">
                    <input type="date" class="form-control px-3">
                </div>
                <br>
                <!-- Opsi pilihan jam penjemputan -->
                <div class="mb-3 d-flex justify-content-center ">
                    <select class="form-control w-25">
                        <option value="" hidden>Pilih Jam</option>
                        <option value="">08.00</option>
                        <option value="">12.00</option>
                        <option value="">17.00</option>
                    </select>
                </div>
                <br>
                <br>
                <br>
                <!-- Button untuk memanggil Petugas-->
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark text-white rounded-pill w-25">
                        Call
                    </button>
                </div>
            </div>
        </div>
        <br>
        <br>
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