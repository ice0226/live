<x-app-layout>
    <x-slot name="header">
        create
    </x-slot>
        <h1>Live Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="artist">
                <h2>Artist</h2>
                <select name="post[artist_id]">
                    @foreach($artists as $artist)
                        <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="live">
                <h2>Live</h2>
                <select name="post[live_id]">
                    @foreach($lives as $live)
                        <option value="{{ $live->id }}">{{ $live->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>ライブレポ</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
</x-app-layout>