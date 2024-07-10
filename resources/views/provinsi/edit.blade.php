<x-layout>
    <x-slot name="title">Edit Provinsi</x-slot>
    <x-slot name="card_title">Form Edit Provinsi</x-slot>
    <x-slot name="page_content">
        <form action="{{ route('provinsi.update', $provinsi->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">Nama Provinsi</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $provinsi->nama }}" required>
            </div>
            <div class="form-group">
                <label for="ibukota">Ibukota</label>
                <input type="text" class="form-control" id="ibukota" name="ibukota" value="{{ $provinsi->ibukota }}" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $provinsi->latitude }}">
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $provinsi->longitude }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </x-slot>
</x-layout>
