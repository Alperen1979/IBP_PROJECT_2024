<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kullanıcı Listesi') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="header">
            <h1>Kullanıcı Listesi</h1>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Kullanıcı Oluştur</a>
        </div>
        <div class="search-form">
            <form action="{{ route('admin.users.search') }}" method="GET">
                <input type="text" name="query" placeholder="Tüm alanlarda ara" style="width: calc(70% - 40px);" class="form-control">
                <button type="submit" style="width: 100px;" class="btn btn-primary">Ara</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ad</th>
                    <th>E-posta</th>
                    <th>Şifre</th>
                    <th>İşlem</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}" class="btn btn-success">Düzenle</a>
                            <form action="{{ route('admin.users.delete', ['id' => $user->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bu kullanıcıyı silmek istediğinizden emin misiniz?')">Sil</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="no-users">Kullanıcı bulunamadı</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary ml-auto">{{ __('Geri Dön') }}</a>

    </div>
</x-app-layout>
