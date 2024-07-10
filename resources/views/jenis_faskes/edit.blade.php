<x-layout>
    <x-slot name="title">Edit Jenis Faskes</x-slot>
    <x-slot name="card_title">Form Edit Jenis Faskes</x-slot>
    <x-slot name="page_content">
        <form action="{{ route('jenis_faskes.update', $jenisFaskes->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">Nama Jenis Faskes</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $jenisFaskes->nama }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </x-slot>
</x-layout>
