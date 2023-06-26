@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-6 ps-5 pt-5 mb-5">
        <h1 class="head-line">Temukan Fashion Yang Paling Cocok <br> Denganmu</h1>
        <h6 class="description mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, repellendus doloremque! Reprehenderit id sapiente provident perspiciatis velit beatae, corrupti dolores?</h6>
        <div class="buttons-container mt-5">
            <button class="button-arounder">SHOP NOW</button>
        </div>
    </div>
    <div class="col-md-6 ps-5">
        <img src="https://picsum.photos/id/111/300/300" alt="an old car">
    </div>

    

    {{-- Promo --}}
    <header>
        <h1 >Promo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, assumenda.</p>
    </header>
    <div class="container">
        <div class="row">
            <div class="card-group mt-4 text-center">
                <div class="card">
                  <img src="{{ asset('asset/img/sweateplanet.webp') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="btn-home">
                        <a href="#" class="btn btn-shop  text-dark border border-3">Sweater Planet</a>
                      </div>
                  </div>
                </div>
                <div class="card">
                  <img src="{{ asset('asset/img/sweateplanet.webp') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="btn-home">
                        <a href="#" class="btn btn-shop  text-dark border border-3">Sweater Planet</a>
                      </div>
                  </div>
                </div>
                <div class="card">
                  <img src="{{ asset('asset/img/sweateplanet.webp') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="btn-home">
                        <a href="#" class="btn btn-shop text-dark border border-3">Sweater Planet</a>
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection