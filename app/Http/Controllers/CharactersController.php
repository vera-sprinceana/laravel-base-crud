<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti=Character::All();
        return view('fumetti.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumetti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' =>'required'
            ]
        );
        $data=$request->all();
        $new_character= new Character();
        $new_character->fill($data);
        $new_character->save();
        return view('fumetti.show', $new_character);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Character $fumetto)
    {
        //$fumetto= Character::findOrFail($id);
        return view('fumetti.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $fumetto)
    {
        //$fumetto= Character::findOrFail($id);
        return view('fumetti.edit', compact('fumetto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $fumetto)
    {
        $request->validate(
            [
                'name' =>'required'
            ]
        );
        
        $data = $request->all();
        $fumetto->fill($data);
        $fumetto->save();

        return redirect()->route('fumetti.show', $fumetto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $fumetto)
    {
        $fumetto->delete();
        return redirect()->route('fumetti.index')->with('message', "Hai eliminato con successo: $fumetto->name");
    }
}
