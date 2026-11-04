<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 0; color: #222; }
        .container { max-width: 700px; margin: 40px auto; padding: 0 16px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        h1 { margin: 0; }
        .card { background: #fff; padding: 16px 20px; border-radius: 8px; margin-bottom: 12px; box-shadow: 0 1px 4px rgba(0,0,0,.08); }
        .card h3 { margin: 0 0 6px; }
        .card a { color: #2563eb; text-decoration: none; }
        .card a:hover { text-decoration: underline; }
        small { color: #777; }
        .btn { display: inline-block; background: #2563eb; color: #fff; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 14px; }
        .btn:hover { background: #1d4ed8; }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>All Posts</h1>
            <a class="btn" href="{{ route('posts.create') }}">+ New Post</a>
        </div>

        @forelse ($posts as $post)
            <div class="card">
                <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
                <small>{{ $post->created_at->format('d M Y') }}</small>
            </div>
        @empty
            <p>No posts yet.</p>
        @endforelse
    </div>
</body>
</html>
</html>