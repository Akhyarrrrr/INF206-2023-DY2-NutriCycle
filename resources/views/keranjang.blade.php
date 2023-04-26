<x-app-layout>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NutriCycle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\style.css">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- ini merupakan main dari file keranjang -->
    <main>
        <br>
        <br>
        <br>
        <br>
        <div class="container mb-5">
            <div class="card p-5 mb-5">
                <h2 class="text-center">Pakan Ternak</h2>
                <div class="row">
                    <div class="col-3">
                        <input type="checkbox">
                        <img src="images/p1.jpeg">
                    </div>
                    <div class="col-8">
                        <span class="text-decoration-line-through">Rp80.000</span>
                        <span class="fw-bold text-danger">Rp50.000</span>
                        <br>
                        <br>
                        <span class="text-danger"><b>Promo</b> berakhir dalam 2 hari</span>
                        <br>
                        <br>
                        <div class="d-flex">
                            <button class="btn">-</button>
                            <button class="btn">1</button>
                            <button class="btn">+</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-5 mb-5">
                <h2 class="text-center">Pupuk Organik</h2>
                <div class="row">
                    <div class="col-3">
                        <input type="checkbox">
                        <img src="images/p2.jpeg" alt="">
                    </div>
                    <div class="col-8">
                        <span class="text-decoration-line-through">Rp160.000</span>
                        <span class="fw-bold text-danger">Rp100.000</span>
                        <br>
                        <br>
                        <span class="text-danger"><b>Promo</b> berakhir dalam 1 hari</span>
                        <br>
                        <br>
                        <div class="d-flex">
                            <button class="btn">-</button>
                            <button class="btn">0</button>
                            <button class="btn">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="display:flex;">
            <div style="float:left;width: 75%;" class="bg-white p-3">
                <div class="row justify-content-between">
                    <div class="col">
                        <input type="checkbox"> Semua
                    </div>
                    <div class="col" style="text-align: right !important;">
                        Total <b><span class="text-danger">Rp50.000</span></b>
                    </div>
                </div>
            </div>
            <div style="float:right;width: 25%;" class="bg-danger p-3 text-white">
                Checkout (1)
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