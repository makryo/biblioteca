<?php

namespace App\Http\Controllers;

use App\orden;
use App\libros;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = libros::all();
        return view('order.index',compact('book'));
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
     * @param  \App\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $id = $request->libros_id;
        //$request->session()->put('books', array('0', ));        
       
        if ($request->session()->exists('books')) { 
            $books = $request->session()->get('books');
            //dd($books);
            array_push($books, $id);
            $books->push([$id]);
            $request->session()->put('books', $books);
            
        } else {

            $request->session()->put('books', array($id));
        }

        dd($request->session()->get('books'));
        

        /*session()->forget('books');
        
        $book = session('books'); 

        
        if (is_null($book)) {
            session(['books' => array($id)]);
        } else {
            array_push($book, $id);
            session('books', $book);
        }
        
        dd(session('books'));
        //$session(['book'=>'hola']);
        */
       $book = libros::all();
        return view('order.index',compact('book'));   
    
    }
    public function show(orden $orden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(orden $orden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orden $orden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(orden $orden)
    {
        //
    }
}
