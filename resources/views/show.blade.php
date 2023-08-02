<x-app-layout>
    <x-slot name="header">
        　show
    </x-slot>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>ライブレポ</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>