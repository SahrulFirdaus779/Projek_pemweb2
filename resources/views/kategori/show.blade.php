<x-layout>
<x-slot name="title">Detail Kategori</x-slot>
<x-slot name="card_title">Data Kategori</x-slot>
<x-slot name="page_content">
    <table class ="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kategori as $kategori)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $kategori->nama }}</td>
                <td>
                    <a href="" class="btn btn-info btn-sm">Detail</a>
                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                    <form action="" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </x-slot>
</x-layout>