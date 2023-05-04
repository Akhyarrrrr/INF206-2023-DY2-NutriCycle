<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Transaksi
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h2 class="mb-0">Tabel Transaksi</h2>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Total Harga</th>
                            <th>Tanggal</th>
                            <th>Detail Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @forelse ($data as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->user->name }}</td>
                                <td>Rp {{ number_format($value->total_harga) }}</td>
                                <td>{{ $value->tanggal }}</td> 
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#detail-{{ $value->id }}">Detail</button>
                                </td>
                                <td>
                                    @if ($value->status == 0)
                                        <a href="{{ route('transaksi-selesai', $value->id) }}"
                                            class="btn btn-primary">Selesaikan</a>
                                    @else
                                        <button type="button" class="btn btn-success" disabled>Sukses</button>
                                    @endif
                                </td>
                            </tr>

                        @empty
                            Data Kosong
                        @endforelse
                    </tbody>
                </table>
            </div>
            @foreach ($data as $key => $value)
                <div class="modal fade" id="detail-{{ $value->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Jumlah</th>
                                            <th>Harga produk</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($value->detail as $k => $v)
                                            <tr>
                                                <td>{{ $k + 1 }}</td>
                                                <td>{{ $v->produk->nama }}</td>
                                                <td>{{ $v->jumlah }}</td>
                                                <td>Rp {{ number_format($v->harga) }}</td>
                                                <td>Rp {{ number_format($v->harga * $v->jumlah) }}</td>
                                            </tr>

                                        @empty
                                            Data Kosong
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</x-app-layout>