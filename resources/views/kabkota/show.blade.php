<!-- resources/views/kabkota/show.blade.php -->
<x-layout>
    <x-slot name="title">Detail Kabupaten/Kota</x-slot>
    <x-slot name="card_title">Detail Kabupaten/Kota</x-slot>
    <x-slot name="page_content">
        <div class="form-group">
            <label for="nama">Nama Kabupaten/Kota</label>
            <input type="text" class="form-control" id="nama" value="{{ $kabkota->nama }}" readonly>
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" value="{{ $kabkota->latitude }}" readonly>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" id="longitude" value="{{ $kabkota->longitude }}" readonly>
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" value="{{ $kabkota->provinsi->nama }}" readonly>
        </div>
        <a href="{{ route('kabkota.index') }}" class="btn btn-primary">Kembali</a>
    </x-slot>
</x-layout>
