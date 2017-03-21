<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userprofile/index')->with([
          'user' => Auth::user(),
        ]);
    }

    public function edit()
    {
      return view('userprofile/edit')->with([
        'user' => Auth::user(),
      ]);
    }
}
