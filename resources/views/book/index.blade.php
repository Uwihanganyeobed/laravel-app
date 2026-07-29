<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hello This is Book Management App
<div>
                    <a href="{{route('book.create')}}">Create a BOOk</a>

</div>
    <div>
        <table border='1'>
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <a href="{{route('book.edit',['book'=>$book])}}">Edit</a>
                </td> 
                <td>
                    <form action="{{route('book.remove',['book'=>$book])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>