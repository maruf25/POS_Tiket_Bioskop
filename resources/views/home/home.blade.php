@extends('home.layouts.layout')

@section('content')
    @include('home.layouts.navbar')
    <div class="container pt-5">
        <div class="row mb-5 justify-content-end">
            <div class="col-6">
                <div class="search d-flex">
                    <input type="text" class="form-control me-3" placeholder="Masukkan Nama Film" />
                    <button class="btn btn-success">Search</button>
                </div>
            </div>
        </div>
        <div class="row row-cols-3 g-4">
            <div class="col d-flex justify-content-center">
                <a href="{{ route('showtime') }}" class="text-decoration-none text-dark">
                    <img src="{{ asset('image/image1.png') }}" class="poster-img" alt="image1">
                    <div class="poster-title mt-3">The Matrix: Resurrections</div>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="{{ route('showtime') }}" class="text-decoration-none text-dark">
                    <img src="{{ asset('image/image2.png') }}" class="poster-img" alt="image2">
                    <div class="poster-title mt-3">Resident Evil: Witness The Beginning Of Evil</div>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="{{ route('showtime') }}" class="text-decoration-none text-dark">
                    <img src="{{ asset('image/image3.png') }}" class="poster-img" alt="image3">
                    <div class="poster-title mt-3">Sword Art Online: Progressive - Aria a Starless Night</div>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="{{ route('showtime') }}" class="text-decoration-none text-dark">
                    <img src="{{ asset('image/image1.png') }}" class="poster-img" alt="image1">
                    <div class="poster-title mt-3">The Matrix: Resurrections</div>
                </a>
            </div>
        </div>
    </div>
@endsection
