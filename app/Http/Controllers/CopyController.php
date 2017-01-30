<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Copy;
use App\Location;
use App\Book;


class CopyController extends Controller
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
        return view ( 'copy/index', [
            'copies' => Copy::orderBy ( 'datebought', 'asc' )->get (),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'copy/create', [

            'locations' => Location::orderBy ( 'name', 'asc' )->pluck('name', 'id'),
            'books' => Book::orderBy ( 'title', 'asc' )->pluck('title', 'id', 'isbn'),

        ]);

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
            'id' => 'max:255',
            'datebought' => 'required|date',
            'state' => 'required|max:255'
        ] );
        // Create new Copy object with the info in the request
        $copy = Copy::create ( [
            'id' => $request ['id'],
            'datebought' => $request ['datebought'],
            'state' => $request ['state'],
        ] );

        $location = Location::find($request ['location_id']);
        $book = Book::find($request ['book_id']);
        $copy->location()->associate($location);

        $copy->book()->associate($book);
        // Save this object in the database
        $copy->save ();
        // Redirect to the copy.index page with a success message.
        return redirect ( 'copy' )->with( 'success', 'Het exemplaar is toegevoegd.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ( 'copy/show', [
            'copy' => Copy::findOrFail($id),
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
        return view ( 'copy/edit', [
            'copy' => Copy::findOrFail($id),
            'locations' => Location::orderBy ( 'name', 'asc' )->pluck('name', 'id'),
            'books' => Book::orderBy ( 'title', 'asc' )->pluck('title', 'id', 'isbn'),

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
        // Check if the form was correctly filled in
        $this->validate ( $request, [
            'id' => 'max:255',
            'datebought' => 'required|date',
            'state' => 'required|max:255'
        ] );
        $copy = Copy::findorfail ( $id );
        $copy->datebought = $request ['datebought'];
        $copy->state = $request['state'];
        $location = Location::find($request ['location_id']);
        $book = Book::find($request ['book_id']);
        $copy->book()->associate($book);
        $copy->location()->associate($location);

        // Save the changes in the database
        $copy->save ();
        // Redirect to the copy.index page with a success message.
        return redirect ( 'copy' )->with( 'success', 'Het exemplaar is bijgewerkt.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the copy object in the database
        $copy = Copy::findorfail ( $id );
        // Remove the copy from the database
        $copy->delete ();
        // Redirect to the copy.index page with a success message.
        return redirect ( 'copy' )->with( 'success', 'Het exemplaar is verwijderd.' );
    }


}
