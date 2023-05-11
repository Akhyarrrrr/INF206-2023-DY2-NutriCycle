<!-- Ini adalah kode HTML untuk halaman Pembelian Produk NutriCycle -->
<x-app-layout>
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
   

    <!-- Menampilkan main halaman-->
    <main style="background: linear-gradient(to bottom, #0a1022 0%, #17388d 100%) !important;}">
        <br>
        <br>
        <p class="text-white text-center" style="font-size: 2rem;">Our Product</p>
        <br>
        <div class="container">
            <div class="mx-auto justify-content-center">
                <div class="d-flex justify-content-center row">
                    <!-- Opsi Produk 1(Pakan Ternak) -->
                    @foreach ($data as $key => $value)
                        <div class="card col-md-3 m-1" style="width: 22rem;">
                            <div class="text-center">
                                <br>
                                <br>
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="images/{{ $value->gambar }}" style="width: 200px;">
                                </div>
                                <h5 class="card-title">{{ $value->nama }}</h5>
                                <p class="text-danger">Rp. {{ number_format($value->harga) }}</p>
                                <div>
                                    <a href="{{ route('add_cart', $value->id) }}" class="btn btn-primary">
                                        <i class="fas fa-shopping-cart"></i> Add to cart
                                    </a>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    @endforeach

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

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title:  '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif
</body>

</html>
 </x-app-layout>