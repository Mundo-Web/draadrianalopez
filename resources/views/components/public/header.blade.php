<header id="main-header" class="sticky top-0 w-full z-40 bg-colorBackgroundHeader">

    <div class="left-0 right-0">
        {{-- Navbar --}}
        <div class="flex justify-between w-full px-[5%]">
            <nav class="flex h-[80px] 2xl:h-[90px] items-center justify-between gap-10 w-full">
                <div class="flex justify-center items-center z-40 mx-auto">
                    <a href="{{ url('/') }}">
                        <img
                            src="{{ asset('images/svg/logoadrianafinal.svg') }}"
                            alt="Adriana Pezo"
                            class="max-w-80 w-full 2xl:max-w-96 2xl:w-[400px]"
                        />
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <div class="flex justify-end w-full mx-auto z-[100] relative">
      <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
        <a target="_blank" id="whatsapp-toggle" 
          href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}"
          >
          <img src="{{ asset('images/svg/wsp.svg') }}" alt="whatsapp" class="mr-3 w-16 h-16 md:w-[85px] md:h-[85px]">
        </a>
      </div>
    </div>
  
  {{-- <div class="flex justify-end w-11/12 mx-auto z-[100] relative">
    <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
      <a target="_blank" id="whatsapp-toggle" 
        href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}"
         >
        <img src="{{ asset('images/svg/image_31.svg') }}" alt="whatsapp" class="w-16 h-16 md:w-24 md:h-24">
      </a>
    </div>
  </div>

  <div class="fixed bottom-24 right-6 lg:bottom-40 z-[99] shadow-xl hidden animate-once animate-duration-1000" id="whatsapp-chat">
    <div class="w-72 h-auto rounded-xl">
      <div class="bg-green-500 font-mediumDisplay font-normal text-white text-center py-3 rounded-t-xl"> Whatsapp Chat </div>
      
      <div id="asesor-1" class="bg-white shadow-xl hover:bg-slate-100 cursor-pointer"  onclick="showForm('form-1')">
          <div class="flex flex-row p-3 activa">
              <div class="flex flex-col justify-center items-center"><img class="w-10" src="{{asset('images/img/asistente.png')}}"/></div>
              <div class="px-2">
                <a>
                  <p class="text-slate-400 font-roboto text-text14 ">Ventas de Productos Químicos</p>
                  <h3 class="text-slate-700 font-roboto text-text16 font-semibold">{{$general[0]->support_one}}</h3>
                  <div class="flex flex-row items-center "><p class="text-slate-400 font-roboto text-text12">En Línea </p><div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div></div>
                </a>
              </div>
          </div>
      </div>
      
      <div id="asesor-2" class="bg-white shadow-xl rounded-b-xl hover:bg-slate-100 cursor-pointer"  onclick="showForm('form-2')">
        <div class="flex flex-row p-3">
            <div class="flex flex-col justify-center items-center"><img class="w-10" src="{{asset('images/img/asistente.png')}}"/>
            </div>
            <div class="px-2">
                <a >
                  <p class="text-slate-400 font-roboto text-text14 ">Ventas de Tratamiento de Agua</p>
                  <h3 class="text-slate-700 font-roboto text-text16 font-semibold ">{{$general[0]->support_two }}</h3>
                  <div class="flex flex-row items-center "><p class="text-slate-400 font-roboto text-text12">En Línea </p><div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div></div>
                </a>
            </div>
        </div>
      </div>

      <div id="form-1" class="bg-white p-4 hidden">
        <form class="space-y-2" id="dataWhatsapp">
          @csrf
          <input type="text" name="full_name" placeholder="Nombre Completo" 
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="email" name="email" 
              placeholder="Correo Electrónico"
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                  text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="text" name="phone" placeholder="Teléfono"
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                    text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">
          <input type="hidden" name="client_width" id="anchodispositivo">
          <input type="hidden" name="client_height" id="largodispositivo">
          <input type="hidden" name="client_latitude" id="latitud">
          <input type="hidden" name="client_longitude" id="longitud">
          <input type="hidden" name="client_system" id="sistema">
          <input type="hidden" id="tipo" placeholder="tipo" name="source" value="WSP - Productos Químicos" />
             

          <button type="submit"
              class="font-outfitRegular font-semibold text-white py-2 px-2 bg-green-500 justify-center items-center rounded-xl inline-flex text-text16 w-full">
              <span>Enviar</span>
          </button>
        </form>
        <button onclick="hideForm('form-1')" class="mt-2 text-red-500 font-regularDisplay font-semibold">Cerrar</button>
      </div>
     
      <div id="form-2" class="bg-white p-4 hidden">
        <form class="space-y-2" id="dataWhatsapp2">
          @csrf
          <input type="text" name="full_name" placeholder="Nombre Completo" required
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="email" name="email" id="email_wsp"
              placeholder="Correo Electrónico" required
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                  text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="text" name="phone" id="telefono_wsp" placeholder="Teléfono"
              required
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                    text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">
            <input type="hidden" name="client_width" id="anchodispositivo">
            <input type="hidden" name="client_height" id="largodispositivo">
            <input type="hidden" name="client_latitude" id="latitud">
            <input type="hidden" name="client_longitude" id="longitud">
            <input type="hidden" name="client_system" id="sistema">
            <input type="hidden" id="tipo" placeholder="tipo" name="source" value="WSP - Tratamiento de Agua" />

            <button type="submit"
              class="font-outfitRegular font-semibold text-white py-2 px-2 bg-green-500 justify-center items-center rounded-xl inline-flex text-text16 w-full">
              <span>Enviar</span>
          </button>
        </form>
        <button onclick="hideForm('form-2')" class="mt-2 text-red-500 font-regularDisplay font-semibold">Cerrar</button>
      </div>
    </div>
  </div> --}}

