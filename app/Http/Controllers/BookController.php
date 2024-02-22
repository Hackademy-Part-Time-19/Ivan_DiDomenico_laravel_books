<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index',['libri'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $validated = $request->validated();
        
        $book = Book::create($validated);
        $book->save();
        return redirect()->back()->with('success','Libro inserito correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $books = Book::find($id);
        return view('books.show',compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = Book::find($id); 
        return view('books.edit',compact('books'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBookRequest $request, string $id)
    {
        $validated = $request->validated();
        $books = Book::find($id);
        $books->update($validated);

       return redirect()->back()->with('success','Libro modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->back()->with('success','Libro eliminato correttamente.');
    }
}
