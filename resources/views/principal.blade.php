@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@section('contenido')
<!--HOME -->
<section id="home" class="py-5">
    <div class="container flex flex-wrap items-center justify-center mx-auto mt-10 md:px-12 md:flex-row">
        <div class="mb-14 lg:mb-0 lg:w-1/2">
            <h1 class="max-w-xl text-[2.9rem] leading-none text-gray-900 font-extrabold font-sans text-left lg:text-5xl
            lg:text-left lg:leading-tight mb-5">BANQUEA.pe</h1>
            <div class="flex justify-center mt-14 lg:justify-start">
                <P class="max-w-3xl text-left text-gray-500 lg:text-left lg:max-w-xl">
                    Somos una empresa peruana que busca implementar la tecnología en la 
                    educación y formación de nuevos profesionales.
                </P>
                
            </div>
            <div class="flex justify-center mt-14 lg:justify-start">
                <P class="max-w-3xl text-left text-gray-500 lg:text-left lg:max-w-xl">
                    En esa línea, hemos generado plataformas para los exámenes más importantes de salud. 
                    Contamos con más de 20,000 mil usuarios registrados en nuestras plataformas virtuales.
                </P>
            </div>
        </div>
        
        <div class="lg:w-1/2">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img class="ml-auto" src="/image/carousel/enae-phone.png" alt="enae" >
                  </div>
                  <div class="carousel-item">
                    <img class="ml-auto" src="/image/carousel/enao-phone.png" alt="enao" >
                  </div>
                  <div class="carousel-item">
                    <img class="ml-auto" src="/image/carousel/enarm-phone.png" alt="enarm" >
                  </div>
                  <div class="carousel-item active">
                    <img class="ml-auto" src="/image/carousel/enam-phone.png" alt="enam" >
                  </div>
                  <div class="carousel-item">
                    <img class="ml-auto" src="/image/carousel/enaobs-phone.png" alt="enam" >
                  </div>
                  <div class="carousel-item">
                    <img class="ml-auto" src="/image/carousel/enafb-phone.png" alt="enam" >
                  </div>
                </div>
              </div>
            <!--<img class="ml-auto" src="/image/carousel/hero-phone.png" alt="enae" >-->
        </div>
    </div>
</section>

    <!-- Agrega el título "Nuestras Plataformas" -->
