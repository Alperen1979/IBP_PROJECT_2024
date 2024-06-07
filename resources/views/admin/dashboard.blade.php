<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alperen Demirel') }}
        </h2>
    </x-slot>

    <main class="mt-6">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background: linear-gradient(to right, #000000, #111111);
                /* Parlak siyah arka plan */
                color: #fff;
                /* Beyaz metin rengi */
            }

            /* Diğer CSS stilleri buraya gelecek */


            .grid {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                gap: 30px;
                margin: 20px;
            }

            .card {
                background: rgba(255, 255, 255, 0.8);
                border-radius: 20px;
                padding: 30px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                width: 300px;
                transition: transform 0.3s, box-shadow 0.3s;
                text-align: center;
            }

            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            }

            .card img {
                width: 80px;
                height: 80px;
                margin-bottom: 15px;
                transition: transform 0.3s;
            }

            .card:hover img {
                transform: scale(1.15);
            }

            .card h2 {
                font-size: 1.5rem;
                margin-bottom: 10px;
                color: #2c3e50;
            }

            .card p {
                font-size: 1rem;
                color: #34495e;
            }

            .nav {
                position: fixed;
                top: 50%;
                left: 0;
                transform: translateY(-50%);
                display: flex;
                flex-direction: column;
                gap: 20px;
                padding: 10px;
                background: rgba(255, 255, 255, 0.8);
                border-radius: 0 20px 20px 0;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            .nav a {
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: transform 0.3s;
            }

            .nav a:hover {
                transform: scale(1.1);
            }

            .message-box {
                display: none;
                position: fixed;
                bottom: 80px;
                right: 20px;
                background: rgba(255, 255, 255, 0.9);
                width: 350px;
                max-height: 500px;
                overflow-y: auto;
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            }

            .message-box .message {
                border-bottom: 1px solid #ddd;
                padding-bottom: 10px;
                margin-bottom: 10px;
            }

            .draggable {
                cursor: pointer;
                width: 60px;
                height: 60px;
                background: #FF2D20;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .draggable:hover {
                transform: scale(1.1);
            }
        </style>

        <div class="grid">
            <div class="grid">
                <div class="card">
                    <a href="{{ route('admin.users.index') }}">
                        <img src="https://cdn-icons-png.flaticon.com/512/1946/1946423.png"
                            alt="Kullanıcı Bilgilerini Düzenleme">

                        <h2>Kullanıcı Bilgilerini Düzenleme</h2>
                        <p>Buraya tıklayarak kullanıcı bilgilerini düzenleyebilirsiniz.</p>
                    </a>
                </div>
            </div>

            <div class="card">
                <a href="{{ route('admin.posts.index') }}">
                    <img src="https://cdn-icons-png.flaticon.com/512/703/703835.png" alt="Post Paylaşımı">

                    <h2>Post Paylaşımı</h2>
                    <p>Buraya tıklayarak gönderi paylaşabilirsiniz. Ayrıca gönderileri düzenleyebilir ve silebilirsiniz.
                    </p>
                </a>
            </div>



            <div class="card">
                <a href="{{ route('admin.product.index') }}">
                    <img src="https://cdn-icons-png.flaticon.com/512/2301/2301703.png" alt="Eşya Envanteri">
                    <h2>Eşya Envanteri Kontrolü</h2>
                    <p>Buraya tıklayarak eşya envanterini kontrol edebilirsiniz. Ayrıca ürün ekleyebilir, düzenleyebilir
                        ve silebilirsiniz.</p>
                </a>
            </div>


            <div class="nav">
                <a href="https://github.com/Alperen1979">
                    <img src="https://cdn-icons-png.flaticon.com/512/10090/10090320.png" width="60" height="60"
                        alt="" title="" class="img-small">
                </a>

            </div>

            <div class="fixed bottom-6 right-6">
                <div id="draggable-message-box" class="draggable">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3.02832 10L10.2246 14.8166C10.8661 15.2443 11.1869 15.4581 11.5336 15.5412C11.8399 15.6146 12.1593 15.6146 12.4657 15.5412C12.8124 15.4581 13.1332 15.2443 13.7747 14.8166L20.971 10M10.2981 4.06879L4.49814 7.71127C3.95121 8.05474 3.67775 8.22648 3.4794 8.45864C3.30385 8.66412 3.17176 8.90305 3.09111 9.161C3 9.45244 3 9.77535 3 10.4212V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.07989 20 6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V10.4212C21 9.77535 21 9.45244 20.9089 9.161C20.8282 8.90305 20.6962 8.66412 20.5206 8.45864C20.3223 8.22648 20.0488 8.05474 19.5019 7.71127L13.7019 4.06879C13.0846 3.68116 12.776 3.48735 12.4449 3.4118C12.152 3.34499 11.848 3.34499 11.5551 3.4118C11.224 3.48735 10.9154 3.68116 10.2981 4.06879Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>



                <div id="message-box"
                class="bg-white p-4 shadow-lg rounded-lg w-60 h-60 overflow-y-auto cursor-pointer hidden">


                        <!-- Cevap Formu -->
                        <form class="response-form mt-4" method="POST"
                           ">
                            @csrf
                            <textarea name="reply" rows="3" class="w-full border rounded-md p-2" placeholder="Your reply here..."></textarea>
                            <button type="submit"
                                class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Reply</button>
                        </form>
                    </div>

            </div>
        </div>
            <script>
                const draggableMessageBox = document.getElementById('draggable-message-box');
                const messageBox = document.getElementById('message-box');

                draggableMessageBox.addEventListener('click', () => {
                    messageBox.style.display = messageBox.style.display === 'block' ? 'none' : 'block';
                });

                draggableMessageBox.addEventListener('mousedown', (e) => {
                    let shiftX = e.clientX - draggableMessageBox.getBoundingClientRect().left;
                    let shiftY = e.clientY - draggableMessageBox.getBoundingClientRect().top;

                    function moveAt(pageX, pageY) {
                        draggableMessageBox.style.left = pageX - shiftX + 'px';
                        draggableMessageBox.style.top = pageY - shiftY + 'px';
                    }

                    function onMouseMove(e) {
                        moveAt(e.pageX, e.pageY);
                    }

                    document.addEventListener('mousemove', onMouseMove);

                    draggableMessageBox.onmouseup = function() {
                        document.removeEventListener('mousemove', onMouseMove);
                        draggableMessageBox.onmouseup = null;
                    };
                });

                draggableMessageBox.ondragstart = function() {
                    return false;
                };
            </script>
    </main>
</x-app-layout>
