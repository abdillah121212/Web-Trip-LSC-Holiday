@extends('layouts.app')
{{-- @include('sections.hero') --}}
@section('content')
            <!-- HERO HEADER -->
            <section class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/bg_7.jpg') }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true"">
                       
                      <div class="col-md-7 ftco-animate">
                            <h1 class="mb-2  bread">About Us</h1>
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
                                style="background-image:url('{{ asset('images/about-1.jpg') }}');">
                            </div>
                        </div>

                        <!-- TEXT -->
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="heading-section ftco-animate">

                                <span class="subheading">About LSC Holiday</span>
                                <h2 class="mb-4">Your Trusted Travel Partner</h2>

                                <p>
                                    LSC Holiday adalah penyedia layanan trip wisata alam yang berfokus pada pengalaman
                                    terbaik
                                    di
                                    Ranukumbolo.
                                    Kami hadir untuk memberikan perjalanan yang aman, nyaman, dan penuh kesan bagi setiap
                                    pelanggan.
                                </p>

                                <p>
                                    Dengan pengalaman dalam mengelola trip dan tim profesional, kami memastikan setiap
                                    perjalanan
                                    berjalan lancar
                                    dan memberikan pengalaman tak terlupakan.
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
                            <h2 class="mb-4">Why Choose Us</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4 text-center ftco-animate">
                            <h4>Professional Team</h4>
                            <p>Dipandu oleh tim berpengalaman dan profesional.</p>
                        </div>

                        <div class="col-md-4 text-center ftco-animate">
                            <h4>Safe & Comfortable</h4>
                            <p>Keamanan dan kenyamanan adalah prioritas utama kami.</p>
                        </div>

                        <div class="col-md-4 text-center ftco-animate">
                            <h4>Best Experience</h4>
                            <p>Pengalaman trip yang berkesan dan tak terlupakan.</p>
                        </div>

                    </div>

                </div>
            </section>

            <!-- CTA -->
            <section class="ftco-section text-center">
                <div class="container">
                    <h2>Ready to Explore Ranukumbolo?</h2>
                    <a href="/contact" class="btn btn-primary mt-3">Contact Us</a>
                </div>
            </section>
@endsection
