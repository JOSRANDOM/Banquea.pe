@extends('layouts.app')

@section('contenido')

<body class="p-3 m-0 border-0 bd-example">
  <h1 class="text-3xl text-center font-bold mb-4">ALGUNOS TESTIMONIOS</h1>

    <div class="flex flex-row justify-between">
      <div class="card bg-white/10 duration-500  group-hover:scale-[0.85] hover:!scale-100 p-8 rounded-xl">
          <div class="card bg-white/10 duration-500 cursor-pointer p-8 rounded-xl">
              <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
              <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
              <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <img class="mx-auto h-12" src="/image/carousel/logo-enao.png" alt="">
                <figure class="mt-10">
                  <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                    <p>“Al principio era un poco escéptica sobre esta plataforma, pero después, aconsejada por una amiga, 
                      me suscribí. Ha sido una muy buena elección que me ha permitido rendir el examen nacional de odontología, 
                      en mi caso combiné cursos de preparación con ejercicios de esta plataforma. Lo bueno es que mientras resuelves los cuestionarios, 
                      no sólo estás haciendo ejercicio por tí mismo, sino también estudiando, porque las respuestas están siempre explicadas, 
                      y es una forma que ayuda mucho a recordar lo que has aprendido.”</p>
                  </blockquote>
                  <figcaption class="mt-10">
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                      <div class="font-semibold text-gray-900">Ana Estrada</div>
                      <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                        <circle cx="1" cy="1" r="1" />
                      </svg>
                      <div class="text-gray-600">ESTUDIANTE</div>
                    </div>
                  </figcaption>
                </figure>
              </div>
          </div>
      </div>
      <div class="w-1/2 flex justify-center items-center">
          <img src="/image/carousel/VN.jpeg" alt="Image 1" style="max-width: 200px; height: auto; border-radius: 50%;">
      </div>
  </div>

  <div>
    <hr class="text-gray-100 mt-5" />
</div>

<div class="flex flex-row justify-between">
  <div class="w-1/2 flex justify-center items-center">
      <img src="/image/carousel/FP.jpeg" alt="Image 1" style="max-width: 200px; height: auto; border-radius: 50%;">
  </div>
  <div class="card bg-white/10 duration-500 group-hover:scale-[0.85] hover:!scale-100 p-8 rounded-xl">
      <div class="card bg-white/10 duration-500 cursor-pointer p-8 rounded-xl">
          <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
          <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
          <div class="mx-auto max-w-2xl lg:max-w-4xl">
              <img class="mx-auto h-12" src="/image/carousel/logo-enam.png" alt="">
              <figure class="mt-10">
                  <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                      Gracias a la plataforma enam.pe tuve la oportunidad de prepararme para rendir el ENAM. La estructura de los simulacros organizada de una manera similar al examen me permitió medir mis tiempos y entrenarme para enfrentar la situación real. Muchas de las preguntas que resolví fueron similares en el examen y haberlas desarrollado antes me permitió resolverlas correctamente. Además, a perder el miedo y dar el examen tranquila, ya que el tema emocional influye mucho al desarrollar un examen de esta envergadura. ¡Agradezco a enam.pe por prepararme!
                  </blockquote>
                  <figcaption class="mt-10">
                      <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                          <div class="font-semibold text-gray-900">Fiorella Patiño</div>
                          <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                              <circle cx="1" cy="1" r="1" />
                          </svg>
                          <div class="text-gray-600">ESTUDIANTE</div>
                      </div>
                  </figcaption>
              </figure>
          </div>
      </div>
  </div>
