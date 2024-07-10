<x-layout>
    <x-slot name="title">Halaman Jenis Faskes</x-slot>
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
            <a href="{{ route('jenis_faskes.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Jenis Faskes
            </a>
        </div>
    </x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>ID</th>
                    <th>Nama Jenis Faskes</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jenisFaskes as $jenis)
                <tr>
                    <td>{{ $jenis->id }}</td>
                    <td>{{ $jenis->nama }}</td>
                    <td class="text-right">
                        <a href="{{ route('jenis_faskes.show', $jenis->id) }}" class="btn btn-primary">
                            <i class="far fa-eye"></i> Lihat
                        </a>
                        <a href="{{ route('jenis_faskes.edit', $jenis->id) }}" class="btn btn-warning">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        <form class="forms-sample d-inline" action="{{ route('jenis_faskes.destroy', $jenis->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus Jenis Faskes ini?')">
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
