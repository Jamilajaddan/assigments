<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 0; color: #222; }
        .container { max-width: 700px; margin: 40px auto; padding: 0 16px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,.08); }
        h1 { margin: 0 0 10px; }
        .back { display: inline-block; margin-bottom: 16px; color: #555; text-decoration: none; }
        label { display: block; margin: 14px 0 6px; font-weight: bold; }
        input[type=text], textarea { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 15px; font-family: inherit; }
        textarea { min-height: 140px; resize: vertical; }
        .error { color: #dc2626; font-size: 13px; margin-top: 4px; }
        .btn { background: #2563eb; color: #fff; padding: 8px 16px; border: 0; border-radius: 6px; cursor: pointer; font-size: 14px; margin-top: 16px; }
        .btn:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <div class="container">
        <a class="back" href="{{ route('posts.index') }}">← Back to posts</a>

        <div class="card">
            <h1>New Post</h1>

            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Title">
                @error('title') <div class="error">{{ $message }}</div> @enderror

                <label>Body</label>
                <textarea name="body">{{ old('body') }}</textarea>
                @error('body') <div class="error">{{ $message }}</div> @enderror

                <button type="submit" class="btn">Save</button>
            </form>
        </div>
    </div>
</body>
</html>