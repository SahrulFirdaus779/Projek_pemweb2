<x-layout>
    <x-slot name="title">Halaman Kabupaten/Kota</x-slot>
    <x-slot name="card_title">
        @if (session('Pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('Pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="mb-2">
            <a href="{{ route('kabkota.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Kabupaten/Kota
            </a>
        </div>
    </x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>ID</th>
                    <th>Nama Kabupaten/Kota</th>
                    <th>Provinsi</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kabkotas as $kabkota)
                <tr>
                    <td>{{ $kabkota->id }}</td>
                    <td>{{ $kabkota->nama }}</td>
                    <td>{{ $kabkota->provinsi->nama }}</td>
                    <td>{{ $kabkota->latitude }}</td>
                    <td>{{ $kabkota->longitude }}</td>
                    <td class="text-right">
                        <a href="{{ route('kabkota.show', $kabkota->id) }}" class="btn btn-primary">
                            <i class="far fa-eye"></i> Lihat
                        </a>
                        <a href="{{ route('kabkota.edit', $kabkota->id) }}" class="btn btn-warning">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        <form class="forms-sample d-inline" action="{{ route('kabkota.destroy', $kabkota->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus Kabupaten/Kota ini?')">
                                <i class="far fa-trash-alt"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-layout>
