@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="about-me">
    <h2 class="text-xl font-bold mb-4">About Me</h2>
    <p>
        Dynamic entrepreneur and final year Mechatronics Engineering student with a passion for innovation and technology. 
        Founder of WebCraft Labs, a pioneering 3D printing and laser engraving company, demonstrating adept leadership and business acumen. 
        Proven expertise in software development, highlighted by multiple certifications in frontend development. 
        Possesses a unique blend of technical prowess, entrepreneurial spirit, and a drive for continuous learning, 
        poised to make significant contributions in the intersection of engineering, technology, and business.
    </p>
</section>
<section class="bg-white/80 m-5 p-5 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">Work Experience</h2>
    <p>
        <strong>Founder</strong> - WebCraft Labs, Kano <br> 2023 - Present
        <br>
        Description of responsibilities and achievements in this role.
    </p>
    <p>
        <strong>Software Developer</strong> - VoosTech, Kano <br> 2022 - Present
        <br>
        Description of responsibilities and achievements in this role.
    </p>
</section>



<section class="services">
    <h2 class="text-xl font-bold mb-4">Services</h2>
    <p>
        <strong>3D Printing:</strong> Specializing in architectural house models and engineering designs.
        <br>
        <strong>DI Printing:</strong> Providing innovative solutions for various industries.
    </p>
</section>

<section class="showcasing-work text-center">
    <h2 class="text-xl font-bold mb-4">Certifications!</h2>
    <div class="work-images">
        <div class="row">
            <img src="{{ asset('img/cert1 (1).jpeg') }}" alt="Design 1">
            <img src="{{ asset('img/cert1 (1).png') }}" alt="Design 2">
            <img src="{{ asset('img/cert1 (2).jpeg') }}" alt="Design 3">
        </div> 
        <br>
        <div class="row">
            <img src="{{ asset('img/cert1 (2).png') }}" alt="Design 4">
            <img src="{{ asset('img/1703652514357.jpg') }}" alt="Design 5">
            <img src="{{ asset('img/1651771371542.jpg') }}" alt="Design 6">
        </div>
    </div>
</section>

<section class="hire-me text-center pb-8">
    <a href="{{ route('contact') }}">
        <button class="bg-green-500 text-white py-2 px-4 text-base cursor-pointer border-none rounded-md">
            Hire Me
        </button></a>
</section>
@endsection
