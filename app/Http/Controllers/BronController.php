<?php

namespace App\Http\Controllers;
use App\Bron;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBronRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use MaddHatter\LaravelFullcalendar\Event;
use App\EventModel;
class BronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brons = Bron::all();
        return view('bron.index', compact('brons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('bron.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBronRequest $request)
    {
        //$bron= array($request->id, $request->name, $request->phone, $request->nomer, $request->kol, $request->bron_comment  );


        $bron = $request->all();
        //$title = $request->name;

        //$Event = array($request->id, $request->start ,$request->end, $title ,'1');
        //EventModel::create($Event);
        Bron::create($bron);
        var_dump($bron);
       return redirect('bron');
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
        $bronUpdate=$request->all();
        $bron=Bron::find($id);
        $bron->update($bronUpdate);
        return redirect('bron');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bron::find($id)->delete();
        return redirect('bron');
    }




}