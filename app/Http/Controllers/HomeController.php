<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Tanggal wisuda: 15 Oktober 2025
        $tanggal_wisuda = Carbon::createFromDate(2027, 10, 15);

        // Tanggal lahir (tahun saja)
        $tanggalLahir = Carbon::createFromFormat('Y', '2006');

        // Tanggal sekarang
        $tanggalSekarang = Carbon::now();

        // Data lainnya
        $data['username'] = 'Marcel Ariyanto';

        // Menghitung umur dalam tahun penuh tanpa koma
        $data['umur'] = (int) $tanggalLahir->diffInYears($tanggalSekarang);


        $data['current_semester'] = 3;

        // Hobi
        $data['hobbi'] = ['Badminton', 'Game', 'Berenang', 'Mancing', 'Catur', 'Jalan-jalan'];

        // Menghitung selisih hari antara tanggal sekarang dan tanggal wisuda
        $data['time_to_study_left'] = (int) $tanggalSekarang->diffInDays($tanggal_wisuda);

        $data['future_goal'] = "Bahagia";
        // Mengembalikan data ke view
        return view('home', $data);
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
    public function signup(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'  =>  'required|max:10',
            'email' => ['required','email'],
            'password'  => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
        ]);
              $pageData['name']     = $request->name;
      $pageData['email']    = $request->email;
      $pageData['password'] = $request->password;
      return view('signup-success', $pageData);
    }
}
