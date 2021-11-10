<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPost;
use App\Models\User;

class PostController extends Controller
{

    // private $post = [
    //     1 => [
    //         'title' => 'learn laravel 8 ',
    
    //     ],
    //     2 => [
    //         'title' => 'learn laravel 8'
    //     ]
    // ];



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('testposts.index', ['post' => DataPost::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('testposts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        // echo '<pre>';
        // print_r($request->toArray());
        // exit;
        // if(!empty($request['title'])){
        //     echo 'ada';
        // }
        // if(empty($request['title'])){            
        //     echo 'kosong';

        // }
        // exit;

        $request->validate([
            'title' => 'required|min:5|max:20',
            'content' => 'required|min:5|max:600',
        ]);
        if(!empty($request['title'])){
            $post = new DataPost();
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->save();
            
            notify()->success('Data Added');
        }
        if(empty($request['title'])){
            notify()->success('Data Added');
        }

        return redirect()->route('testposts.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('testposts.show', ['post' => DataPost::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view(
            'testposts.edit' , 
            [
                'post' => DataPost::findOrFail($id)
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = DataPost::findOrFail($id);
        // echo '<pre>';
        // print_r($post);
        // exit;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        notify()->success('Data Updated');

        return redirect()->route('testposts.edit', ['testpost' => $post->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
