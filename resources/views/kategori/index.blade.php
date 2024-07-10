<!-- resources/views/kategori/index.blade.php -->
<x-layout>
    <x-slot name="title">Halaman Kategori</x-slot>
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
            <a href="{{ route('kategori.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Kategori
            </a>
        </div>
        </x-slot>
        <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            @foreach ($kategori as $kategori)
            <tr>
                <td>{{ $kategori->id }}</td>
                <td>{{ $kategori->nama }}</td>
                <td class="text-right">
                    <a href="{{ route('kategori.show', $kategori->id) }}" class="btn btn-primary">
                        <i class="far fa-eye"></i> Lihat
                    </a>
                    <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning">
                        <i class="far fa-edit"></i> Edit
                    </a>
                    <form class="forms-sample d-inline" action="{{ route('kategori.destroy', $kategori->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $kategori->nama }}?')">
                            <i class="far fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>
