<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;
use App\Category;
use App\Author;
use App\Copy;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
   $this->middleware('auth');
     }

    public function index()
    {
        return view ( 'book/index', [
            'books' => Book::orderBy ( 'title', 'asc' )->get (),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'book/create', [
            'authors' => Author::orderBy ( 'name', 'asc' )->pluck('name', 'id'),
            'categories' => Category::orderBy ( 'name', 'asc' )->pluck('name', 'id', 'color'),

        ]);
        //een boek toevoegen

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check if the form was correctly filled in
        $this->validate ( $request, [
            'title' => 'required|max:255',
            'isbn' => 'required|min:10|max:13|regex:/\978/x',
            'author_id' => 'required|max:255',
        ] );
        // Create new book object with the info in the request
        $book = Book::create ( [
            'title' => $request ['title'],
            'isbn' => $request ['isbn'],
        ] );

        $author = Author::find($request ['author_id']);
        $category = Category::find($request ['category_id']);
        $book->author()->associate($author);
        $book->category()->associate($category);


        // Save this object in the database
        $book->save ();
        // Redirect to the book.index page with a success message.
        return redirect ( 'book' )->with( 'success', $book->title.' is toegevoegd.' );
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ( 'book/show', [
            'book' => Book::findOrFail($id),
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ( 'book/edit', [
            'book' => Book::findOrFail($id),
            'authors' => Author::orderBy ( 'name', 'asc' )->pluck('name', 'id'),
            'categories' => Category::orderBy ( 'name', 'asc' )->pluck('name', 'id', 'color'),
        ] );
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
        echo 'update';
        // Check if the form was correctly filled in
        $this->validate ( $request, [
            'title' => 'required|max:255',
            'ISBN' => 'required|min:10|max:13|regex:/\978/x',
            'author_id' => 'required|max:255',
        ] );

        $book = Book::findorfail ( $id );
        $book->title = $request ['title'];
        $book->isbn = $request ['ISBN'];
        // Associate the role to the user

        $author = Author::find($request ['author_id']);
        $category = Category::find($request ['category_id']);
        $book->author()->associate($author);
        $book->category()->associate($category);

        // Save the changes in the database
        $book->save ();

        // Redirect to the book.index page with a success message.
        return redirect ( 'book' )->with( 'success', $book->title.' is bijgewerkt.' );
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the book object in the database
        $book = Book::findorfail ( $id );
        // Remove the book from the database
        $book->delete ();
        // Remove all copies with book id $id
        $deleteCopies = Copy::where('book_id', '=', $id)->delete();
        // Redirect to the book.index page with a success message.
        return redirect ( 'book' )->with( 'success', $book->title.' is verwijderd.' );
        //
    }
}
