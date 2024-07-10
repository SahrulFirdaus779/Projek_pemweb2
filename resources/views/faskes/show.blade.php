<x-layout>
    <x-slot name="title">Detail Fasilitas Kesehatan</x-slot>
    <x-slot name="card_title">Detail Fasilitas Kesehatan</x-slot>
    <x-slot name="page_content">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row" class="bg-teal">Nama Fasilitas Kesehatan</th>
                            <td>{{ $faske->nama }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Pengelola</th>
                            <td>{{ $faske->nama_pengelola }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-teal">Alamat</th>
                            <td>{{ $faske->alamat }}</td>
                        </tr>
                        <tr>
                            <th scope="row" >Website</th>
                            <td><a href="{{ $faske->website }}" target="_blank">{{ $faske->website }}</a></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-teal">Email</th>
                            <td>{{ $faske->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row" >Kabupaten/Kota</th>
                            <td>{{ $faske->kabkota->nama }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-teal">Jenis Fasilitas Kesehatan</th>
                            <td>{{ $faske->jenisFaskes->nama }}</td>
                        </tr>
                        <tr>
                            <th scope="row" >Kategori</th>
                            <td>{{ $faske->kategori->nama }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-teal">Rating</th>
                            <td>{{ $faske->rating }}</td>
                        </tr>
                        <tr>
                            <th scope="row" >Latitude</th>
                            <td>{{ $faske->latitude }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-teal">Longitude</th>
                            <td>{{ $faske->longitude }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('faskes.index') }}" class="btn btn-primary">Kembali</a>
    </x-slot>
</x-layout>