<section id="plataformas">
    <div class="container mx-auto mt-10 text-center">
        <h3 class="text-5xl font-bold mb-5 text-gray-900">
            Nuestras Plataformas
        </h3>
    </div>
    
    <div class="flex items-center justify-center min-h-screen container mx-auto">
        <!--GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mx-auto group">
            <!--CARD -->
            <div class="card bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl">
                <div class="p-5 flex flex-col" style="text-align: center;">
                    <div class="rounded-xl overflow-hidden">
                            <img src="/image/carousel/enam.svg" alt="enae" class="size-20" style="margin: 0 auto;">
                    </div>
                            <h5 class="text-2xl md:text-3xl font-medium mt-3">enam</h5>
                            <p class="text-slate-500 text-lg mt-3 text-center">Prepárate para el Examen 
                            Nacional de Medicina </p> 
                            <a href="https://enam.pe" class="text-center bg-gray-500 text-white py-2 rounded-lg
                            font-semibold mt-4 hover:bg-blue-700 focus:scale-95 transition-all 
                            duration-200 ease-out">Conocer más</a>
                </div>
            </div>

            <!--CARD 2 -->
            <div class="card bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl">
                <div class="p-5 flex flex-col" style="text-align: center;">
                    <div class="rounded-xl overflow-hidden">
                                <img src="/image/carousel/enarm.png" alt="enae" class="size-20" style="margin: 0 auto;">
                        </div>
                                <h5 class="text-2xl md:text-3xl font-medium mt-3">enarm</h5>
                                <p class="text-slate-500 text-lg mt-3 text-center">Prepárate para el Examen 
                                    Nacional de Residencia Médica </p> 
                                <a href="https://enarm.pe" class="text-center bg-gray-500 text-white py-2 rounded-lg
                                font-semibold mt-4 hover:bg-green-400 focus:scale-95 transition-all 
                                duration-200 ease-out">Conocer más</a>
                 </div>
            </div>
 
                         
             <!--CARD 3 -->
             <div class="card bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl">
                <div class="p-5 flex flex-col" style="text-align: center;">
                    <div class="rounded-xl overflow-hidden" >
                        <img src="/image/carousel/enae.png" alt="enae" class="size-20" style="margin: 0 auto;">
                    </div>
                            <h5 class="text-2xl md:text-3xl font-medium mt-3">enae</h5>
                            <p class="text-slate-500 text-lg mt-3 text-center">Prepárate para el Examen Nacional de Enfermería y 
                            el Residentado de Enfermería</p> 
                            <a href="https://enae.pe" class="text-center bg-gray-500 text-white py-2 rounded-lg 
                            font-semibold mt-4 hover:bg-blue-300 hover:text-white focus:scale-95 transition-all 
                            duration-200 ease-out">Conocer más</a>
                </div>
            </div>


            <!--CARD 4 -->
            <div class="card bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl">
                <div class="p-5 flex flex-col" style="text-align: center;">
                    <div class="rounded-xl overflow-hidden">
                                <img src="/image/carousel/enao.png" alt="enae" class="size-20" style="margin: 0 auto;">
                    </div>
                                <h5 class="text-2xl md:text-3xl font-medium mt-3 text-center">enao</h5>
                                <p class="text-slate-500 text-lg mt-3 text-center">Prepárate para el Examen Nacional de Odontología y 
                                el Residentado de Odontología</p> 
                                <a href="https://enao.pe" class="text-center bg-gray-500 text-white py-2 rounded-lg
                                font-semibold mt-4 hover:bg-green-200 focus:scale-95 transition-all 
                                duration-200 ease-out">Conocer más</a>
                    </div>
            </div>

            <!--CARD 5 -->
            <div class="card bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl">
                <div class="p-5 flex flex-col" style="text-align: center;">
                    <div class="rounded-xl overflow-hidden">
                            <img src="/image/carousel/e3.png" alt="enae" class="size-20" style="margin: 0 auto;">
                    </div>
                            <h5 class="text-2xl md:text-3xl font-medium mt-3">enafb</h5>
                            <p class="text-slate-500 text-lg mt-3 text-center">Prepárate para el Examen 
                            Nacional de Farmacia y Bioquímica </p> 
                            <a href="https://enafb.pe" class="text-center bg-gray-500 text-white py-2 rounded-lg
                            font-semibold mt-4 hover:bg-yellow-300 focus:scale-95 transition-all 
                            duration-200 ease-out">Conocer más</a>
                </div>
            </div>

            <!--CARD 6 -->
            <div class="card bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl relative">
                <div class="absolute top-0 right-0 bg-gray-500 text-white py-2 px-4 rounded-bl-xl font-semibold text-sm lg:text-base">Plataforma Nueva</div>
                <div class="p-5 flex flex-col" style="text-align: center;">
                    <div class="rounded-xl overflow-hidden">
                        <img src="/image/carousel/e2.png" alt="enae" class="size-20" style="margin: 0 auto;">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">enaobs</h5>
                    <p class="text-slate-500 text-lg mt-3 text-center">Prepárate para el Examen Nacional de Obstetricia</p>
                    <a href="https://enaobs.pe" class="text-center bg-gray-500 text-white py-2 rounded-lg font-semibold mt-4 hover:bg-pink-300 focus:scale-95 transition-all duration-200 ease-out">Conocer más</a>
                </div>
            </div>

            <!--CARD 7 -->
            <div class="card bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl relative">
                <div class="absolute top-0 right-0 bg-gray-500 text-white py-2 px-4 rounded-bl-xl font-semibold text-sm lg:text-base">Plataforma Nueva</div>
                <div class="p-5 flex flex-col" style="text-align: center;">
                    <div class="rounded-xl overflow-hidden">
                        <img src="/image/carousel/enare.png" alt="Web en construccion" class="size-32" style="margin: 0 auto;">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">enare</h5>
                    <p class="text-slate-500 text-lg mt-3 text-center">Prepárate para el Examen de Residentado de Enfermería</p>
                    <a href="https://enare.banquea.pe" class="text-center bg-gray-500 text-white py-2 rounded-lg font-semibold mt-4 hover:bg-pink-300 focus:scale-95 transition-all duration-200 ease-out">Conocer más</a>
                </div>
            </div>

            <!--CARD 8 -->
            <div class="card bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl relative">
                <!--<div class="absolute top-0 right-0 bg-gray-500 text-white py-2 px-4 rounded-bl-xl font-semibold text-sm lg:text-base">Plataforma Nueva</div>-->
                <div class="p-5 flex flex-col" style="text-align: center;">
                    <div class="rounded-xl overflow-hidden">
                        <img src="/image/carousel/en_construccion.png" alt="Web en construccion" class="size-32" style="margin: 0 auto;">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">enaro</h5>
                    <!--<p class="text-slate-500 text-lg mt-3 text-center">Prepárate para el Examen Nacional de Obstetricia</p>-->
                    <div class="text-center bg-gray-500 text-white py-2 rounded-lg font-semibold mt-4 focus:scale-95 transition-all duration-200 ease-out">PROXIMAMENTE</div>
                </div>
            </div>
            
        </div>
    </div>
