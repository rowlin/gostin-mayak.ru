<?php

namespace App\Http\Controllers;

use App\Feed;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FeedsController extends Controller
{

    public function index()
    {
       $feeds =  Feed::all();

        //dd($feeds);
        return view('feeds.index', compact('feeds'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('feeds.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feed=$request->all();

        Feed::create($feed);
        //var_dump($feed);
        return redirect('feed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feed=Feed::find($id);
        return view('feeds.show',compact('feed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feed=Feed::find($id);
        return view('feeds.edit',compact('feed'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
        $feedUpdate=$request->all();
        $feed=Feed::find($id);
        $feed->update($feedUpdate);
        return redirect('feed');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Feed::find($id)->delete();
        return redirect('feed');
    }
}
