<!-- resources/views/kategori/edit.blade.php -->
<x-layout>
    <x-slot name="title">Edit Kategori</x-slot>
    
    <x-slot name="card_title">Edit Data Kategori</x-slot>
    
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ route('kategori.update', $kategori->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Kategori</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $kategori->nama }}" placeholder="Masukkan Nama Kategori">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>