@extends('components.public.matrix', ['pagina' => 'Inicio'])
@section('titulo', 'Inicio')
@section('css_importados')
    <style>
        .swiper-testimonios .swiper-pagination-bullet {
            width: 14px;
            height: 8px;
            border-radius: 6px;
            background-color: #052F4E !important;
        
        }

        .swiper-testimonios .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: #05304e56!important;
            opacity: 1;
        }

        .swiper-servicios .swiper-pagination-bullet {
            width: 14px;
            height: 8px;
            border-radius: 6px;
            background-color: #052F4E !important;
        
        }

        .swiper-servicios .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: #05304e56!important;
            opacity: 1;
        }
    </style>
@stop
@section('content')
    
    <main>
        
       
        <section id="bannerprincipal">
            <div class="flex flex-col gap-10 w-full px-[5%] pt-10 md:pt-16 bg-white overflow-hidden">
                
                <div class="grid grid-cols-2 lg:grid-cols-5 gap-5 lg:gap-0">
                    <div class="col-span-2 flex flex-col justify-between pb-0 lg:pb-10">
                        <div class="flex flex-col p-2 justify-center items-start gap-8">
                            <h2 class="text-[#09262A] font-merchant_medium text-5xl xl:text-6xl 2xl:text-6xl leading-[45px] xl:leading-[55px] tracking-tighter" data-aos="fade-down">Acompañamos el bienestar emocional de tu hijo</h2>
                            
                            <h2 class="text-[#1B4146] text-base xl:text-lg 2xl:text-xl font-Montserrat_Regular" data-aos="fade-down">
                                Sabemos lo importante que es el bienestar emocional de los niños y adolescentes. Estamos aquí para escucharte y brindarte el apoyo que necesitas con empatía y profesionalismo.
                            </h2>

                            <div class="flex flex-row justify-start items-start" data-aos="fade-down">
                                <a href="#productoscarrusel" id="scrollButton" 
                                    class=" text-white py-3 px-6 bg-[#B380B5] rounded-3xl text-base 2xl:text-lg font-Montserrat_SemiBold text-center max-w-xs">
                                    Nuestros servicios
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col p-2 justify-center items-start" data-aos="fade-down">
                            <h2 class="text-[#1B4146] text-base xl:text-lg 2xl:text-2xl font-Montserrat_Bold ">
                               Dra. Adriana Pezo Geremía
                            </h2>
                            <div class="text-[#1B4146] text-sm  font-Montserrat_Regular mt-4">
                              
                                         <p>Sub especialidad</p>
                              <p class="text-[#1B4146] font-Montserrat_SemiBold  ">Médico Psiquiatra de niños y adolescentes - Hospital Edgardo Rebagliati, 2016-2018.</p>
                                   <p>Especialidad</p>
                              <p class="text-[#1B4146] font-Montserrat_SemiBold ">Médico Psiquiatra - Hospital Victor Larco Herrera, 2013-2016.</p>
                            <p>Medicina Humana</p>
                            <p class="text-[#1B4146] font-Montserrat_SemiBold  ">USMP, 2009.</p>
                       
               
                            </div>
                        </div>
                    </div>
    
                    <div class="col-span-2 flex flex-col justify-end items-center relative order-2 lg:order-1 ">
                        <div class="relative w-[700px] h-[800px] overflow-hidden" data-aos="fade-down">
    <img class="h-80 md:h-[500px] w-auto object-contain object-left absolute right-20 4xs:left-0 bottom-0" src="{{asset('images/img/texturaAP.png')}}"
        onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
    <img class="h-[600px] xl:h-[900px] w-full object-contain xl:right-28 xl:-top-16  relative z-10" src="{{asset('images/img/Dra.png')}}"
        onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
