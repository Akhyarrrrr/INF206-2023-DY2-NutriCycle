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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

    <body>
        <!-- ini merupakan main dari file keranjang -->
        <main style="background: linear-gradient(to bottom, #0a1022 0%, #17388d 100%) !important;">
            <br>
            <br>
            <br>
            <br>
            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <div class="container mb-0">
                    @forelse ($data as $key => $value)
                        <div class="card p-5 mb-5">
                            <div class="row">
                                <div class="col-1">
                                    <input  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" type="checkbox" value="{{ $value->id }}"
                                        name="cart[]"  onchange="updateTotal()">
                                </div>
                                <div class="col-3">
                                    <img src="images/p1.jpeg">
                                </div>
                                <div class="col-7">

                                    <h2 class="fw-bold">{{ $value->produk->nama }}</h2>
                                    @if ($value->produk->harga_promo != 0)
                                        <span class="text-decoration-line-through">Rp .
                                            {{ number_format($value->produk->harga) }}</span>
                                        <span class="fw-bold text-danger">Rp .
                                            {{ number_format($value->produk->harga_promo) }}</span>
                                        <input type="hidden" value="{{ $value->produk->harga_promo * $value->jumlah }}"
                                            id="subharga">
                                    @else
                                        <span class="fw-bold">Rp .
                                            {{ number_format($value->produk->harga) }}</span>

                                        <input type="hidden" value="{{ $value->produk->harga * $value->jumlah }}"
                                            id="subharga">
                                    @endif
                                    <br>
                                    <br>
                                    @if ($value->produk->harga_promo != 0)
                                        @php
                                            $now = \Carbon\Carbon::now();
                                            $promoEnd = \Carbon\Carbon::parse($value->produk->tanggal_promo_berakhir);
                                            $daysLeft = $promoEnd->diffInDays($now);
                                        @endphp
                                        @if ($daysLeft > 0)
                                            <span class="text-danger"><b>Promo</b> berakhir dalam {{ $daysLeft }}
                                                hari</span>
                                        @else
                                            <span class="text-danger"><b>Promo</b> telah berakhir</span>
                                        @endif
                                    @endif
                                    <br>
                                    <br>
                                    <div class="d-flex">
                                        <a href="{{ route('update_cart', [$value->id, -1]) }}" class="btn">-</a>
                                        <a class="btn">{{ $value->jumlah }}</a>
                                        <a href="{{ route('update_cart', [$value->id, +1]) }}" class="btn">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <center>
                            <h2 class="text-white min-h-screen">Data Cart Kosong</h2>
                        </center>
                    @endforelse
                </div>

                <div style="display:flex;">
                    <div style="float:left;width: 75%;" class="bg-white p-3">
                        <div class="row justify-content-between">
                            <div class="col">
                                <div class="col-4">
                                    <input  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" type="checkbox" id="semua_check" name="semua_check">
                                    <label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Pilih Semua</label>
                                </div>
                            </div>
                            <div class="col" style="text-align: right !important;">
                                Total <b><span class="text-danger" id="subTotal">0</span></b>
                            </div>
                        </div>
                    </div>

                    <div style="float:right;width: 25%;" class="bg-danger p-3 text-white">

                        <button type="submit" id="jitem">
                            Checkout (0)

                        </button>
                    </div>

                </div>
            </form>
            <br>
            <br>
            <br>
            <br>
        </main>

        <!-- Menampilkan footer halaman -->
        <footer style="background-color:white;" class="text-center pt-3">
            <p>Copyright 2023 &copy; NutriCycle</p>
        </footer>

        <script>
            function updateTotal() {
                let total = 0;
                let counter = 0;
                const checkboxes = document.querySelectorAll('input[name="cart[]"]');

                checkboxes.forEach((checkbox) => {
                    if (checkbox.checked) {
                        const subharga = parseFloat(checkbox.parentNode.parentNode.querySelector('#subharga').value);
                        total += subharga;
                        counter++;
                    }
                });

                document.querySelector('#subTotal').textContent = `Rp. ${total.toLocaleString()}`;
                document.querySelector('#jitem').textContent = `(CheckOut ${counter})`;
            }

            const checkboxes = document.querySelectorAll('input[name="cart[]"]');

            checkboxes.forEach((checkbox) => {
                checkbox.addEventListener('change', updateTotal);
            });
            document.querySelector('#semua_check').addEventListener('change', function() {
                let checkboxes = document.querySelectorAll('input[name="cart[]"]');
                checkboxes.forEach((checkbox) => {
                    checkbox.checked = this.checked;
                });
                updateTotal();
            });
        </script>

        <!-- Memuat file JavaScript dari Bootstrap untuk membuat halaman responsif -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </body>

    </html>
</x-app-layout>