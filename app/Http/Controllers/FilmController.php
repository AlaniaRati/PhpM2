<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Films::all();
        return view('Films.index')->with('films', $films);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'budget' => 'required',
        //     'info' => 'required',
        //     'genre ' => 'required',
        //     'year' => 'required'
        // ]);
        
        Films::create(array(
            'name' => $request->input('name'),
            'year' => $request->input('year'),
            'budget' => $request->input('budget'),
            'info' => $request->input('info'),
            'genre' => $request->input('genre'),
            'year' => $request->input('year')
        ));
        return redirect ('/');
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
        $f = Films::all()->where('id', $id)->first();
        return view('Films.edit')->with('f', $f);

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
        $request->validate([
            'name' => 'required',
            'budget' => 'required',
            'info' => 'required',
            'genre ' => 'required',
            'year' => 'required'
        ]);
    
        Films::where('id', $id)->update(array(
            'name' => $request->input('name'),
            'budget' => $request->input('budget'),
            'info' => $request->input('info'),
            'genre' => $request->input('genre'),
            'year' => $request->input('year')
        ));
    
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Films::where('id', $id)->delete();
        return redirect('/');		
    }
    public function const()
{
    $this->middleware('auth');
}

public function aj(){
    $f = Films::all();
    return $f;    
}
}
