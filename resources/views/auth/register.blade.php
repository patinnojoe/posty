@extends('layouts/app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg m-5">
            <form action="{{ route('register') }}" method="post">
                @csrf


                <div class="mb-4">
                    <label for="name"> Full Name:</label>
                    <input type="text" id="name" name="name" placeholder="your name"
                        class=" @error('name')
                        border-red-500 @enderror bg-gray-100 w-full border-2 p-4 rounded-lg" value="{{old('name')}}">
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username"> userName:</label>
                    <input type="text" id="username" name="username" placeholder="your username"
                        class="@error('username')
                        border-red-500 @enderror bg-gray-100 w-full border-2 p-4 rounded-lg" value="{{old('username')}}">
                        @error('username')
                        <span class="text-red-500">{{$message}}</span>
                            
                        @enderror
                </div>

                <div class="mb-4">

                    <label for="email"> email address:</label>
                    <input type="email" id="email" name="email" placeholder="your email"
                        class="@error('email')
                        border-red-500 @enderror bg-gray-100 w-full border-2 p-4 rounded-lg" value="{{old('email')}}">
                        @error('email')
                        <span class="text-red-500">{{$message}}</span>
                            
                        @enderror
                </div>

                <div class="mb-4">
                    <label for="password"> password:</label>
                    <input type="password" id="password" name="password" placeholder="create password"
                        class=" @error('password')
                        border-red-500 @enderror bg-gray-100 w-full border-2 p-4 rounded-lg" value="{{old('password')}}">
                        @error('password')
                        <span class="text-red-500">{{$message}}</span>
                            
                        @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation"> Confirm password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="confirm password" class=" @error('password')
                        border-red-500 @enderror bg-gray-100 w-full border-2 p-4 rounded-lg" value="{{old('password_confirmation')}}">

                        
                        @error('password_confirmation')
                        <span class="text-red-500">{{$message}}</span>
                            
                        @enderror
                </div>

                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>

            </form>

        </div>
    </div>
@endsection
