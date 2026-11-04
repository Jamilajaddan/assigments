<h1>Edit Post</h1>

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <input name="title" value="{{ old('title', $post->title) }}">
    <textarea name="body">{{ old('body', $post->body) }}</textarea>
    <button type="submit">Update</button>
</form>