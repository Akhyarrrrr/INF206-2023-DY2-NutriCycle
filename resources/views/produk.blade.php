<!-- Ini adalah kode HTML untuk halaman Pembelian Produk NutriCycle -->
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <!-- Menampilkan header halaman -->
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #13192B;">
            <div class="container-fluid">
                <div class="navbar-brand text-white pe-3" style="border-right: 1px solid white;">
                    <img src="images/logo.png" alt="Logo NutriCycle" width="40">NutriCycle
                </div>
                <div class="text-white collapse navbar-collapse">Produk</div>
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
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">
                                <i class="fas fa-user"></i><span>Profile</span></a></li>
                        <li><a class="dropdown-item" href="{{ url('/about') }}">
                                <i class="fas fa-info-circle"></i>About Us</a></li>
                        <li><a class="dropdown-item" href="{{ url('/help') }}">
                                <i class="fas fa-question-circle"></i> Help</a></li>
                        <li><a class="dropdown-item" href="index"><i></i>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <div href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('Log Out') }}
                                    </div>
                                </form>
                            </a></li>
                    </ul>
                </li>
            </div>
        </nav>
    </header>

    <!-- Menampilkan main halaman-->
    <main style="background: linear-gradient(to bottom, #0a1022 0%, #17388d 100%) !important;}">
        <br>
        <br>
        <p class="text-white text-center" style="font-size: 2rem;">Our Product</p>
        <br>
        <div class="container">
            <div class="mx-auto justify-content-center">
                <div class="d-flex justify-content-center gap-5">
                    <!-- Opsi Produk 1(Pakan Ternak) -->
                    <div>
                        <div class="card" style="width: 22rem;">
                            <div class="text-center">
                                <br>
                                <br>
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="images/p1.jpeg" style="width: 200px;">
                                </div>
                                <h5 class="card-title">Pakan Ternak</h5>
                                <p class="text-danger">Rp50.000</p>
                                <div>
                                    <a href="#" class="btn btn-primary" onclick="addToCart()">
                                        <i class="fas fa-shopping-cart"></i> Add to cart
                                    </a>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>

                    <!-- Opsi Produk 2(Pupuk Organik) -->
                    <div>
                        <div class="card" style="width: 22rem;">
                            <div class="text-center">
                                <br>
                                <br>
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="images/p2.jpeg" style="width: 200px;">
                                </div>
                                <h5 class="card-title">Pakan Ternak</h5>
                                <p class="text-danger">Rp50.000</p>
                                <div>
                                    <a href="#" class="btn btn-primary" onclick="addToCart()">
                                        <i class="fas fa-shopping-cart"></i> Add to cart
                                    </a>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <center>
            <a href="keranjang" class="btn btn-dark text-white rounded-4">
                <i class="fas fa-shopping-cart"></i> Go to Cart
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

    <script>
        function addToCart() {
            // lakukan aksi untuk menambahkan pesanan ke keranjang
            Swal.fire({
                icon: 'success',
                title: 'Pesanan berhasil ditambahkan ke keranjang!',
                showConfirmButton: false,
                timer: 2000
            })
        }
    </script>
</body>

</html>
