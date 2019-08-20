<?php

namespace App\Http\Controllers;

use App\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param \App\libros $book <recibe todos los datos de Libros>
     * @return \views\libros\index.blade.php <retorna a la vista index.blade.php>
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = libros::all();
        return view('libros.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     * @return \views\libros\create.blade.php <retorna a la vista create.blade.php>
     */
    public function create()
    {
        return view('libros.create');
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @param  \App\libros $book <agrega los datos a la base de datos>
     * @return \views\libros\show.blade.php <retornar a la vista show.blade.php>
     */
    public function store(Request $request)
    {
        $book = libros::create($request->all());
        return view('libros.show', compact('book'));
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\libros  $book <muestra los datos por medio de $id> 
     * @return \Illuminate\Http\Response
     * @return \views\libros\show.blade.php <retorna a la vista show>
     */
    public function show($id)
    {
        $book = libros::find($id);
        return view('libros.show', compact('book'));
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
      $Edita = libros::findOrFail($id);
      return view('libros.edit', compact('Edita'));
    }

  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\libros  $libros <variable contiene buscar los datos por 
     * medio de $id a la vez que actualiza los datos>
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, $id)
    {
        $book = libros::find($id);
        $book -> update($request ->all());
        return view('libros.show', compact('book'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\libros  $libros
     * @return \Illuminate\Http\Response
     * @ignore no se utiliza esta funcion
     */
    public function destroy(libros $libros)
    {
        //
    }
}
