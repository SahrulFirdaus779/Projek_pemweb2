<x-layout>
    <x-slot name="title">Unauthorized</x-slot>
    <x-slot name="card_title">
            <p>401 - Unauthorized</p>
    </x-slot>
    <x-slot name="page_content">
        <div class="text-center">
            <p class="lead">You do not have the necessary permissions to access this page.</p>
            <p>Please contact your administrator if you believe this is an error.</p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">
                <i class="fas fa-home"></i> Go Back to Home
            </a>
        </div>
    </x-slot>
</x-layout>