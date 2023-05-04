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


















</x-app-layout>