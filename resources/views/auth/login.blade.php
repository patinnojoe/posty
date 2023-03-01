@extends('layouts/app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg m-5">
            @if (session()->has('status'))
                <p class="text-red-500">
                    {{ session('status') }}

                </p>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf


                <div class="mb-4">

                    <label for="email"> email address:</label>
                    <input type="email" id="email" name="email" placeholder="your email"
                        class="@error('email')
                        border-red-500 @enderror bg-gray-100 w-full border-2 p-4 rounded-lg"
                    >
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password"> password:</label>
                    <input type="password" id="password" name="password" placeholder="your password"
                        class="@error('password')
                        border-red-500 @enderror bg-gray-100 w-full border-2 p-4 rounded-lg"
                    >
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember"> Remember Me</label>

                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">log
                        in</button>
                </div>

            </form>

        </div>
    </div>
@endsection
