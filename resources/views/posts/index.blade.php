<h2>Blog Posts</h2>
<a href="{{ route('posts.create') }}">+ New Post</a>

@foreach ($posts as $post)
<div>
    <h3><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
    <p>{{ Str::limit($post->content, 100) }}</p>
    <a href="{{ route('posts.edit', $post) }}">Edit</a><br>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach