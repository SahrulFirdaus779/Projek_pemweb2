<!-- resources/views/faskes/create.blade.php -->
<x-layout>
    <x-slot name="title">Tambah Fasilitas Kesehatan</x-slot>
    <x-slot name="card_title">Form Tambah Fasilitas Kesehatan</x-slot>
    <x-slot name="page_content">
        <form action="{{ route('faskes.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Fasilitas Kesehatan</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nama_pengelola">Nama Pengelola</label>
                <input type="text" class="form-control" id="nama_pengelola" name="nama_pengelola" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" class="form-control" id="website" name="website" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="kabkota_id">Kabupaten/Kota</label>
                <select class="form-control" id="kabkota_id" name="kabkota_id" required>
                    @foreach ($kabkotas as $kabkota)
                        <option value="{{ $kabkota->id }}">{{ $kabkota->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
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
                <label for="jenis_faskes_id">Jenis Fasilitas Kesehatan</label>
                <select class="form-control" id="jenis_faskes_id" name="jenis_faskes_id" required>
                    @foreach ($jenisFaskes as $jenis)
                        <option value="{{ $jenis->id }}">{{ $jenis->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select class="form-control" id="kategori_id" name="kategori_id" required>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </x-slot>
</x-layout>
