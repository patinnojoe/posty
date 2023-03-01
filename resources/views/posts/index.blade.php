@extends('layouts/app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg m-5">
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4"
                        class="bg-gray-100 border-2  w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                        placeholder="post something"></textarea>

                    @error('body')
                        <div class="text-red-500 mt-2">
                            {{ $message }}

                        </div>
                    @enderror

                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>

                </div>
            </form>

            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="mb-4">
                        <a href="" class="font-bold">{{ $post->user->name }}</a> <span
                            class="text-grey-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>

                        <p> {{ $post->body }} </p>

                        <div class="flex item-center">
                            <form action="post" class="mr-1" action="{{route('posts.like', $post->id)}}">
                                @csrf
                                <button type="submit" class="text-blue-500 "> Like</button>
                            </form>
                            <form action="post" class="mr-1">
                                @csrf
                                <button type="submit" class="text-blue-500 "> Unlike</button>
                            </form>

                            {{-- <span> {{ $post->likes->count() }} </span> --}}

                        </div>

                    </div>
                @endforeach

                <div> {{ $posts->links() }}</div>
            @else
                <p>Nothing to see here</p>
            @endif

        </div>
    </div>
@endsection
