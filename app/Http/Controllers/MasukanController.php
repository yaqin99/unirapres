<?php

namespace App\Http\Controllers;

use App\Models\Masukan;
use Illuminate\Http\Request;

class MasukanController extends Controller
{

    public function masukan(){
        
        $validated = [
            'id' => 'required' , 
            'subjek' => 'required',
            'isi' => 'required',
        ];

        $input = Masukan::create([
            'dosen_id' => request('id') , 
            'subjek' => request('subjek'),
            'isi' => request('isi'),
        ]);

        if ($input) {
            return  redirect('/');
        }
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Masukan $masukan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Masukan $masukan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Masukan $masukan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Masukan $masukan)
    {
        //
    }
}
