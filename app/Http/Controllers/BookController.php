<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $type_criterion = ['type_id', '<>', 0];
        $genre_criterion = ['genre_id', '<>', 0];
        $search_criterion = ['name', 'like', '%'.$request->search_text.'%'];
        if ($request->type_id != 0) {
            $type_criterion = ['type_id', $request->type_id];
        }
        if ($request->genre_id != 0) {
            $genre_criterion = ['genre_id', $request->genre_id];
        }
        $books = Book::with('author')->where([
            $search_criterion,
            $type_criterion,
            $genre_criterion,
        ])->paginate(30);
        return response()->json(['books' => $books]);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::with('author')->with('genre')->with('type')->find($id);
        return response()->json(compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
