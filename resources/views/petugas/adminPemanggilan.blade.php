<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Pemanggilan
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h2 class="mb-0">Data Tabel Pemanggilan</h2>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->user->name }}</td>
                            <td>{{ $value->user->alamat }}</td>
                            <td>{{ $value->tanggal }}</td>
                            <td>{{ $value->jam }}</td>
                            <td>
                                @if ($value->status == 0)
                                <a href="{{ route('pemanggilan-selesai', $value->id) }}" class="btn btn-primary">Selesaikan</a>
                                @else
                                <button type="button" class="btn btn-success" disabled>Sukses</button>
                                @endif
                            </td>
                        </tr>

                        @empty
                        Data Kosong
                        @endforelse
                    </tbody>



</x-app-layout>