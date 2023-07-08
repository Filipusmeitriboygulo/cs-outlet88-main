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
        <img src="{{ asset('img/products/f3.jpg') }}" alt="an old car">
    </div>

{{-- Promo --}}
<div class="promo">
    <h1 class="promo ">Promo</h1>
    <p class="promo">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum provident ea sint 
        repellendus doloremque, porro facilis ipsam temporibus voluptatibus quos. Omnis blanditiis nisi error soluta veritatis sequi vel amet dolorum?
    </p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-50">
            <img src="{{ asset('img/products/f4.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#" class="btn  d-flex justify-content-center btn-light">SWEATER</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-50">
            <img src="{{ asset('img/products/f5.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#" class=" btn d-flex justify-content-center btn-light">LONG SLEEVE</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-50">
            <img src="{{ asset('img/products/f6.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#" class="btn d-flex justify-content-center btn-light">T-SHIRT</a>
            </div>
          </div>
        </div>
      </div>

      

</div>

{{-- Best Fashion --}}
<div class="row justify-content-center">
    <div class="col-md-6 ps-5">
        <img src="{{ asset('img/products/f2.jpg') }}" alt="an old car">
    </div>
    <div class="col-md-6 ps-5 pt-5 mb-5">
        <h1 class="best-fashion">Best Fashion <br> Since 2019</h1>
        <p class="best-fashion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper congue eros, 
        eget tincidunt ipsum eleifend ut orem ipsum dolor sit amet consectetur adipiscing elit Sed ullamcorper congue eros eleifend ut tincidunt ipsum .</p>
        <div class="buttons-container mt-5">
            <button class="button-arounder">SHOW MORE</button>
        </div>
    </div>
    
{{-- Product
<div class="row">
    <div class="col-md-6 ps-5 pt-5 mt-5 px-5">
        <h6 class="product mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, repellendus doloremque! Reprehenderit id sapiente provident perspiciatis velit beatae, corrupti dolores?</h6>
        <div class="buttons-container mt-5">
            <button class="button-arounder">SEE MORE</button>
        </div>
    </div>
    <div class="col">
        <div class="card h-50 mt-5">
            <img src="{{ asset('img/products/f5.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#" class="btn d-flex justify-content-center btn-light">LONG SLEEVE</a>
            </div>
        </div>
    </div>
    <div class="col ">
        <div class="card h-50 mt-5">
            <img src="{{ asset('img/products/f5.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#" class="btn d-flex justify-content-center btn-light">LONG SLEEVE</a>
            </div>
        </div>
    </div>
</div> --}}


    {{-- Our Product --}}
    <div class="produk">
        <h1 class="produk">Our Product</h1>
        <ul class="horizontal-list">
            <li>Hot</li>
            <li>On Sale</li>
            <li>Trending</li>
            <li>New Arrival</li>
        </ul>        
        <div class="product-section">
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="product-card">
                  <img src="{{ asset('img/products/f2.jpg') }}" alt="Product 1">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="buy_now" class="btn">Buy Now</a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-card">
                  <img src="{{ asset('img/products/f3.jpg') }}" alt="Product 2">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="btn">Buy Now</a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-card">
                  <img src="{{ asset('img/products/f4.jpg') }}" alt="Product 3">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="btn">Buy Now</a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-card">
                  <img src="{{ asset('img/products/f5.jpg') }}" alt="Product 4">
                  <h4>Product 4</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="btn">Buy Now</a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-card">
                  <img src="{{ asset('img/products/f6.jpg') }}" alt="Product 5">
                  <h4>Product 5</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="btn">Buy Now</a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-card">
                  <img src="{{ asset('img/products/f7.jpg') }}" alt="Product 6">
                  <h4>Product 6</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="btn">Buy Now</a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-card">
                  <img src="{{ asset('img/products/f8.jpg') }}" alt="Product 7">
                  <h4>Product 7</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="btn">Buy Now</a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-card">
                  <img src="{{ asset('img/products/f3.jpg') }}" alt="Product 8">
                  <h4>Product 8</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="btn">Buy Now</a>
                </div>
              </div>
            </div>
          </div>
                 
    </div>
    {{-- Banner --}}
    <div class="banner">
        <div class="banner-content">
          <h1>Deal Of The Day</h1>
          <p>Discover amazing products and great deals!</p>
          <button class="button-arounder">SHOP NOW</button>
        </div>
        <div class="banner-image">
            <img src="{{ asset('img/products/f6.jpg') }}" alt="Banner Image">
        </div>
      </div>
      

    {{-- Testimooni --}}
    <div class="testimonial-section">
        <h2>What People Say About Us</h2>
        <div class="testimonial-container">
          <div class="testimonial-card">
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis diam a ante accumsan, ac scelerisque ligula eleifend. Pellentesque ultrices ex vitae odio pulvinar convallis.</p>
            <h4>John Doe</h4>
          </div>
          <div class="testimonial-card">
            
            <p>Curabitur ultricies, enim vel sollicitudin tincidunt, mauris metus varius purus, non tristique elit lorem in arcu. Ut congue ligula eget mi egestas, eu tempus ligula accumsan.</p>
            <h4>Jane Smith</h4>
          </div>
          <div class="testimonial-card">
            
            <p>Vestibulum id est auctor, aliquet nisi nec, posuere nunc. Aliquam erat volutpat. Morbi tincidunt ligula quis magna scelerisque semper.</p>
            <h4>David Johnson</h4>
          </div>
        </div>
      </div>

      
      {{-- Footer --}}

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; cs_outlet88</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Instagram</a></li>
          <li class="list-inline-item"><a href="#">Facebook</a></li>
          <li class="list-inline-item"><a href="#">Tiktok</a></li>
        </ul>
      </footer>
@endsection