</div>
                    </div>
    
                    <div class="col-span-2 lg:col-span-1 flex flex-col sm:flex-row gap-5 sm:gap-10 lg:flex-col justify-around items-start lg:items-end order-1 lg:order-2">
                        
                        <div class="grid grid-cols-1 gap-2 xl:gap-4 z-20 min-w-[320px] xl:w-[340px] 2xl:w-[400px] 3xl:w-[450px] max-w-[600px] animate-jump-out animate-once animate-duration-[2000ms] animate-reverse">
                            <div id="form-1" class="bg-[#F2F5FC] p-6 2xl:p-8 rounded-3xl flex flex-col gap-4">
                                <h2 class="text-[#1B4146] text-base sm:text-lg 2xl:text-xl font-Montserrat_SemiBold">
                                    Solicita información ahora vía WhatsApp
                                </h2>
                                <form class="space-y-2 4xs:space-y-4 2xl:space-y-4" id="dataWhatsapp">
                                  @csrf
                                  <input type="text" name="full_name" placeholder="Nombre Completo" 
                                      class="border-green-500 border-0  focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                      placeholder:text-[#AAC3E6] text-[#97adcb] font-Montserrat_Regular w-full py-3 px-2 rounded-3xl text-base 2xl:text-xl  placeholder-opacity-25 font-light  bg-white">
                        
                                  <input type="email" name="email" 
                                      placeholder="Correo Electrónico"
                                      class="border-green-500 border-0 focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                      placeholder:text-[#AAC3E6] text-[#97adcb] font-Montserrat_Regular w-full py-3 px-2 rounded-3xl text-base 2xl:text-xl  placeholder-opacity-25 font-light  bg-white">
                        
                                  <input type="text" name="phone" placeholder="Teléfono"
                                      class="border-green-500 border-0 focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                      placeholder:text-[#AAC3E6] text-[#97adcb] font-Montserrat_Regular w-full py-3 px-2 rounded-3xl text-base 2xl:text-xl  placeholder-opacity-25 font-light  bg-white">
                                  
                                  <input type="hidden" name="client_width" id="anchodispositivo">
                                  <input type="hidden" name="client_height" id="largodispositivo">
                                  <input type="hidden" name="client_latitude" id="latitud">
                                  <input type="hidden" name="client_longitude" id="longitud">
                                  <input type="hidden" name="client_system" id="sistema">
                                  <input type="hidden" id="tipo" placeholder="tipo" name="source" value="WSP - Landing" />
                                     
                        
                                  <button type="submit"
                                      class="font-Montserrat_Medium text-white py-3 px-2 bg-[#1E7B82] justify-center items-center rounded-3xl inline-flex text-base 2xl:text-xl w-full">
                                      <span>Hablar con la Dra. Adriana Pezo</span>
                                  </button>
                                </form>
                                
                            </div> 

                              <div class="flex flex-col p-2 justify-center items-end mt-8" data-aos="fade-down">
                            <h2 class="text-[#1B4146] text-base xl:text-lg font-bold 2xl:text-xl font-Montserrat_Regular">
                                Haz tu consulta
                            </h2>
                            <p class="text-[#1B4146] text-base xl:text-lg 2xl:text-3xl font-Montserrat_Bold">
                                (+51) 945 064 691
                            </p>
                        </div>
                        </div>

                        

                    </div>
                </div>

            </div>
        </section>

        <section  class="w-full items-start px-[5%] py-8 bg-[#6486CD] text-[#252222] bg-cover bg-center" style="background-image: url({{ asset('images/img/textura_beneficios.png') }})">
            <div class="grid grid-cols-1" data-aos="fade-down">
                <div>
                    <div class="swiper beneficios">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide">
                                <div class="flex flex-col gap-4 items-start min-w-[240px]">
                                    <div class="bg-white rounded-full w-14 h-14 flex flex-row justify-center items-center">
                                        <img  class="object-contain w-8" loading="lazy" src="{{asset('images/svg/personas.svg')}}" onerror="this.onerror=null;this.src='{{ asset('images/imagen/noimagen.jpg') }}';"/>
                                    </div>
                                    <div class="flex flex-col text-white">
                                        <h2 class="text-lg xl:text-xl font-Montserrat_SemiBold !leading-none max-w-xs">Atención personalizada y cercana</h2>
                                        <p class="mt-2 text-base font-Montserrat_Regular leading-5">
                                            Evaluación y tratamiento adaptado a cada niño y adolescente.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col gap-4 items-start min-w-[240px]">
                                    <div class="bg-white rounded-full w-14 h-14 flex flex-row justify-center items-center">
                                        <img  class="object-contain w-8" loading="lazy" src="{{asset('images/svg/manos.svg')}}" onerror="this.onerror=null;this.src='{{ asset('images/imagen/noimagen.jpg') }}';"/>
                                    </div>
                                    <div class="flex flex-col text-white">
                                        <h2 class="text-lg xl:text-xl font-Montserrat_SemiBold !leading-none max-w-xs">Atención personalizada y cercana</h2>
                                        <p class="mt-2 text-base font-Montserrat_Regular leading-5">
                                            Acompañamiento profesional para fortalecer su bienestar mental.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col gap-4 items-start min-w-[240px]">
                                    <div class="bg-white rounded-full w-14 h-14 flex flex-row justify-center items-center">
                                        <img  class="object-contain w-8" loading="lazy" src="{{asset('images/svg/quiz.svg')}}" onerror="this.onerror=null;this.src='{{ asset('images/imagen/noimagen.jpg') }}';"/>
                                    </div>
                                    <div class="flex flex-col text-white">
                                        <h2 class="text-lg xl:text-xl font-Montserrat_SemiBold !leading-none max-w-xs">Atención personalizada y cercana</h2>
                                        <p class="mt-2 text-base font-Montserrat_Regular leading-5">
                                            Métodos actualizados en psiquiatría infantil y adolescente.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-[5%] py-10 lg:py-20 bg-white" id="productoscarrusel">
            <div class="flex flex-col gap-8 md:gap-12" >
                
                <div data-aos="fade-down" class='flex flex-col lg:flex-row lg:justify-between items-start justify-center gap-5'>
                  <div class='flex flex-col gap-3 max-w-lg'>
                      <h1 class="tracking-tighter text-4xl 2xl:text-5xl font-Montserrat_Bold font-bold text-[#09262A] leading-none">
                        Nuestros servicios
                      </h1>
                      
                      {{-- <p class="text-base font-Montserrat_Regular tracking-normal text-[#1B4146]">
                        Praesent in commodo lectus, vitae dictum nulla. Sed nec finibus quam. Integer ultricies dolor ut magna.
                      </p> --}}
                  </div>
                  <div class="flex flex-col">
                    <div class="bg-[#F2F5FC] flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-3 p-6 rounded-3xl items-center">
                      <p class="text-[#506DC0] text-base lg:text-lg font-Montserrat_SemiBold max-w-[300px]">
                        Si crees que necesita apoyo,
                        estoy aquí para ayudarte
                      </p>
                      <a target="_blank"  href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}"
                        class="w-auto bg-[#6486CD] px-6 py-4 rounded-3xl text-white font-Montserrat_Medium">
                        Hablar con un experto
                      </a>
                      
                    </div>
                  </div>
                </div>

                <div  class="grilla grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-y-5 gap-x-8 hidden sm:grid">
                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_1.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Autismo (TEA)</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_2.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">TDAH (trastorno por déficit de atención e hiperactividad)</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_3.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Impulsividad, agresividad en niños y adolescentes</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_4.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos de conducta en la infancia y la adolescencia</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_5.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos del estado de ánimo en la infancia y la adolescencia</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_6.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos de ansiedad</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_7.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Transtornos obsesivo compulsivo</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_8.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos de la conducta alimentaria: anorexia, bulimia</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_9.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Transtornos relacionados con traumas y factores de estrés</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_10.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos del sueño-vigilia</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_11.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Depresión en niños y adolescentes</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>

                    <div data-aos="fade-down" class="servicio flex flex-col group relative">
                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_12.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                            <div class="flex flex-row w-full justify-center items-center">
                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos del aprendizaje</h2>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                Agendar cita
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex sm:hidden">
                    <div class="w-full" data-aos="fade-down">
                        <div class="swiper servicios">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_1.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Autismo (TEA)</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_2.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">TDAH (trastorno por déficit de atención e hiperactividad)</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_3.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Impulsividad, agresividad en niños y adolescentes</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_4.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos de conducta en la infancia y la adolescencia</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_5.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos del estado de ánimo en la infancia y la adolescencia</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_6.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos de ansiedad</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_7.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Transtornos obsesivo compulsivo</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_8.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos de la conducta alimentaria: anorexia, bulimia</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_9.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Transtornos relacionados con traumas y factores de estrés</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_10.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos del sueño-vigilia</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_11.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Depresión en niños y adolescentes</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="servicio flex flex-col group relative">
                                        <div class="bg-[#F2F5F7] rounded-2xl flex flex-row">
                                            <div class="max-w-full flex flex-col items-center justify-center w-full">
                                                <img class="w-full h-full object-contain object-bottom "  src="{{ asset('images/img/servicio_12.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                            <div class="flex flex-row w-full justify-center items-center">
                                                <h2 class="font-Montserrat_SemiBold text-center text-[#09262A] leading-none text-base xl:text-lg 2xl:text-xl nombreServicio">Trastornos del aprendizaje</h2>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                            <a target="_blank" class="text-white cursor-pointer text-sm md:text-base py-2 px-6 w-full max-w-[200px] bg-[#1E7B82] rounded-2xl font-Montserrat_Medium text-center">
                                                Agendar cita
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row justify-start ml-10">
                                <div class="swiper-servicios !flex justify-center py-3 mt-3 "></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        
        @if ($testimonie->count() > 0)
            <section class="bg-center bg-cover" style="background-image: url({{ asset('images/img/textura_testimonios.png') }})">
                <div data-aos="fade-down" class="grid grid-cols-1 md:grid-cols-2 w-full gap-12 px-[5%]">
        
                <div class="flex flex-col justify-end items-center px-0 lg:px-[5%] order-2 md:order-1">
                    <div class="w-full max-h-[560px] 2xl:max-h-[1000px] flex flex-col justify-end -mt-20  2xl:mt-0">
                        <img class="w-full h-full object-contain object-bottom"  src="{{ asset('images/img/testimonios_AP.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                    </div>
                </div>
        
                <div class="flex flex-col justify-center gap-5 text-textWhite lg:pr-[5%] py-10 xl:py-12 order-1 md:order-2">
                    <h1 class="tracking-tighter text-2xl  lg:text-4xl 2xl:text-5xl font-Montserrat_Bold font-bold text-[#09262A] leading-none">
                        Lo que dicen las familias
                    </h1>
                    <div class="w-full">
                        <div class="swiper testimonios">
                            <div class="swiper-wrapper">
                                @foreach ($testimonie as $testimony)
                                    <div class="swiper-slide">
                                        <div class="bg-[#FFFFFF] relative p-5 lg:p-8 gap-3 flex flex-col rounded-xl h-auto">
                                            <div>
                                                <p class="text-[#1B4146] text-base lg:text-[17px] 2xl:text-xl font-Montserrat_Regular">
                                                    {{$testimony->testimonie}}
                                                </p>
                                            </div>
                                            <div class="flex flex-row gap-3 items-center">
                                                <img class="w-12 h-12 rounded-full object-contain"  src="{{ asset($testimony->ocupation)}}" />
                                                <div class="flex flex-col gap-0">
                                                    <h3 class="text-[#09262A] font-Montserrat_SemiBold leading-none">{{$testimony->name}}</h3>
                                                    <span class="text-[#1B4146] text-sm font-Montserrat_Regular leading-none">{{$testimony->email}}</span>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="flex flex-row justify-start ml-10">
                                <div class="swiper-testimonios !flex justify-center py-3 mt-3 "></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col p-2 justify-center items-end">
                        <h2 class="text-[#1B4146] text-base xl:text-lg 2xl:text-xl font-Montserrat_Regular">
                            Haz tu consulta
                        </h2>
                        <p class="text-[#1B4146] text-base xl:text-lg 2xl:text-xl font-Montserrat_Bold">
                            (+51) 945 064 691
                        </p>
                    </div>
                </div>

                </div>
            </section>    
        @endif    

    </main>