</section>
    

        <!--"Nuestros Aliados" -->
<section id="aliados" class="mb-20">
    <div class="container mx-auto mt-10 text-center">
        <h3 class="text-5xl font-bold mb-5 text-gray-900">
            Nuestros Aliados
        </h3>
    </div>
    <div class="flex items-center justify-center container mb-5 sm:min-h-0 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Agrega dos imágenes centradas -->
            <div class="flex items-end justify-center pb-4">
                <img src="/image/carousel/startup.png" alt="Imagen 3" class="max-w-full h-auto size-80 opacity-30">
            </div>
            <div class="flex items-end justify-center">
                <img src="/image/carousel/E-2.jpg" alt="Imagen 1" class="max-w-full h-auto size-80 opacity-30">
            </div>
            <div class="flex items-end justify-center">
                <img src="/image/carousel/R-2.jpg" alt="Imagen 2" class="max-w-full h-auto size-80 opacity-30">
            </div>
            <div class="flex items-end justify-center">
                <img src="/image/carousel/bio.png" alt="Imagen 4" class="max-w-full h-auto size-80 opacity-30">
            </div>
        </div>
    </div>
</section>
    

        <!--"Nuestros Beneficios" -->
<section id="beneficios">
    <div class="container mt-10 text-center">
            <h3 class="text-5xl font-bold mb-10 lg:mb-20 text-gray-900">
                Nuestros Beneficios
            </h3>
        </div>
        
        <div class="flex items-center justify-center container">
            <!--GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!--CARD -->
                <div class="card bg-gray-500">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden">
                                    <img src="/image/carousel/1.png" alt="enae" class="size-20">
                            </div>
                            <h5 class="text-2xl md:text-3xl font-medium mt-3 text-white">BANQUEA 24 HORAS</h5>
                                    <p class="text-white text-lg mt-3">Crea exámenes ilimitados,
                                        elije el tipo de examen con preguntas comentadas.</p> 
                        </div>
                </div>
    
                <!--CARD 2 -->
                <div class="card bg-gray-500">
                    <div class="p-5 flex flex-col">
                        <div class="rounded-xl overflow-hidden">
                                <img src="/image/carousel/2.png" alt="enae" class="size-20">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-medium mt-3 text-white">MULTIPLAFORMA VIRTUAL</h5>
                                <p class="text-white text-lg mt-3">Responde, pausa y 
                                    continúa en cualquier momento.</p> 
                    </div>
                </div>
    
                             
                 <!--CARD 3 -->
                 <div class="card bg-gray-500">
                    <div class="p-5 flex flex-col">
                        <div class="rounded-xl overflow-hidden">
                                <img src="/image/carousel/3.png" alt="enae" class="size-20">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-medium mt-3 text-white">RESULTADOS EN LINEA</h5>
                                <p class="text-white text-lg mt-3">Tus resultados al instante y 
                                    respuestas correctas.</p> 
                    </div>
            </div>
    
                <!--CARD 4 -->
                <div class="card bg-gray-500">
                    <div class="p-5 flex flex-col">
                        <div class="rounded-xl overflow-hidden">
                                <img src="/image/carousel/4.png" alt="enae" class="size-20">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-medium mt-3 text-white">AREAS Y CATEGORIAS</h5>
                                <p class="text-white text-lg mt-3">Puedes elegir las areas y 
                                    categorias mas destacadas.</p> 
                    </div>
            </div>
    
                <!--CARD 5 -->
                <div class="card bg-gray-500">
                    <div class="p-5 flex flex-col">
                        <div class="rounded-xl overflow-hidden">
                                <img src="/image/carousel/5.png" alt="enae" class="size-20">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-medium mt-3 text-white">ANALISIS DE TU RENDIMIENTO</h5>
                                <p class="text-white text-lg mt-3">Visualiza tu progreso y tus
                                     resultados por área.</p> 
                    </div>
            </div>
    
                <!--CARD 6 -->
                <div class="card bg-gray-500">
                    <div class="p-5 flex flex-col">
                        <div class="rounded-xl overflow-hidden">
                                <img src="/image/carousel/6.png" alt="enae" class="size-20">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-medium mt-3 text-white">RANKING NACIONAL</h5>
                                <p class="text-white text-lg mt-3">Participas en el ranking de usuarios 
                                    suscritos en nuestras plataformas.</p> 
                    </div>
            </div>
            </div>
        </div>

        <div>
            <hr class="text-gray-100 mt-5" />
        </div>
</section>
        
    
@endsection

@section('contenido')

@endsection
