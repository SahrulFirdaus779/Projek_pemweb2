<!-- resources/views/provinsi/show.blade.php -->
<x-layout>
    <x-slot name="title">Detail Provinsi</x-slot>
    <x-slot name="card_title">Detail Provinsi</x-slot>
    <x-slot name="page_content">
        <div class="form-group">
            <label for="nama">Nama Provinsi</label>
            <input type="text" class="form-control" id="nama" value="{{ $provinsi->nama }}" readonly>
        </div>
        <div class="form-group">
            <label for="ibukota">Ibukota</label>
            <input type="text" class="form-control" id="ibukota" value="{{ $provinsi->ibukota }}" readonly>
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" value="{{ $provinsi->latitude }}" readonly>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" id="longitude" value="{{ $provinsi->longitude }}" readonly>
        </div>
        <a href="{{ route('provinsi.index') }}" class="btn btn-primary">Kembali</a>
    </x-slot>
</x-layout>
