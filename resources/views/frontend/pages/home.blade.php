@extends('components.layouts.web.master')
@section('main-content')
    {{-- Hero Banner --}}
    <section class="hero-banner lg:bg-[url(/assets/images/banners/home-banner.webp)] pt-[136px] 4xl:pt-[166px] pb-0">
        <div class="container">
            <div class="row items-center justify-between lg:flex-row">
                <div class="w-full text-center lg:text-left lg:w-1/2 4xl:w-[720px]">
                    <h1 class="mt-4 font-bold text-[29px] lg:text-[38px] leading-[1.1] 4xl:mt-[18px] 2xl:text-[50px]">
                        Author Success Partner
                    </h1>
                    <p class="mt-5 max-w-[618px] text-sm 4xl:mt-6 4xl:text-[18px] mx-auto lg:mx-0">
                        At (brandname), we handle editing, formatting, cover design, publishing, marketing, audiobooks, and
                        author websites, so you can focus on writing.
                    </p>
                    <div
                        class="mt-8 flex w-full flex-col gap-3 sm:flex-row sm:items-center justify-center lg:justify-start 4xl:mt-[62px] 4xl:gap-[14px]">
                        <x-banner-btn text="Get A Free Consultation" arrow />

                        <x-banner-btn type="button"
                            btn-class="btn btn-primary text-primary bg-light border-[#D4D2CC] shadow-none hover:bg-brown hover:text-light"
                            text="Explore Our Services" function="openChatWidget()" />
                    </div>
                </div>
                <div class="hidden lg:flex lg:w-1/2 lg:justify-end 4xl:w-[741px]">
                    <div class="flex w-full max-w-[741px] flex-col">
                        {{-- Books image --}}
                        <img fetchpriority="high" src="{{ asset('assets/images/banners/home-hero.webp') }}"
                            class="mx-auto h-auto w-[30vw] 4xl:w-[674px]" alt="hero banner" width="674" height="685" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Banner End --}}
@endsection
