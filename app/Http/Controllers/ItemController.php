<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // CRUD -> Retrieve --> List
        // BREAD -> Browse Read Edit Add Delete
        // return Item::all();
        return view('list_items',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     *
     * Forma mes senzilla i directa de fer-ho
     */
    public function show(Item $item)
    {
        // dd ($item);
        // return $item;
        //dump($item->name);
        //return view('show_item',['item' => $item]);
        return view('show_item',compact('item'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     *
     * Forma secundaria de fer-ho
     */
    public function show1($id)
    {
        // https://laravel.com/docs/5.5/eloquent
        //dump ($id);
        //dump($item = Item::find($id));
        //if ($item == null) abort(404);
        //try{
            //$item = Item::findOrFail($id);
        //}catch(\Exception $e){
            //abort(404);
        //}
        //$item = Item::findOrFail($id);
        //dump($item->name);
        //return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
