<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
<h1>Create Post</h1>
<form action="/posts" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    <br>
    <button type="submit">Create Post</button>
</form>
</body>
</html>
