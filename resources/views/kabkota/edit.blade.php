<!-- resources/views/kabkota/edit.blade.php -->
<x-layout>
    <x-slot name="title">Edit Kabupaten/Kota</x-slot>
    <x-slot name="card_title">Form Edit Kabupaten/Kota</x-slot>
    <x-slot name="page_content">
        <form action="{{ route('kabkota.update', $kabkota->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">Nama Kabupaten/Kota</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kabkota->nama }}" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $kabkota->latitude }}" required>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $kabkota->longitude }}" required>
            </div>
            <div class="form-group">
                <label for="provinsi_id">Provinsi</label>
                <select class="form-control" id="provinsi_id" name="provinsi_id" required>
                    @foreach ($provinsis as $provinsi)
                        <option value="{{ $provinsi->id }}" {{ $provinsi->id == $kabkota->provinsi_id ? 'selected' : '' }}>{{ $provinsi->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </x-slot>
</x-layout>