</header>


<script>
  function showForm(formId) {
    // Oculta todos los formularios
    document.getElementById('form-1').classList.add('hidden');
    document.getElementById('form-2').classList.add('hidden');
    document.getElementById('asesor-1').classList.add('hidden');
    document.getElementById('asesor-2').classList.add('hidden');
    // Muestra el formulario correspondiente
    document.getElementById(formId).classList.remove('hidden');
    }

    function hideForm(formId) {
        document.getElementById(formId).classList.add('hidden');
        document.getElementById('asesor-1').classList.remove('hidden');
    document.getElementById('asesor-2').classList.remove('hidden');
    }

  const menu = document.querySelector(".menu");
  const body = document.body;
  menu.addEventListener("click", (e) => {
    body.classList.toggle("overflow-hidden");
  });
</script>

<script>
  document.getElementById('whatsapp-toggle').addEventListener('click', function() {
      var chatBox = document.getElementById('whatsapp-chat');
      if (chatBox.classList.contains('hidden')) {
          chatBox.classList.remove('hidden');
          chatBox.classList.add('animate-fade-up');
      } else {
          chatBox.classList.add('hidden');
          chatBox.classList.remove('animate-fade-up');
      }
  });
</script>

<script>
  
  $(document).ready(function() {
    $('#buscarproducto').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados').html(resultsHtml);
          }
        });
      } else {
        $('#resultados').empty();
      }
    });
  });


  $(document).ready(function() {
    $('#buscarproducto2').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados2').html(resultsHtml);
          }
        });
      } else {
        $('#resultados2').empty();
      }
    });
  });
</script>

<script>
    document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto2');
      var resultados = document.getElementById('resultados2');

      if (input && resultados) { // Verificar que ambos elementos existen
          var isClickInsideInput = input.contains(event.target);
          var isClickInsideResultados = resultados.contains(event.target);

          if (!isClickInsideInput && !isClickInsideResultados) {
              input.value = '';
              $('#resultados2').empty();
          }
      }
  });

  document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto2');
      var resultados = document.getElementById('resultados2');

      // Verificar que los elementos existen
      if (input && resultados) {
          var isClickInsideInput = input.contains(event.target);
          var isClickInsideResultados = resultados.contains(event.target);

          if (!isClickInsideInput && !isClickInsideResultados) {
              input.value = '';
              $('#resultados2').empty();
          }
      }
  });
</script>
