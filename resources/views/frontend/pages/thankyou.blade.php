@extends('components.layouts.web.master')
@section('main-content')
    {{-- Hero Banner Section Start --}}
    <section
        class="hero-banner flex flex-col justify-center  items-center py-15 bg-secondary lg:bg-[url(/assets/images/banners/hero.webp)]">
        <div class="container">
            <div class="row items-center justify-center">
                <div class="w-full xl:w-9/12 text-center">
                    <h1
                        class="font-bold text-[25px] xl:text-[60px] 2xl:text-[60px] 4xl:text-[82px] mb-3 leading-[1.2] text-center">

                        Thank You for Contacting (Brandname)
                    </h1>
                    <p>We have received your message, and our team will review it carefully. Expect a reply within one
                        business day. A member of our team will contact you shortly to discuss your needs. </p>
                    <div class="mt-5 lg:mt-10">
                        <a href="{{ route('home') }}" class="btn btn-primary">Go Back Home</a>
                    </div>
                </div>
            </div>

        </div>


    </section>
    {{-- Hero Banner Section End --}}
@endsection
