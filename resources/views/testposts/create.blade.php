@extends('layouts.baseapp')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table, th, td {
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <div class='container mx-auto px-4 my-2'>
            <form action="{{route('testposts.store')}}" method="POST">
                @csrf
                <label for="">Title</label>
                <div class="my-2">
                    <input type="text" name="title" class="my-2">
                </div>
                
                <label for="">content</label>
                <div class="my-2">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="my-2">
                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Create"></input>
                </div>
            </form>
        </div>
    </body>
    </html>
@endsection