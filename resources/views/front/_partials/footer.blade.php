<footer>

    <div class="bg-main relative py-20 px-4 flex md:flex-row md:px-6 sm:justify-center flex-col items-center gap-24">

        <div>
            <img src="{{ asset('assets/log-alt.png') }}" alt="Logo Country Hotel">
        </div>

        <div class="sm:order-3">
            <ul class="grid grid-cols-2 gap-7">
                <li><a target="_blank" href="tel:3338230492"><img src="{{ asset('assets/icons/socials/WhatsApp Inc.svg') }}" alt="WhatsApp"></a></li>
                <li><a target="_blank" href="https://www.facebook.com/CountryHotelSuites/"><img src="{{ asset('assets/icons/socials/Facebook.svg') }}" alt="Facebook"></a></li>
                <li class="col-span-2 mx-auto"><a target="_blank" href="https://www.instagram.com/countryhotelsuites/"><img src="{{ asset('assets/icons/socials/Instagram.svg') }}" alt="Instagram"></a></li>
            </ul>
        </div>

        <div class="sm:w-[335px] px-3 text-white">
            <h4>Información de contacto</h4>

            <div class="space-y"></div>

            <div class="flex flex-col gap-16 text-left font-bold">
                <a class="flex gap-2" href="tel:+523338230463">
                    <img src="{{ asset('assets/icons/call-outline.svg') }}" alt="Location Icon">
                    <span>+52 33 3823 0463</span>
                </a>
                <a class="flex gap-2" href="#">
                    <img src="{{ asset('assets/icons/location-outline.svg') }}" alt="Location Icon">
                    <span>
                        Av. Circ. Jorge Álvarez del Castillo No 1482
                        Col. Chapultepec Country C.P. 44620
                    </span>
                </a>
            </div>
        </div>

    </div>

    <div class="bg-main-dark p-4">

        <ul class="text-gray font-bold flex flex-wrap gap-2 justify-center">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Instalaciones</a></li>
            <li><a href="#">Habitaciones</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>

    </div>

</footer>