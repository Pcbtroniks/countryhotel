<main>
    <div class="w-full bg-main-light px-4 xl:px-32">
        
        <div class="space-y"></div>
        
        <div class="max-w-max">
            <h2 class="pr-10 text-2xl font-bold">Habitaciones del Hotel y Servicios.</h2>

            <div class="my-5 border-b-2 border-main"></div>
        </div>

        <div class="space-y"></div>

        {{-- Rooms --}}
        <div class="grid md:max-w-[1250px] mx-auto gap-5 grid-cols-2 md:grid-cols-6 md:place-items-center">

            {{-- Room Card --}}
            <div class="shadow-card card md:col-span-3">

                <div class="w-full h-[230px] overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/sencilla.png')}}" alt="Habitación sencilla">
                </div>

                <div class="p-6 pb-4 ">

                    <h3 class="font-bold mb-3 text-xl">
                        Habitación Estandar
                    </h3>

                    <p class="text-sm leading-6">
                        Déjanos consentirte con esta confortable habitación que cuenta con cama King Size. Nuestra habitación Estándar es ideal para viajes de placer o de negocios. Todas nuestras habitaciones cuentan con internet ...
                    </p>

                    <ul class="flex mt-3 gap-4">
                        <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                    </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <a target="_blank" href="{{ route('redirectBooking') }}">
                            <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                        </a>
                    </div>

                </div>

            </div>

            {{-- Room Card --}}
            <div class="card shadow-card md:col-span-3">

                <div class="w-full h-[230px] overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/doble.png')}}" alt="Habitación sencilla">
                </div>

                <div class="p-6 pb-4 ">

                    <h3 class="font-bold mb-3 text-xl">
                        Habitación Doble
                    </h3>

                    <p class="text-sm leading-6">
                        La elección perfecta para brindar alojamiento a familias o grupos de amigos, ésta habitación está equipada con dos camas Queen Size. Aquí podrás pasar una noche cómoda y en armonía.
                    </p>

                    <ul class="flex mt-3 gap-4">
                        <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                    </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <a target="_blank" href="{{ route('redirectBooking') }}">
                            <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                        </a>
                    </div>

                </div>

            </div>

            {{-- Room Card --}}
            <div class="shadow-card md:col-span-3 md:hidden">

                <div class="w-full h-[230px] overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/suite.png')}}" alt="Habitación sencilla">
                </div>

                <div class="p-6 pb-4">

                    <h3 class="font-bold mb-3 text-xl">
                        Suite
                    </h3>

                    <p class="text-sm leading-6">
                        En esta habitación tendrás el descanso que te mereces, nuestra Suite ofrece lujo, confort y una increíble vista panorámica. Es una habitación de 50m² con una cama ...
                    </p>

                    <ul class="flex mt-3 gap-4">
                        <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                    </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <a target="_blank" href="{{ route('redirectBooking') }}">
                            <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                        </a>
                    </div>

                </div>

            </div>

            {{-- Room Mega Card --}}
            <div class="shadow-card md:col-span-6 hidden md:block w-full md:max-w-[312.5rem] group">

                <div class="w-full h-[530px] relative overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition duration-300" src="{{asset('assets/img/rooms/suite.png')}}" alt="Habitación sencilla">

                    <div class="text-white flex flex-col justify-center px-10 bg-secondary/40 group-hover:bg-secondary/60 h-full absolute top-0 left-0 right-1/2 bottom-full transition duration-300">

                        <h3 class="font-bold mb-3 text-xl">
                            Suite
                        </h3>

                        <p class="text-xs leading-5 text-white font-bold">
                            En esta habitación tendrás el descanso que te mereces, nuestra Suite ofrece lujo, confort y una increíble vista panorámica. Es una habitación de 50m² con una cama King Size y una relajante tina de baño.
Todas nuestras habitaciones cuentan con internet inalámbrico, aire acondicionado y calefacción, escritorio de trabajo, sistema de cable, kit de planchado y secadora de cabello
                        </p>

                        <ul class="flex mt-3 gap-4">
                            <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                        </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <a target="_blank" href="{{ route('redirectBooking') }}">
                            <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                        </a>
                    </div>

                    </div>
                </div>

            </div>

        </div>


        <div class="space-y"></div>
        <div class="space-y-sm"></div>
    </div>
</main>