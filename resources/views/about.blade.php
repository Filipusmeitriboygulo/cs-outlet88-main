@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Company</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra iaculis urna, vitae tincidunt quam tincidunt eu.</p>
            <a href="#about" class="btn btn-primary">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra iaculis urna, vitae tincidunt quam tincidunt eu. Sed gravida feugiat est at consequat.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/about.jpg') }}" alt="About Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Content Section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Our Mission</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra iaculis urna, vitae tincidunt quam tincidunt eu. Sed gravida feugiat est at consequat.</p>
                </div>
                <div class="col-lg-6">
                    <h2>Our Vision</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra iaculis urna, vitae tincidunt quam tincidunt eu. Sed gravida feugiat est at consequat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section class="banner">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra iaculis urna, vitae tincidunt quam tincidunt eu.</p>
            {{-- <a href="{{ route('contact') }}" class="btn btn-primary">Get in Touch</a> --}}
        </div>
    </section>
@endsection
