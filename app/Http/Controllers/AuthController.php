<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login-form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
public function login(Request $request){
     $request->validate([
            'name'  =>  'required|max:10',
            'password'  => [
                'required',
                'string',
                'min:8',
                'regex:/[0-9]/',
            ],
        ]);
    $name= $request->input('name');
    $password= $request->input('password');
    if($name==$password){
        return redirect('/home/form')->with('status', 'Login berhasil! Selamat datang kembali.');
    }else{
        return back()->withErrors([
        'name' => 'Username atau Password yang Anda masukkan salah.',
    ])->onlyInput('name');
    }


}
}
