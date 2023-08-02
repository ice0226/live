<x-app-layout>
    <x-slot name="header">
        　（index）
    </x-slot>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <h1>Live Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <a href='/posts/create'>create</a>
</x-app-layout>