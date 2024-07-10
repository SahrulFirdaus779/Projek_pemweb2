<!-- resources/views/kabkota/create.blade.php -->
<x-layout>
    <x-slot name="title">Tambah Kabupaten/Kota Baru</x-slot>
    <x-slot name="card_title">Form Tambah Kabupaten/Kota</x-slot>
    <x-slot name="page_content">
        <form action="{{ route('kabkota.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Kabupaten/Kota</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" required>
            </div>
            <div class="form-group">
                <label for="provinsi_id">Provinsi</label>
                <select class="form-control" id="provinsi_id" name="provinsi_id" required>
                    @foreach ($provinsis as $provinsi)
                        <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </x-slot>
</x-layout>
