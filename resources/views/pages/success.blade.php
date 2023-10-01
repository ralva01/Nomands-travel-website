@extends('layouts.success')
@section('title', 'Checkout Success')


@section('content')

<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img class="image-success mb-3" src="{{ url('Frontend/images/Sukses.png')}}" alt="">
            <h1>Yay! Succsess</h1>
            <p>We've sent you email for trip instruction
                <br>
                please read it as well
            </p>

            <a href="{{ url ('/')}}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>


@stop