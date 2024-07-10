<x-layout>
    <x-slot name="title">Halaman Provinsi</x-slot>
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
            <a href="{{ route('provinsi.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Provinsi
            </a>
        </div>
    </x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>ID</th>
                    <th>Nama Provinsi</th>
                    <th>Ibukota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($provinsi as $provinsi)
                <tr>
                    <td>{{ $provinsi->id }}</td>
                    <td>{{ $provinsi->nama }}</td>
                    <td>{{ $provinsi->ibukota }}</td>
                    <td class="text-right">
                        <a href="{{ route('provinsi.show', $provinsi->id) }}" class="btn btn-primary">
                            <i class="far fa-eye"></i> Lihat
                        </a>
                        <a href="{{ route('provinsi.edit', $provinsi->id) }}" class="btn btn-warning">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        <form class="forms-sample d-inline" action="{{ route('provinsi.destroy', $provinsi->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus Provinsi ini?')">
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
