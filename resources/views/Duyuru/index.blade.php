<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Duyurular') }}
        </h2>
    </x-slot>

    <style>
        /* CSS stilleri buraya */
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-4">Duyurular</h1>

                    <!-- Arama Formu -->
                    <form action="{{ route('announcements.search') }}" method="GET" class="mb-4">
                        <input type="text" name="search" placeholder="Arama yap..." class="border border-gray-300 p-2 rounded-md mr-2">
                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Ara</button>
                    </form>

                    <!-- Duyurular -->
                    @foreach ($announcements as $announcement)
                        <div class="announcement">
                            <h3 class="announcement-title">{{ $announcement->title }}</h3>
                            <p class="announcement-content">{{ $announcement->content }}</p>
                        </div>
                    @endforeach

                    <!-- Geri Dön Butonu -->
                    <a href="{{ route('dashboard') }}" class="return-button bg-gray-500 text-white p-2 rounded-md">Ana Sayfa</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
