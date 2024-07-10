<x-layout>
    <x-slot name="title">Tambah Jenis Faskes Baru</x-slot>
    <x-slot name="card_title">Tambah Jenis Faskes</x-slot>
    <x-slot name="page_content">
        <form action="{{ route('jenis_faskes.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Jenis Faskes</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </x-slot>
</x-layout>
