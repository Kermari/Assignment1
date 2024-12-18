<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts and Comments</title>
</head>
<body>
    <h1>Posts and Comments</h1>
    
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>

            <h3>Comments</h3>
            <ul>
                @forelse ($post->comments as $comment)
                    <li>{{ $comment->comment }}</li>
                @empty
                    <li>No comments yet.</li>
                @endforelse
            </ul>
        </div>
    @endforeach
</body>
</html>
