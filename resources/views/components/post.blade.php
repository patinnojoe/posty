@props(['post'=> $post])

    <div class="mb-4">
        <a href="{{ route('users.post', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span
            class="text-grey-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>

        <p> {{ $post->body }} </p>

        @can('delete', $post)
            <div>
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-red-500 "> Delete</button>

                </form>
            </div>
        @endcan

        <div class="flex item-center">

            @auth
                @if (!$post->likedBy(auth()->user()))
                    <form class="mr-1" action="{{ route('posts.likes', $post->id) }}" method="post">
                        @csrf
                        <button type="submit" class="text-blue-500 "> Like</button>
                    </form>
                @else
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-blue-500 "> Unlike</button>
                    </form>
                @endif
            @endauth

            <span> {{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }} </span>

        </div>

    </div>

