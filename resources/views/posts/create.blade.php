<h2>Create Post</h2>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" value="{{ old('title') }}"><br>
    <textarea name="content" placeholder="Content">{{ old('content') }}</textarea><br>
    <button type="submit">Save</button>
</form>