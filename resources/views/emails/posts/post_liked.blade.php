{{-- <x-mail::message >
# Your Post was liked
X liked one of Your posts


<x-mail::button :url="''" >
View liked Post
</x-mail::button >

Thanks,<br>
{{ config('app.name') }}
</x-mail::message > --}}

@component('mail::message')
    # Your Post was liked
    {{$liker->name}} liked one of Your posts
    @component('mail::button', ['url' => route('posts.show', $post)])
        View Post
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
