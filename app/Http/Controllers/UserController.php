<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;
use App\Location;

class UserController extends Controller
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
        return view ( 'user/index', [
            'users' => User::orderBy ( 'name', 'asc' )->get (),
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'user/create', [
            'roles' => Role::orderBy ( 'name', 'asc' )->pluck('name', 'id'),
            'locations' => Location::orderBy ( 'name', 'asc' )->pluck('name', 'id'),
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
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'confirmed|min:6',
            'role_id' => 'required|max:255',
        ] );
        // Create new User object with the info in the request
        $user = User::create ( [
            'name' => $request ['name'],
            'email' => $request ['email'],
        ] );
        // Associate the role to the user
        $role = Role::find($request ['role_id']);
        $location = Location::find($request ['location_id']);
        $user->role()->associate($role);
        $user->location()->associate($location);
        // Save this object in the database
        $user->save ();
        // Redirect to the user.index page with a success message.
        return redirect ( 'user' )->with( 'success', $user->name.' is toegevoegd.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ( 'user/show', [
            'user' => User::findOrFail($id),
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
        return view ( 'user/edit', [
            'user' => User::findOrFail($id),
            'roles' => Role::orderBy ( 'name', 'asc' )->pluck('name', 'id'),
            'locations' => Location::orderBy ( 'name', 'asc' )->pluck('name', 'id'),
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
            'name' => 'required|max:255',
            // 'email' => 'required|email|unique:users,email|max:255',
            'password' => 'confirmed|min:6',
            'role_id' => 'required|max:255',
        ] );

        $user = User::findorfail ( $id );
        $user->name = $request ['name'];
        $user->email = $request ['email'];
        // Associate the role to the user
        $role = Role::find($request ['role_id']);
        $location = Location::find($request ['location_id']);
        $user->role()->associate($role);
        $user->location()->associate($location);
        // Save the changes in the database
        $user->save ();

        // Redirect to the user.index page with a success message.
        return redirect ( 'user' )->with( 'success', $user->name.' is bijgewerkt.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the user object in the database
        $user = User::findorfail ( $id );
        // Remove the user from the database
        $user->delete ();
        // Redirect to the user.index page with a success message.
        return redirect ( 'user' )->with( 'success', $user->name.' is verwijderd.' );
    }
}