</div>


    <div>
      <hr class="text-gray-100 mt-5" />
  </div>

  <div class="flex flex-col lg:flex-row justify-center items-center">
    <div class="w-full lg:w-auto mb-8 lg:mb-0 lg:mr-8">
        <div class="card bg-white/10 duration-500 group-hover:scale-[0.85] hover:!scale-100 p-8 rounded-xl">
            <div class="mx-auto max-w-md lg:max-w-4xl">
                <img class="mx-auto h-12" src="/image/carousel/logo-enaO.png" alt="">
                <figure class="mt-10">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <p>“Agradezco a banquea.pe por toda la ayuda que me brindaron para mi preparación al examen nacional de odontología. 
                          Las preguntas que resolví en los simulacros fueron muy similares a las que aparecieron en el examen, 
                          y gracias a ello pude obtener una buena nota. ¡Lo recomiendo! ”</p>
                    </blockquote>
                    <figcaption class="mt-10">
                        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                            <div class="font-semibold text-gray-900">Gabriela Galindo</div>
                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="text-gray-600">ESTUDIANTE</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="w-full lg:w-auto flex justify-center items-center">
        <img src="/image/carousel/GG.jpeg" alt="Image 1" style="max-width: 200px; height: auto; border-radius: 50%;">
    </div>
</div>
  
  <div>
    <hr class="text-gray-100 mt-5" />
  </div>

  <div class="flex flex-col lg:flex-row justify-center items-center">
    <div class="w-full lg:w-auto flex justify-center items-center">
      <img src="/image/carousel/SS.jpeg" alt="Image 1" style="max-width: 200px; height: auto; border-radius: 50%;">
  </div>
    <div class="w-full lg:w-auto mb-8 lg:mb-0 lg:mr-8">
        <div class="card bg-white/10 duration-500 group-hover:scale-[0.85] hover:!scale-100 p-8 rounded-xl">
            <div class="mx-auto max-w-md lg:max-w-4xl">
                <img class="mx-auto h-12" src="/image/carousel/logo-enafb.png" alt="">
                <figure class="mt-10">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <p>“Si estás buscando una herramienta integral para repasar y practicar todos los temas relacionados con farmacia y bioquímica, 
                          tengo una recomendación que seguramente te será de gran utilidad: enafb.pe. Esta plataforma virtual ha sido diseñada 
                          específicamente para ayudar a los estudiantes a prepararse de manera efectiva para el Examen Nacional de Evaluación 
                          para el Acceso a la Farmacia y Bioquímica (ENAFB) en Perú.</p>
      
                          <p>En enafb.pe encontrarás una amplia variedad de recursos que te permitirán repasar 
                          los contenidos de manera organizada y esta plataforma ofrece todo lo que necesitas para estar 
                          completamente listo para enfrentar el examen oficial con confianza.”</p>
                    </blockquote>
                    <figcaption class="mt-10">
                        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                            <div class="font-semibold text-gray-900">Brigite León</div>
                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="text-gray-600">ESTUDIANTE</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>

  <div>
    <hr class="text-gray-100 mt-5" />
  </div>

  <div class="flex flex-col lg:flex-row justify-center items-center">
    <div class="w-full lg:w-auto mb-8 lg:mb-0 lg:mr-8">
        <div class="card bg-white/10 duration-500 group-hover:scale-[0.85] hover:!scale-100 p-8 rounded-xl">
            <div class="mx-auto max-w-md lg:max-w-4xl">
                <img class="mx-auto h-12" src="/image/carousel/logo-enae.png" alt="">
                <figure class="mt-10">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <p>“Enea.pe es una buena plataforma de preparación para el examen, los resultados son en línea, 
                        se puede verificar en qué área tienes que practicar y sobre todo que lo puedes pausar y volver a seguir practicando. 
                        Me ayudó mucho y pude obtener buenos resultados en el 2023.”</p>
                    </blockquote>
                    <figcaption class="mt-10">
                        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                            <div class="font-semibold text-gray-900">Katia Rubio</div>
                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="text-gray-600">ESTUDIANTE</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="w-full lg:w-auto flex justify-center items-center">
        <img src="/image/carousel/AA.jpeg" alt="Image 1" style="max-width: 200px; height: auto; border-radius: 50%;">
    </div>
</div>


<div>
  <hr class="text-gray-100 mt-5" />
</div>


</body>
@endsection
