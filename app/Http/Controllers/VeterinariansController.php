<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialities;
use App\Models\Vets;

class VeterinariansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Veterinarian.index', [
            'Veterinarians' => Vets::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Veterinarian.create', [
            'specialities' => Specialities::all()
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
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'cell' => 'required',
            'specialty' => 'required',
        ]);

        $vets = new Vets();

        $vets->first_name = strip_tags($request->input('firstname'));
        $vets->last_name = strip_tags($request->input('lastname'));
        $vets->email = strip_tags($request->input('email'));
        $vets->cell = strip_tags($request->input('cell'));
        $vets->Specialities = strip_tags($request->input('specialty'));

        $vets->save();
        return redirect()->route('Veterinarian.index');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
