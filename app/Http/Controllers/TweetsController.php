<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = Tweet::orderBy("created_at", "desc")->get();
        return view('pages.tweets.index', [
            'tweets' => $tweets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $data = $request->all();
        $tweet = Tweet::create($data);
        // dd(request()->wantsTurboStream());
        
        // TODO: investigate why wantsTurboStream() is returning false
        if (request()->wantsTurboStream()) {
            return response()->turboStream([
                response()->turboStream()
                    ->action('prepend') // menambahkan elemen ke posisi awal
                    ->target('tweets')  // id element yang akan diupdate
                    ->view('pages.tweets._tweet', ['tweet' => $tweet]),  // view yang akan digunakan
                response()->turboStream()
                    ->action('replace') // mereplace element
                    ->target("new_tweet") // id element yang akan di replace
                    ->view('pages.tweets._form'), // view yang akan digunakan
            ]);
        }

        return back();
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
