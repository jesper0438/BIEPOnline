<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Loan;
use App\Copy;
use App\User;

class LoanController extends Controller
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
         return view ( 'loan/index', [
             'loans' => Loan::orderBy ( 'expirydate', 'asc' )->get (),
         ] );
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'loan/create', [
          'copies' => Copy::join('books', 'books.id', '=', 'copies.book_id')->orderBy ( 'books.title', 'asc' )->pluck('books.title', 'copies.id'),
          'users' => User::orderBy ( 'name', 'asc' )->pluck('name', 'id'),

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
         $this->validation ($request);
         // Create new loans object with the info in the request
         $loan = Loan::create ( [
             'startdate' => $request ['startdate'],
             'expirydate' => $request ['expirydate'],
             'returndate' => $request ['returndate']
         ] );

         $copy = Copy::find($request ['copy_id']);
         $user = User::find($request ['user_id']);
         $loan->copy()->associate($copy);
         $loan->user()->associate($user);
         $startDate = $request ['startdate'];
         $expiryDate = $request ['expirydate'];

                if ($expiryDate < $startDate){

                return redirect ( 'loan/create' )->withErrors([ 'De verloopdatum is ongeldig.' , 'Kies een datum na de uitleendatum.'] );}

                else{

                // Save this object in the database
                $loan->save ();
                // Redirect to the loans.index page with a success message.
                return redirect ( 'loan' )->with( 'success', 'Uitlening toegevoegd!' );
            }

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id = the ordernumber
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ( 'loan/show', [
            'loan' => Loan::findOrFail($id),
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
        return view ( 'loan/edit', [
            'loan' => Loan::findOrFail($id),
            'copies' => Copy::join('books', 'books.id', '=', 'copies.book_id')->orderBy ( 'books.title', 'asc' )->pluck('books.title', 'copies.id'),
            'users' => User::orderBy ( 'name', 'asc' )->pluck('name', 'id'),
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
         $this->validation($request);

         $loan = Loan::findorfail ( $id );
         $loan->startdate = $request ['startdate'];
         $loan->expirydate = $request ['expirydate'];
         $loan->returndate = $request ['returndate'];
         $copy = Copy::find($request ['copy_id']);
         $user = User::find($request ['user_id']);
         $loan->copy()->associate($copy);
         $loan->user()->associate($user);
         // Save the changes in the database
         $loan->save ();

         // Redirect to the loans.index page with a success message.
         return redirect ( 'loan' )->with( 'success', $loan->copy->book->title.' is bijgewerkt.' );
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the loans object in the database
        $loan = Loan::findorfail ( $id );
        // Remove the loans from the database
        $loan->delete ();
        // Redirect to the loans.index page with a success message.
        return redirect ( 'loan' )->with( 'success', $loan->copy->book->title.' is verwijderd.' );
    }

    public function validation($request)
    {
      $this->validate ( $request, [
           'startdate' => 'required|date|max:255',
           'expirydate' => 'required|date|max:255',
           'returndate' => 'date|max:255'
           ] );
    }
}
