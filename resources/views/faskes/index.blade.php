
<x-layout>
    <x-slot name="title">Halaman Fasilitas Kesehatan</x-slot>
    <x-slot name="card_title">
        @if (session('Pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('Pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(Auth::user()->role == 'admin')
        <div class="mb-2">
            <a href="{{ route('faskes.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Fasilitas Kesehatan
            </a>
        </div>
        @endif
    </x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nama Pengelola</th>
                    <th>Kabupaten/Kota</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faskes as $faske)
                <tr>
                    <td>{{ $faske->id }}</td>
                    <td>{{ $faske->nama }}</td>
                    <td>{{ $faske->nama_pengelola }}</td>
                    <td>{{ $faske->kabkota->nama }}</td>
                    <td>{{ $faske->kategori->nama }}</td>
                    
                    <td class="text-right">
                        <a href="{{ route('faskes.show', $faske->id) }}" class="btn btn-primary">
                            <i class="far fa-eye"></i> Detail
                        </a>
                        @if(Auth::user()->role == 'admin')
                        <a href="{{ route('faskes.edit', $faske->id) }}" class="btn btn-warning">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        <form class="forms-sample d-inline" action="{{ route('faskes.destroy', $faske->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus {{ $faske->nama }}?')">
                                <i class="far fa-trash-alt"></i> Hapus
                            </button>
                            @endif
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-layout>
