<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Book Form</h1>
    <button onclick="window.location.href='{{ route('books.getAllBooks') }}'">Back to Book List</button>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required><br>

        <label for="published_year">Published Year:</label>
        <input type="number" name="published_year" id="published_year" required><br>

        <label for="cover">Cover Image:</label>
        <input type="text" name="cover" id="cover"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
