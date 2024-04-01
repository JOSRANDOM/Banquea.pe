<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="ENAE, ENAM, ENAOBS, ENAO, BANQUEA, ENARM, ENAFB, ENARE">
        <meta name="description" content="Somos una empresa peruana que busca implementar la tecnología en la educación y formación de nuevos profesionales.">

        <title>Banquea.pe</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        @vite('resources/css/app.css')
        
    </head>
    <body class="site-body min-w-96">
        <header class="p-3 border-b bg-black">
            <div class="container mx-auto flex justify-between items-center">
                <img src="/image/carousel/banquea.png" alt="Logo de BANQUEA.pe" style="max-width: 200px; height: auto;">
            <!--
                <nav class="flex gap-2 items-center ">
                    <a class="font-blod mx-4 uppercase text-white text-sm hover:text-gray-500 duration-500" href="/login">
                        Login
                    </a>
                    <a class="font-blod mx-4 uppercase text-white text-sm hover:text-gray-500 duration-500" href="#">
                        Registrate
                    </a>

                    <button style="background-color: #24E0B2" class=" text-white duration-500 px-6 py-2 mx-4 hover:bg-gray-600 rounded">
                        SUSCRIBETE
                    </button>
                </nav>
            -->

            </div>
        </header>

        <nav class="p-3 border-t bg-white">
            <div class="container mx-auto flex justify-center items-center">
                <!-- Puedes agregar enlaces o elementos adicionales para la barra de navegación inferior aquí -->
                <a class="font-blod mx-4  text-black hover:text-gray-500 duration-500 relative" href="/">
                    Home
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-green-300 transform scale-x-0 origin-left transition-transform"></span>    
                </a>
                <a class="font-blod mx-4  text-black hover:text-gray-500 duration-500" href="/testimonios">
                    Testimonios
                </a>
                <a class="font-blod mx-4  text-black hover:text-green-300 duration-500" href="/nosotros">
                    Sobre Nosotros
                </a>
                <!-- ... Agrega más elementos según sea necesario ... -->
            </div>
        </nav>

        <main class="bg-white mx-auto mt-2 text-black ">

            <div>
                <h2>
                     @yield('titulo')
                </h2>
                    @yield('contenido')
            </div>

            
        </main>
        <div class="fixed bottom-10 right-10">
            <a href="https://wa.me/934082775">
                <img src="/image/carousel/whatsapp.png" alt="Suscripción" style="width: 100px; height: 100px;">
            </a>
        </div>

        <footer>
            <div class="p-10 bg-black text-white">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
                        <div class="mb-5">
                            <h4 class="text-2x1 pb-4">Benlos</h4>
                            <p class="text-gray-500">
                            Av. Almte. Miguel Grau 1310<br>
                            Barranco<br>
                            Perú<br><br>
                            <strong>Cel:</strong>+51-981063835<br>
                            <strong>Correo:</strong>contacto@benlos.com<br>
                            </p>
                        </div>
                        <div class="mb-5">
                            <h4>Ayuda</h4>
                            <ul class="text-gray-500">
                                <li class="pb-4 hover:text-green-300 duration-500">
                                    <a href="/terminosYcondiciones">Términos y Condiciones</a>
                                </li>
                                <li class="pb-4 hover:text-green-300 duration-500">
                                    <a href="/">Preguntas Frecuentes</a>
                                </li>
                                <li class="pb-4 hover:text-green-300 duration-500">
                                    <a href="/">Buzón de sugerencias</a>
                                </li>
                                <li class="pb-4 hover:text-green-300 duration-500">
                                    <a href="/politicaDePrivacidad">Politica de Privacidad</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h4>¿Quienes Somos?</h4>
                            <ul class="text-gray-500">
                                <li class="pb-4 hover:text-green-300 duration-500 ">
                                    <a href="/staff">Nuestro Staff</a>
                                </li>
                                <li class="pb-4 hover:text-green-300 duration-500">
                                    <a href="https://web.facebook.com/profile.php?id=100093278913594">Facebook</a>
                                </li>
                                <li class="pb-4 hover:text-green-300 duration-500">
                                    <a href="https://www.instagram.com/banquea_pe/">Instagram</a>
                                </li>
                                <li class="pb-4 hover:text-green-300 duration-500">
                                    <a href="https://www.linkedin.com/company/benlos/about/">Linkedln</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h4 class="pb-4">Suscritebe para más novedades</h4>
                            <p class="text-gray-500 pb-2">Unete a nuestro mas de 20,000 mil usuarios y vuelvete parte de nuestra familia</p>
                            <form class="flex flex-row flex-wrap">
                                <input type="text" class="text-gray-500 w-2/3 p-2 focus:border-yellow-500" placeholder="email@example.com">
                                <button class="p-2 w.1/3 bg-green-300 text-white hover:bg-gray-500">suscribirse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>

    </body>
</html>
