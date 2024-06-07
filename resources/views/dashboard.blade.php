<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            Anasayfanıza Hoş Geldiniz
        </h2>
    </x-slot>

    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold text-gray-800">Anasayfanızı Keşfedin</h1>
        <p class="text-lg text-gray-600">Tüm harika özellikleri ve fonksiyonları keşfedin.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-8">
            <!-- Duyuru Bölümü -->
            <a href="{{ route('announcements.index') }}"
                class="flex items-center p-6 bg-blue-500 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300 ease-in-out">
                <img src="https://cdn-icons-png.flaticon.com/512/11980/11980759.png" alt="Duyurular İkonu"
                    class="w-16 h-16 flex-shrink-0">

                <div class="ml-4">
                    <h2 class="text-xl font-semibold text-white">DUYURULAR</h2>
                    <p class="text-lg text-white mt-2">Yöneticiden gelen son duyuruları takip edin.</p>
                </div>
            </a>

            <!-- Ürün Bölümü -->
            <a href="{{ route('product.index') }}"
                class="flex items-center p-6 bg-green-500 rounded-lg shadow-lg hover:bg-green-600 transition duration-300 ease-in-out">
                <img src="https://cdn-icons-png.flaticon.com/512/2652/2652218.png" alt="Ürün İkonu"
                    class="w-16 h-16 flex-shrink-0">

                <div class="ml-4">
                    <h2 class="text-xl font-semibold text-white">ÜRÜNLER</h2>
                    <p class="text-lg text-white mt-2">Mevcut geniş ürün yelpazesini keşfedin.</p>
                </div>
            </a>
        </div>

        <!-- İletişim Formu -->
        <div class="mt-12">
            <h2 class="text-xl font-semibold text-gray-800">Sorularınız mı var ya da Geri Bildirimde mi Bulunmak İstiyorsunuz?</h2>
            <p class="text-lg text-gray-600">Bizimle iletişime geçmekten çekinmeyin.</p>

            <button onclick="toggleContactForm()"
                class="mt-4 bg-gray-800 text-white font-semibold py-2 px-6 rounded-full hover:bg-gray-900 transition duration-300 ease-in-out">
                Bize Ulaşın
            </button>

            <div class="contact-form hidden mt-6">
                <h3 class="text-lg font-semibold text-gray-800">İletişim Formu</h3>
                <form method="POST" action="{{ route('contact.submit') }}" class="mt-4">
                    @csrf
                    <input type="text" name="name" placeholder="Adınız"
                        class="w-full bg-gray-100 border border-gray-300 rounded-md p-2 focus:outline-none focus:border-gray-500">
                    <input type="email" name="email" placeholder="E-posta Adresiniz"
                        class="mt-4 w-full bg-gray-100 border border-gray-300 rounded-md p-2 focus:outline-none focus:border-gray-500">
                    <textarea name="message" rows="4" placeholder="Mesajınız"
                        class="mt-4 w-full bg-gray-100 border border-gray-300 rounded-md p-2 focus:outline-none focus:border-gray-500"></textarea>
                    <button type="submit"
                        class="mt-4 bg-blue-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-blue-600 transition duration-300 ease-in-out">
                        Mesaj Gönder
                    </button>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
        <p class="text-muted mb-1 mb-md-0">Copyright © 2024 .</p>
        <p class="text-muted">Alperen Demirel Tarafından Olusturuldu. <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
    </footer>

    <script>
        function toggleContactForm() {
            var form = document.querySelector('.contact-form');
            form.classList.toggle('hidden');
        }
    </script>
</x-app-layout>
