<x-layout>
    <x-slot name="title">Detail Jenis Faskes</x-slot>
    <x-slot name="card_title">Detail Jenis Faskes</x-slot>
    <x-slot name="page_content">
        <div class="form-group">
            <label for="nama">Nama Jenis Faskes</label>
            <input type="text" class="form-control" id="nama" value="{{ $jenisFaskes->nama }}" readonly>
        </div>
        <a href="{{ route('jenis_faskes.index') }}" class="btn btn-primary">Kembali</a>
    </x-slot>
</x-layout>
