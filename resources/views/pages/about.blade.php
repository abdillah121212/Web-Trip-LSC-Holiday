@extends('layouts.app')
{{-- @include('sections.hero') --}}
@section('content')
    <!-- HERO HEADER -->
    <section class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/bg_9.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true"">
                <div class="col-md-7 ftco-animate">
                    <h1 class="mb-2  bread">tentang kami</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>About</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT CONTENT -->
    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">

                <!-- IMAGE -->
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="img d-flex w-100 align-items-center justify-content-center"
                        style="background-image:url('{{ asset('images/photo 6.png') }}');">
                    </div>
                </div>

                <!-- TEXT -->
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="heading-section ftco-animate">

                        <span class="subheading">Tentang LSC Holiday</span>
                        <h2 class="mb-4">Bukan Sekadar Trip, Tetapi Sebuah Pengalaman Hidup</h2>

                        <p>
                            Dengan pengalaman dalam mengelola perjalanan wisata alam, LSC Holiday berkomitmen menghadirkan
                            layanan terbaik mulai dari perencanaan hingga perjalanan selesai.
                        </p>

                        <p>
                            Fokus kami adalah menciptakan perjalanan yang aman, nyaman, dan penuh cerita berharga untuk
                            setiap peserta.
                        </p>

                        <p>
                            Kami percaya bahwa perjalanan bukan hanya tentang destinasi, tetapi tentang pengalaman
                            yang
                            dibawa pulang.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- VALUE / KEUNGGULAN -->
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Kenapa Memilih Kami</h2>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 text-center ftco-animate">
                    <h4>Tim Profesional</h4>
                    <p>Dipandu oleh tim berpengalaman dan profesional.</p>
                </div>

                <div class="col-md-4 text-center ftco-animate">
                    <h4>Aman & Nyaman</h4>
                    <p>Keamanan dan kenyamanan adalah prioritas utama kami.</p>
                </div>

                <div class="col-md-4 text-center ftco-animate">
                    <h4>Pengalaman Trip Terbaik</h4>
                    <p>Pengalaman trip yang berkesan dan tak terlupakan.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="ftco-section text-center">
        <div class="container">
            <h2>Siap untuk Menjelajahi Ranukumbolo?</h2>
            <a href="/contact" class="btn btn-primary mt-3">Kontak Kami</a>
        </div>
    </section>
@endsection
