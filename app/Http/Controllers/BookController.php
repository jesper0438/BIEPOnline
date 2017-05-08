<?php

namespace App\Http\Controllers;


use App\Book;
use App\Category;
use App\Copy;
use Illuminate\Http\Request;

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
        return view('book/index', [
            'books' => Book::orderBy('title', 'asc')->get(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book/create', [
            'categories' => Category::orderBy('name', 'asc')->pluck('name', 'color'),

        ]);
        //een boek toevoegen

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check if the form was correctly filled in
        $this->validate($request, [
            'title' => 'required|max:255',
            'isbn' => 'required|min:10|max:13|unique:books',
            'author' => 'required|max:255',
            'category_id' => 'required',
        ]);

        // Create new book object with the info in the request
        $book = Book::create([
            'title' => $request ['title'],
            'isbn' => $request ['isbn'],
            'author' => $request ['author'],
            'category_id' => $request ['category_id'],
        ]);

        $category = Category::find($request ['category_id']);
        $book->category()->associate($category);

        // Save this object in the database
        $book->save();
        // Redirect to the book.index page with a success message.
        return redirect('book')->with('success', $book->title . ' is toegevoegd.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('book/show', [
            'book' => Book::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('book/edit', [
            'book' => Book::findOrFail($id),
            'categories' => Category::orderBy('name', 'asc')->pluck('name', 'color'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        // Check if the form was correctly filled in
        $this->validate($request, [
            'title' => 'required|max:255',
            'ISBN' => 'required|min:10|max:13',
            'author_id' => 'required|max:255',
            //'category_id' => 'required|max:255',
        ]);

        $book = Book::findorfail($id);
        $book->title = $request ['title'];
        $book->isbn = $request ['ISBN'];
        $book->author_id = $request ['author_id'];
        // Associate the role to the user

        $category = Category::find($request ['category_id']);
        $book->category()->associate($category);

        // Save the changes in the database
        $book->save();

        // Redirect to the book.index page with a success message.
        return redirect('book')->with('success', $book->title . ' is bijgewerkt.');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the book object in the database
        $book = Book::findorfail($id);
        // Remove the book from the database
        $book->delete();
        // Remove all copies with book id $id
        $deleteCopies = Copy::where('book_id', '=', $id)->delete();
        // Redirect to the book.index page with a success message.
        return redirect('book')->with('success', $book->title . ' is verwijderd.');
        //
    }
}
