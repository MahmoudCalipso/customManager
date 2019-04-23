<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = Users::All();
        $user_session = json_decode($request->session()->get("user"));

        return view("users.index", compact("users", "user_session"));
    }

    public function delete($id) {
      Users::where('User_Id', $id)->delete();
      return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        "name"=>'required',
        "email"=>'required',
        "user_role"=>'required',
        "password"=>'required'
      ]);
      $user = new Users([
          "name"  =>  $request->get('name'),
          "email"  =>  $request->get('email'),
          "user_role"  =>  $request->get('user_role'),
          "password"  =>  $request->get('password'),
      ]);
      $user->save();
      return redirect('users/view')->with('success', 'user saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = Users::find($id);
      return View('users.edit', compact('user'));
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
      $request->validate([
      "name"=>'required',
      "email"=>'required',
      "user_role"=>'required',
      "password"=>'required'
  ]);
      $user = Users::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->user_role = $request->get('user_role');
        $user->password = $request->get('password');
        $user->save();
      return redirect('users')->with('success', 'Users updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user= Users::find($id);
      $user->delete();
      return redirect('users')->with('success', 'User deleted!');
    }
}
