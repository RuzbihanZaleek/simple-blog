<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
<a href="{{ route('posts.edit', $post) }}">Edit</a>
<form action="{{ route('posts.destroy', $post) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<a href="{{ route('posts.index') }}">⬅️ Back</a>