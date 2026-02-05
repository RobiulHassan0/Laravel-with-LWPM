@extends('layouts.app')

@section('content')
    <div class="flex justify-center">

        <form action="{{ route('register') }}" method="POST" class="w-4/12 bg-white p-6 rounded-lg">
            @csrf

            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" value="{{ old('name ') }}" id="name" placeholder="Your name" class="bg-gray-100 border w-full p-4 rounded-lg @error('name') border-red-500
                @enderror">

                @error('name')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="sr-only">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" id="email" placeholder="Your email" class="bg-gray-100 border w-full p-4 rounded-lg @error('email') border-red-500
                @enderror">

                @error('email')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border w-full p-4 rounded-lg @error('email') border-red-500
                @enderror">

                @error('password')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-confirmation" class="sr-only">Confirm password</label>
                <input type="password" name="password_confirmation" id="password-confirmation" placeholder="Your password" class="bg-gray-100 border w-full p-4 rounded-lg @error('name') border-red-500
                @enderror">
            </div>

            <div>
                <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full ">Register</button>
            </div>
        </form>

    </div>
@endsection