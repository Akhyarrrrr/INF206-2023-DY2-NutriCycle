<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Produk
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h2 class="mb-0">Tabel Produk</h2>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-tambah">Tambah</button>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Harga Promo</th>
                            <th>Tanggal Promo Berakhir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $key => $value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->nama }}</td>
                                <td><img src="{{ asset('images/' . $value->gambar) }}" alt="Gambar Produk A"
                                        width="50"></td>
                                <td>Rp {{ number_format($value->harga) }}</td>
                                <td>Rp {{ number_format($value->harga_promo) }}</td>
                                <td>{{ $value->tanggal_promo_berakhir ?? 'tidak ada promo' }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#edit-{{ $value->id }}">Edit</button>
                                    <a href="{{ route('produk-delete',$value->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>

                        @empty
                            Data Kosong
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('produk-tambah') }}" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama-produk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama-produk"
                                        placeholder="Masukkan Nama Produk" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar-produk" class="form-label">Gambar Produk</label>
                                    <input type="file" class="form-control" name="gambar" id="gambar-produk"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga-produk" class="form-label">Harga Produk</label>
                                    <input type="number" class="form-control" id="harga-produk"
                                        placeholder="Masukkan Harga Produk" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga-promo" class="form-label">Harga Promo</label>
                                    <input type="number" class="form-control" name="harga_promo" id="harga-promo"
                                        placeholder="Masukkan Harga Promo">
                                </div>
                                <div class="mb-3">
                                    <label for="tgl-promo-berakhir" class="form-label">Tanggal Promo Berakhir</label>
                                    <input type="date" class="form-control" name="tanggal_promo_berakhis"
                                        id="tgl-promo-berakhir">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @foreach ($data as $key => $value)
                <div class="modal fade" id="edit-{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('produk-update') }}" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama-produk" class="form-label">Nama Produk</label>
                                        <input type="text" class="form-control" name="nama" id="nama-produk"
                                            placeholder="Masukkan Nama Produk" value="{{ $value->nama }}" required>
                                        <input type="hidden" name="id" value="{{ $value->id }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar-produk" class="form-label">Gambar Produk</label>
                                        <input type="file" class="form-control" name="gambar"
                                            id="gambar-produk">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga-produk" class="form-label">Harga Produk</label>
                                        <input type="number" class="form-control" name="harga" id="harga-produk"
                                            placeholder="Masukkan Harga Produk" value="{{ $value->harga }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga-promo" class="form-label">Harga Promo</label>
                                        <input type="number" class="form-control" name="harga_promo"
                                            id="harga-promo" placeholder="Masukkan Harga Promo"
                                            value="{{ $value->harga_promo }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tgl-promo-berakhir" class="form-label">Tanggal Promo
                                            Berakhir</label>
                                        <input type="date" class="form-control" name="tanggal_promo_berakhir"
                                            value="{{ $value->tanggal_promo_berakhir }}" id="tgl-promo-berakhir">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif
</x-app-layout>
