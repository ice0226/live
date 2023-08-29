<x-app-layout>
    <x-slot name="header">
        　index
    </x-slot>

        <h1>Live Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
            <a href="/artist/{{ $post->artist->id }}">{{ $post->artist->name }}</a>
            <a href="/Lives/{{ $post->live->id }}">{{ $post->live->name }}</a>
                <div class='post'>
                    <h2 class='title'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <p class='body'>{{ $post->body }}</p>
                    <p class='live'>Live:{{$post->live->name}}</p>
                </div>
            @endforeach
        </div>
        <a href='/posts/create'>create</a>
</x-app-layout>