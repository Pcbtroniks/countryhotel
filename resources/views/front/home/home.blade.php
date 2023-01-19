@extends('layout.base')

@section('page')

@include('front.home.sections.hero')

@include('front.home.sections.about')

@include('front.home.sections.rooms')

@include('front.home.sections.comments-slide')

@include('front.home.sections.services')

<section class="w-full hidden px-4">
        <iframe class="w-full" src="https://www.google.com/maps/d/embed?mid=1au3-cozD0FQQcgUY_H2Sml3jKSYjV2c&ehbc=2E312F" height="480"></iframe>
</section>

@endsection

@section('styles')

{{-- Owl Carousel --}}
<link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.theme.default.min.css') }}">


@endsection

@section('scripts')

{{-- Owl Carousel --}}
<script src="{{ asset('assets/js/libs/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('assets/owl-carousel/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){

        $('#hero-carousel').owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoWidth:true,
            responsive:{
                1200: {
                    autoWidth:false,
                }
            }

        });

        $('#comments-carousel').owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            navdots: true,
            responsive:{
                600: {
                    items: 2
                }
            }
        });

    });
</script>


{{-- Menu --}}
<script>
    const aside = document.querySelector('#aside');
    const lateralMenu = document.querySelector('#lateral-menu');
    function closeNav(){
        aside.classList.remove('w-full');
        document.body.classList.remove('overflow-hidden');
        lateralMenu.classList.remove('w-72');
        lateralMenu.classList.add('w-0');
    }
    function openNav(){
        aside.classList.add('w-full');
        document.body.classList.add('overflow-hidden');
        lateralMenu.classList.add('w-72');
        lateralMenu.classList.remove('w-0');
    
    }
</script>

@endsection