<!-- resources/views/posts/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
<h1>Posts</h1>
<ul>
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
</ul>
</body>
</html>
