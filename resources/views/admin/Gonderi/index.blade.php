<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Tüm Gönderiler
        </h2>
        <div class="ml-auto">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Gönderi Oluştur</a>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary ml-auto">{{ __('Geri Dön') }}</a>

        </div>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <ul class="divide-y divide-gray-200">
            @foreach ($posts as $post)
                <li class="py-4">
                    <div>
                        <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                        <p class="mt-2 text-gray-600">{{ $post->content }}</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Düzenle</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary" onclick="return confirm('Bu gönderiyi silmek istediğinizden emin misiniz?')">Sil</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