@section('scripts_importados')
    <script>
        const servicios = document.querySelectorAll('.grilla .servicio');

        // Añade event listeners para el hover
        servicios.forEach(servicio => {
            servicio.addEventListener('mouseenter', () => {
                servicio.style.transform = 'scale(1.05)'; // Aplica el zoom
                servicio.style.transition = 'transform 0.3s ease'; // Suaviza la transición
            });

            servicio.addEventListener('mouseleave', () => {
                servicio.style.transform = 'scale(1)'; // Vuelve al tamaño original
            });
        });
    </script>

    <script>
        document.getElementById('scrollButton').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#productoscarrusel', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('irawsp').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#bannerprincipal', 800); // 800ms de duración del desplazamiento
        });

        // Función para desplazamiento suave
        function smoothScroll(target, duration) {
            const targetElement = document.querySelector(target);
            const targetPosition = targetElement.getBoundingClientRect().top;
            const startPosition = window.pageYOffset;
            let startTime = null;

            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const run = easeInOutQuad(timeElapsed, startPosition, targetPosition, duration);
                window.scrollTo(0, run);
                if (timeElapsed < duration) requestAnimationFrame(animation);
            }

            // Función de easing para suavizar el desplazamiento
            function easeInOutQuad(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            }

            requestAnimationFrame(animation);
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    
        const whatsappNumber = {{ $general[0]->whatsapp }};
        const servicios = document.querySelectorAll(".servicio");
   
                servicios.forEach((servicio) => {
                    
                    const nombreServicio = servicio.querySelector(".nombreServicio").textContent;
                    const mensaje = encodeURIComponent(`Estoy interesad@ en el servicio de tratamiento: *${nombreServicio}*`);
                    const whatsappLink = `https://wa.me/${whatsappNumber}?text=${mensaje}`;
                    const botonAgendar = servicio.querySelector("a");
                    botonAgendar.setAttribute("href", whatsappLink);
                });
        });
    </script>

    <script>   
        $('#modalformcotizar').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();

            if (!validarTelefono($('#phone').val())) {
                return;
            };

            Swal.fire({

                title: 'Procesando información',
                html: `Enviando...
                    <p class=" text-text12">Revise su correo de Span</p>
                            <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
                                <div role="status">
                                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                    </svg>
                                    
                                </div>
                                
                            </div>

            `,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

           
            $.ajax({
                url: '{{ route('cotizar') }}',
                method: 'POST',
                data: formDataArray,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').val() // Incluye el token CSRF
                },
                success: function(response) {
                
                    Swal.close();

                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });

                    $('#modalformcotizar')[0].reset();
                },
                error: function(error) {
                    Swal.close();
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key];
                            Swal.fire({
                                title: error.message,
                                text: "Ha ocurrido un error",
                                icon: "warning",
                            });
                            flag = true; 
                        }
                    });
                }
            });
        })
    </script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.btn-cotizar', function () {
                const id = $(this).data('id');

                $.ajax({
                    url: '{{ route('obtenerdata') }}',
                    method: 'POST',
                    data: {
                        id: id, 
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        $('#nombreplan').text(response.producto.producto);
                        $('#caracteristicas').text(response.producto.extract);
                        $('#name').val(response.producto.producto);
                        $('#extract').val(response.producto.extract);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });


                $(`#modalcotizar`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });

            $(document).on('click', '.botoncanales', function () {
                const id = $(this).data('id');
                $(`#modaldetalleplan-${id}`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.swiper-slide .flex');
            const mainImage = document.getElementById('imagen-zona');

            items.forEach(item => {
                item.addEventListener('click', function () {
                    const newImageSrc = this.getAttribute('data-image');
                    
                    // Aplicar efecto fade-out
                    mainImage.style.opacity = 0;

                    // Cambiar la imagen después del fade-out
                    setTimeout(() => {
                        mainImage.src = newImageSrc;

                        // Aplicar efecto fade-in
                        mainImage.style.opacity = 1;
                    }, 300); // Coincide con la duración de la transición CSS
                });
            });
        });

        var swiper = new Swiper(".slider", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
            },
            pagination: {
                el: ".slider-pagination",
                clickable: true,
            },
        });



        var swiper = new Swiper(".ofertas", {
            slidesPerView: 2.2,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 1.2,

                  
                },
                850: {
                    slidesPerView: 1.3,

                  
                },
                920: {
                    slidesPerView: 1.4,

                  
                },
                1024: {
                    slidesPerView: 1.6,
                  
                },
                1280: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1300: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1500: {
                    slidesPerView: 2.4,
                    spaceBetween: 20,
                  
                },
                1600: {
                    slidesPerView: 2.9,
                    spaceBetween: 20,
                  
                },
            },
        });

        var swiper = new Swiper(".servicios", {
            slidesPerView: 1,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
            },
            pagination: {
                    el: ".swiper-servicios",
                    clickable: true,
                    dynamicBullets: true,
            },
        });

        var swiper = new Swiper(".lugares", {
            slidesPerView: 3,
            direction: 'vertical',
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
        });

        var swiper = new Swiper(".slider_blog", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            grabCursor: true,
            loop: true,
             autoplay: {
                delay: 2500, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                750: {
                    slidesPerView: 2,
                   
                },
                1250: {
                    slidesPerView: 3,
                   
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });

        var swiper = new Swiper(".categorias", {
            slidesPerView: 4,
            spaceBetween: 15,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 2,
                  
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1500: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });


        var swiper = new Swiper(".beneficios", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2000, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                600: {
                    slidesPerView: 2,
                   
                },
                950: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
                1600: {
                    slidesPerView: 4,
                    spaceBetween: 60,
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });


        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 15,
            loop: true,
            centeredSlides: false,
            pagination: {
                    el: ".swiper-testimonios",
                    clickable: true,
                    dynamicBullets: true,
            },
        });
    </script>

    <script>
        // Obtener información del navegador y del sistema operativo
        const platform = navigator.platform;
        document.getElementById('sistema').value = platform;

        // Obtener la geolocalización del usuario (si se permite)
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById('latitud').value = position.coords.latitude;
                document.getElementById('longitud').value = position.coords.longitude;
            });
        }

        // Obtener la página de referencia
        const referrer = document.referrer;
        document.getElementById('llegade').value = referrer;


        // Obtener la resolución de la pantalla
        const screenWidth = window.screen.width;
        const screenHeight = window.screen.height;
        document.getElementById('anchodispositivo').value = screenWidth;
        document.getElementById('largodispositivo').value = screenHeight;
    </script>
@stop

@stop
