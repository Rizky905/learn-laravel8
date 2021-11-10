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
        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 grid grid-cols-3 gap-4">
                <div class="shadow text-2xl text-white row-start-1">
                    <h3 class="">Test content</h3>
                </div>
                <div class=""></div>
                <div class="mt-1">
                    <a href="/testposts/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-8 ">+ Add Data</a>
                    <a href="/testposts/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-8 ">- Delete Data</a>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection