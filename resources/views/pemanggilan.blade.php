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
    <link rel="stylesheet" href="style.css">
    <!-- Memuat fontawesome untuk ikon -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Menampilkan header halaman -->
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #13192B;">
            <div class="container-fluid">
                <div class="navbar-brand text-white pe-3" style="border-right: 1px solid white;">
                    <img src="images/logo.png" alt="Logo NutriCycle" width="40">NutriCycle
                </div>
                <div class="text-white collapse navbar-collapse">Pemanggilan Petugas</div>
                <li class="nav-item dropdown" style="margin-right:30px;">
                    <div style="position: relative; bottom:10px;" class="nav-link dropdown-toggle" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="fas fa-user-circle fa-2x me-2 text-white"></p>
                        <span class="text-white" style="position: relative;bottom: 5px;">
                            Hi, {{ Auth::user()->name }}
                        </span>
                    </div>
                    <!-- Option pada Navbar -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href=""><i class="fas fa-user"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="about.html"><i class="fas fa-info-circle"></i> About Us</a>
                        </li>
                        <li><a class="dropdown-item" href="help.html"><i class="fas fa-question-circle"></i> Help</a>
                        </li>
                        <li><a class="dropdown-item" href="index.html"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </div>
        </nav>
    </header>

    <!-- Menampilkan main halaman-->
    <main>
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
