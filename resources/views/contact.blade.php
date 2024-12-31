@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<section class="hire-me bg-cover bg-center bg-fixed pb-12" style="background-image: url('img/bg1.jpg');">
    <div class="max-w-full sm:max-w-md mx-auto p-6 border-2 border-white rounded-lg">
        <h2 class="text-center text-white">Contact Me</h2>
        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-white mb-2">Name:</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label for="email" class="block text-white mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label for="message" class="block text-white mb-2">Message:</label>
                <textarea id="message" name="message" rows="4" class="w-full p-2 border border-gray-300 rounded" required></textarea>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition-colors">Send Message</button>
        </form>
    </div>
</section>
@endsection
