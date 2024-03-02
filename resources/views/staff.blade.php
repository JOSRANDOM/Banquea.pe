@extends('layouts.app')

@section('contenido')
<body class="font-Poppins bg-white text-black">
    <div class="text-center py-10">
        <h5 class="font-bold text-2xl" >NUESTRO STAFF</h5>
        <div class="flex justify-center mt-10">
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl">
                        <h1 class="font-bold text-2xl mb-4">COO</h1>
                        <img src="/image/carousel/CG.jpeg" alt="Cristhian Garcia" class="h-20 mx-auto" style="border-radius: 50%;">
                        <h4 class="uppercase text-xl font-bold">Cristhian Garcia</h4>
                        <h1 class=" text-gray-500 text-sm font-bold">ISC - MSc</h1>
                        <p class="text-sm leading-7 my-3 font-light opacity-50"> 
                            No subestimes el poder de la tecnología para transformar tu forma de estudiar.
                        </p>
                        <div class="mt-8 flex justify-around">
                            <a href="https://www.facebook.com/profile.php?id=100093278913594" target="_blank">
                                <img src="/image/carousel/facebook.png" alt="Facebook" class="h-10 w-10">
                            </a>
                            <a href="https://www.instagram.com/cristhian.gharsya/" target="_blank">
                                <img src="/image/carousel/instagram.png" alt="Instagram" class="h-10 w-10">
                            </a>
                            <a href="https://www.linkedin.com/company/benlos/" target="_blank">
                                <img src="/image/carousel/linkedin.png" alt="LinkedIn" class="h-10 w-10">
                            </a>    
                        </div>
                    </div>
                    
                    <div class="bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl">
                        <h1 class="font-bold text-2xl mb-4">CEO</h1>
                        <img src="/image/carousel/OHH.jpeg" alt="Oscar Huapaya" class="h-20 mx-auto" style="border-radius: 10%;" >
                        <h4 class="uppercase text-xl font-bold">Oscar Huapaya</h4>
                        <h1 class=" text-gray-500 text-sm font-bold">MD - MSc</h1>
                        <p class="text-sm leading-7 my-3 font-light opacity-50">
                            Cambiar el mundo, amigo Sancho, que no es locura ni utopía, sino justicia
                        </p>
                        <div class="mt-8 flex justify-around">
                            <a href="https://www.facebook.com/profile.php?id=100093278913594" target="_blank">
                                <img src="/image/carousel/facebook.png" alt="Facebook" class="h-10 w-10">
                            </a>
                            <a href="https://www.instagram.com/ohuapayahuertas/" target="_blank">
                                <img src="/image/carousel/instagram.png" alt="Instagram" class="h-10 w-10">
                            </a>
                            <a href="https://www.linkedin.com/company/benlos/" target="_blank">
                                <img src="/image/carousel/linkedin.png" alt="LinkedIn" class="h-10 w-10">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div>
            <hr class="text-gray-100 mt-5 " />
        </div>
        <!--  
        <div>
            <h1 class="text-4x1 w-96 mx-auto leading-normal font-bold">
                AREA DE MARCKETING
            </h1>
        </div>-->
       <!--  <div class="flex max-w-5xl mx-auto gap-8 group">
            <div class="bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl">
                <img src="/image/carousel/MC.png" alt="Maria del Carmen" class="h-20 mx-auto" style="border-radius: 50%;">
                <h4 class="uppercase text-xl font-bold">Maria del Carmen</h4>
                <h1 class="uppercase text-gray-500 text-sm font-bold">Lic. Ciencias de las comunicaciones</h1>
                <p class="text-sm leading-7 my-3 font-light opacity-50">
                    La inversión en tecnología educativa es una inversión en tu futuro. 
                    No subestimes el poder de la tecnología para transformar tu forma de estudiar y 
                    mejorar tu desempeño académico.
                </p>

                <div class="mt-8 flex justify-around">
                    <a href="https://www.facebook.com/profile.php?id=100093278913594" target="_blank">
                        <img src="/image/carousel/facebook.png" alt="Facebook" class="h-10 w-10">
                    </a>
                    <a href="https://www.instagram.com/mdelc_24/" target="_blank">
                        <img src="/image/carousel/instagram.png" alt="Instagram" class="h-10 w-10">
                    </a>
                    <a href="https://www.linkedin.com/company/benlos/" target="_blank">
                        <img src="/image/carousel/linkedin.png" alt="LinkedIn" class="h-10 w-10">
                    </a>
                </div>

            </div>
        </div>
        <div>
            <hr class="text-gray-100 mt-5" />
        </div>-->
        <div class="mt-10">
            <div>
                <h1 class="text-4x1 w-96 mx-auto leading-normal font-bold ">
                    AREA DE DESARROLLO
                </h1>
            </div>
            <div class="flex justify-center">
                <div class="flex max-w-5xl mx-auto gap-8 group">
                    <div class="bg-white/10 duration-500 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 cursor-pointer p-8 rounded-xl">
                        <img src="/image/carousel/jmh.jpg" alt="Joseph Mori" class="h-20 mx-auto" style="border-radius: 50%;">
                        <h4 class="uppercase text-xl font-bold">Joseph Mori</h4>
                        <h1 class="uppercase text-gray-500 text-sm font-bold">Programador</h1>
                        <p class="text-sm leading-7 my-3 font-light opacity-50">
                            La innovación distingue a los líderes de los seguidores
                        </p>
            
                        <div class="mt-8 flex justify-around">
                            <a href="https://www.facebook.com/profile.php?id=100093278913594" target="_blank">
                                <img src="/image/carousel/facebook.png" alt="Facebook" class="h-10 w-10">
                            </a>
                            <a href="https://www.instagram.com/joseph_mori_herrera/" target="_blank">
                                <img src="/image/carousel/instagram.png" alt="Instagram" class="h-10 w-10">
                            </a>
                            <a href="https://www.linkedin.com/in/joseph-mori-herrera-007139272/" target="_blank">
                                <img src="/image/carousel/linkedin.png" alt="LinkedIn" class="h-10 w-10">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</body>
@endsection 