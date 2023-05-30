<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $data = config('db_partials', 'headerLinks');
        $comics = Comic::all();
        return view('comics.index', compact('data', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $data = config('db_partials', 'headerLinks');
        return view('comics.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function show(Comic $comic)
    {
        $data = config('db_partials', 'headerLinks');
        return view('comics.show', compact('comic', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function edit(Comic $comic)
    {
        $data = config('db_partials', 'headerLinks');
        return view('comics.edit', compact('data', 'comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function destroy(Comic $comic)
    {
        //
    }
}