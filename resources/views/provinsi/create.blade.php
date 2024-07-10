<x-layout>
    <x-slot name="title">Tambah Provinsi Baru</x-slot>
    <x-slot name="card_title">Form Tambah Provinsi</x-slot>
    <x-slot name="page_content">
        <form action="{{ route('provinsi.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Provinsi</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="ibukota">Ibukota</label>
                <input type="text" class="form-control" id="ibukota" name="ibukota" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude">
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </x-slot>
</x-layout>
