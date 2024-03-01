@extends('layouts.app')

@section('contenido')



<div class="flex flex-row justify-between">
    <div class="w-1/2">
        <div class="card bg-white/10 duration-500 cursor-pointer p-8 rounded-xl">
            <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
            <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <figure class="mt-10">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <div class="text-gray-600 text-center">Misión</div>
                        <p>“Nuestra misión es facilitar el acceso a la educación en ciencias de la salud mediante tecnología innovadora y accesible. 
                            Nos comprometemos a proporcionar herramientas de estudio simples y efectivas que ayuden a los estudiantes a prepararse de manera óptima para sus exámenes, 
                            facilitando así su éxito académico y profesional.
                            ”</p>
                    </blockquote>
                </figure>
            </div>
        </div>
    </div>
    <div class="w-1/2 flex justify-center items-center">
        <img class="mx-auto h-12" src="/image/carousel/logo.png" alt="">
    </div>
</div>

<div class="flex flex-row justify-between">
    <div class="w-1/2 flex justify-center items-center">
        <img class="mx-auto h-12" src="/image/carousel/logo.png" alt="">
    </div>
    <div class="w-1/2">
        <div class="card bg-white/10 duration-500 cursor-pointer p-8 rounded-xl">
            <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
            <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <figure class="mt-10">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <div class="text-gray-600 text-center">Visión</div>
                        <p>“Nos visualizamos como líderes en la implementación de tecnología para la educación en ciencias de la salud, 
                            siendo reconocidos por nuestra capacidad para simplificar el proceso de preparación para los exámenes. 
                            Nos esforzamos por crear un entorno de aprendizaje inclusivo y personalizado, donde cada estudiante pueda alcanzar su máximo potencial con confianza y éxito.
                            ”</p>
                    </blockquote>
                </figure>
            </div>
        </div>
    </div>
</div>
<div>
    <hr class="text-gray-100 mt-5" />
</div>
@endsection
