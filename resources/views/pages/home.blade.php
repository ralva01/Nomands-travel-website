
@extends('layouts.app')



@section('title')
    NOMANDS
@stop



@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Explore The Beautiful Word
            <hr>
            As Easy One Click
        </h1>
        <p class="mt-4">You will sea beautiful 
            <br>
            moment you never see before</p>
            <a href="#popular" class="btn btn-get-started px-4 mt-4">
                Get Started
            </a>
    </header>

    <!-- Statistik -->
    <main>
        <div class="container">
            <section class="section-start row justify-content-center" id="Start">
                <div class="col-3 col-md-2 start-detail">
                    <h2>20K</h2>
                    <p>Member</p>
                </div>
                <div class="col-3 col-md-2 start-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 start-detail">
                    <h2>5K</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 start-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Someting that you never 
                            <br>
                            try before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--Popular Content-->
        <section class="section-popular-content" id="popularcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <!--Wisata Populer-->
                   
                   
                   @foreach ($items as $item)
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ $item->galleries->count() ? Storage::url 
                        ($item->galleries->first()->image) :'' }}');">

                            <div class="travel-country">{{$item->location}}</div>
                            <div class="travel-location">{{$item->title}}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route ('details', $item->slug)}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div> 
                   @endforeach
                   
                
                </div>
            </div>
        </section>

        <!--Our Network-->
        <section class="section-networks" id="networks">
            <div class="conteiner">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ url('Frontend/images/Logos_Partners.png')}}"
                         alt="logo Partners" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonial-->
        <section class="section-testimonial-heading" id="testimonialheading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them <br>
                        the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!--Testimonial Content-->
        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">

        <!--Content1-->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('Frontend/images/User_Pic_1.png')}}" alt="#" 
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Angga Rizky</h3>
                                <p class="testimonial">
                                    " It was glorious and i could
                                    not stop to say wohoo for every single moment "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
        <!--Content2-->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('Frontend/images/User_Pic_2.png')}}" alt="#" 
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <p class="testimonial">
                                    " The trip was amazing and i saw
                                    someting beautiful in that island that makes
                                    me want to learn more "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>
                        </div>
                    </div>
        <!--Content3-->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('Frontend/images/User_Pic_3.png')}}" alt="#" 
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Jhonathan</h3>
                                <p class="testimonial">
                                    " I loved it when the waves was 
                                    shaking harder - i was scared too "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Karimun Jawa
                            </p>
                        </div>
                    </div>
                </div>
        <!--Button-->
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{route('register')}}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop

