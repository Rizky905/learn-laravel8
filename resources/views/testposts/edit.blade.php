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
        <div class='container mx-5 my-2 px-4 my-2'>
            <?php 
                // echo '<pre>';
                // print_r($post->id);
                // exit;
            ?>
            <form action="{{route('testposts.update', ['testpost' => $post->id])}}" method="POST">
                <!-- using old -->
                @csrf
                @method("PUT")
                <label for="">Title</label>
                <div class="my-2">
                    <input type="text" name="title" class="my-2" value="{{old('content', $post->title)}}">
                </div>
                <label for="">content</label>
                <div class="my-2">
                    <textarea name="content" id="content" cols="30" rows="10">
                        {{old('content', $post->content)}}
                    </textarea>
                </div>

                <div class="my-2">
                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Update "></input>
                </div>
                <?php
                    // echo '<pre>';
                    // print_r($errors);
                    // exit;
                ?>
                
                <x:notify-messages />
                @notifyJs
            </form>
        </div>
    </body>
    </html>
@endsection