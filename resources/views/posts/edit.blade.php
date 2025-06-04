<h2>Edit Post</h2>
<form action="{{ route('posts.update', $post) }}" method="POST"> 
    @csrf
    @method('PUT')
    <input name="title" value="{{ old('title', $post->title) }}"><br>
    <textarea name="content">{{ old('content', $post->content) }}</textarea><br>
    <button type="submit">Update</button>
</form>