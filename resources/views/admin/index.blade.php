<x-layout>
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="card_title" class="text-center">
        Dashboard {{ auth()->user()->role }}
    </x-slot>
    <x-slot name="page_content">

        <!-- Icon untuk jenis faskes, kategori, provinsi, dan kab/kota -->
        <div class="row mt-4">
            @if(auth()->user()->role == 'admin')
                <div class="col-md-4 mb-3">
                    <div class="card bg-warning">
                        <div class="card-body text-center">
                            <a href="{{ route('jenis_faskes.index') }}" class="text-dark">
                                <i class="fas fa-clinic-medical fa-3x"></i>
                                <p class="mt-2">Jenis Faskes</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-info">
                        <div class="card-body text-center">
                            <a href="{{ route('kategori.index') }}" class="text-white">
                                <i class="fas fa-tags fa-3x"></i>
                                <p class="mt-2">Kategori</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-warning">
                        <div class="card-body text-center">
                            <a href="{{ route('provinsi.index') }}" class="text-dark">
                                <i class="fas fa-map-marked-alt fa-3x"></i>
                                <p class="mt-2">Provinsi</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-success">
                        <div class="card-body text-center">
                            <a href="{{ route('kabkota.index') }}" class="text-white">
                                <i class="fas fa-city fa-3x"></i>
                                <p class="mt-2">Kab/Kota</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-danger">
                        <div class="card-body text-center">
                            <a href="{{ route('faskes.index') }}" class="text-dark">
                                <i class="fas fa-hospital-alt fa-3x"></i>
                                <p class="mt-2">Faskes</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-success">
                        <div class="card-body text-center">
                            <a href="{{ route('profile.edit') }}" class="text-white">
                                <i class="fas fa-user-circle fa-3x"></i>
                                <p class="mt-2">Profile</p>
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-6 mb-3">
                    <div class="card bg-success">
                        <div class="card-body text-center">
                            <a href="{{ route('faskes.index') }}" class="text-white">
                                <i class="fas fa-hospital-alt fa-3x"></i>
                                <p class="mt-2">Faskes</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-danger">
                        <div class="card-body text-center">
                            <a href="{{ route('profile.edit') }}" class="text-white">
                                <i class="fas fa-user-circle fa-3x"></i>
                                <p class="mt-2">Profile</p>
                            </a>
                        </div>
                    </div>
                </div>

            @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        Selamat datang, {{ auth()->user()->name }}!
                    </div>
                    <div class="card-body">
                        <p>Selamat datang di halaman dashboard {{ auth()->user()->role }}. Berikut adalah informasi terkait faskes:</p>
                        <p>Informasi tentang fasilitas kesehatan yang tersedia untuk Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        {{ auth()->user()->role }} Contact Information
                    </div>
                    <div class="card-body">
                        <!-- Konten untuk admin -->
                        <p>Nama Pengguna: {{ auth()->user()->name }}</p>
                        <p>Email: {{ auth()->user()->email }}</p>
                        <p>Role: {{ auth()->user()->role }}</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
