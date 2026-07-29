<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .y{
            }
            form{
                background-color: green;
                width: 400px;
                display:flex;
                align-items:center;
                justify-content: space-between;
                flex-direction: column;
                gap:1rem;
                padding:1rem;
                border-radius:10px;
            }
            div{
                padding:1rem;
            }
            input{
                padding: 0.3rem;
                border: 1px solid grey;
                border-radius: 0.3rem;
            }
            label{
                font-size:20px;
                font-weight:bold;
            }
            button{
                background-color: blue;
                padding: 1rem;
                margin:1rem;
                border-radius: 10px;
                font-size:20px;
                font-weight:bold;
                width: 100%;
                cursor:pointer;
                border:none;
                color:white
            }
    </style>
    
</head>

<body class='y'>
    <h2>Update a book</h2>

    <form action="{{ route('book.update',['book'=>$book]) }}" method="PUT">
        @method('POST')
        @csrf
        <div>
            <label>Book Title</label>
            <input 
            name="title"
            type="text"
            placeholder="Enter Title"
            value="{{$book->title}}" />
        </div>

         <div>
            <label>Book Author</label>
            <input 
            name="author"
            type="text"placeholder="Enter Author"
            value="{{$book->author}}"
            />
        </div>

         <div>
            <label>Book Price</label>
            <input
            name="price"
            type="number"placeholder="Enter Price"
            value="{{$book->price}}"
            />
        </div>

        <button type="submit">Submit</button>

    </form>
</body>
</html>