@extends('layout.master')

@section('title')
    Register
@endsection

@section('main_content')
<div class="w-full max-w-md mx-auto mt-10">
    <form method="post" action="{{ route('register') }}" class="bg-gradient-to-r from-green-400 to-blue-500 shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-6">
            <label class="block text-white text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" autofocus class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-900 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-600">
            @error('name')
                <p class="text-white font-bold text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-white text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input id="email" type="text" name="email" value="{{ old('email') }}" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-900 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-600">
            @error('email')
                <p class="text-white font-bold text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-white text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input id="password" type="password" name="password" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-900 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-600">
            @error('password')
                <p class="text-white font-bold text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-white text-sm font-bold mb-2" for="password_confirmation">
                Confirm Password
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-900 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-700">
                Register
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const inputs = document.querySelectorAll('input');

        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.classList.add('bg-blue-100');
            });
            input.addEventListener('blur', () => {
                input.classList.remove('bg-blue-100');
            });
        });
    });
</script>
@endsection

@section('footer_text')
    © 2024 My Website. Built with Laravel and Tailwind CSS.
@endsection
