<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('book.store')}}" method="POST">
        @csrf
        <label for="book_name">Book name:</label>
        <input type="text" name="book_name" id="book_name">
        <label for="book_name">Book type:</label>
        <input type="text" name="book_type" id="book_type">
        <label for="book_name">Book author:</label>
        <input type="text" name="book_author" id="book_author">
        <button type="submit">Save</button>
    </form>
</body>
</html>