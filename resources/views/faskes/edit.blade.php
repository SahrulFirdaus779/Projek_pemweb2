<!-- resources/views/faskes/edit.blade.php -->
<x-layout>
    <x-slot name="title">Edit Fasilitas Kesehatan</x-slot>
    <x-slot name="card_title">Form Edit Fasilitas Kesehatan</x-slot>
    <x-slot name="page_content">
        <form action="{{ route('faskes.update', $faske->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">Nama Fasilitas Kesehatan</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $faske->nama }}" required>
            </div>
            <div class="form-group">
                <label for="nama_pengelola">Nama Pengelola</label>
                <input type="text" class="form-control" id="nama_pengelola" name="nama_pengelola" value="{{ $faske->nama_pengelola }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $faske->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" class="form-control" id="website" name="website" value="{{ $faske->website }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $faske->email }}" required>
            </div>
            <div class="form-group">
                <label for="kabkota_id">Kabupaten/Kota</label>
                <select class="form-control" id="kabkota_id" name="kabkota_id" required>
                    @foreach ($kabkotas as $kabkota)
                        <option value="{{ $kabkota->id }}" {{ $kabkota->id == $faske->kabkota_id ? 'selected' : '' }}>{{ $kabkota->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" value="{{ $faske->rating }}" min="1" max="5" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $faske->latitude }}" required>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $faske->longitude }}" required>
            </div>
            <div class="form-group">
                <label for="jenis_faskes_id">Jenis Fasilitas Kesehatan</label>
                <select class="form-control" id="jenis_faskes_id" name="jenis_faskes_id" required>
                    @foreach ($jenisFaskes as $jenis)
                        <option value="{{ $jenis->id }}" {{ $jenis->id == $faske->jenis_faskes_id ? 'selected' : '' }}>{{ $jenis->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select class="form-control" id="kategori_id" name="kategori_id" required>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ $kategori->id == $faske->kategori_id ? 'selected' : '' }}>{{ $kategori->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </x-slot>
</x-layout>