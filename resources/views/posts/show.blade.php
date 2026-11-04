<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>

<a href="{{ route('posts.edit', $post->id) }}">Edit</a>

<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>