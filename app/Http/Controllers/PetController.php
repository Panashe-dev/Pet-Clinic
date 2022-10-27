<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Pet;
use App\Models\PetType;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'petname'=>'required',
            'birth'=>'required',
            'petType'=>'required'

    ]);

     $id=$request->input('id');
     $owners=Owner::findOrFail($id);
     $Pets=new Pet();
     $Pets->name=strip_tags($request->input('petname'));
     $Pets->birth_date=strip_tags($request->input('birth'));
     $Pets->petType=strip_tags($request->input('petType'));
     $owners->Pets()->save($Pets);
    //  $Pets->Owners()->associate($owners);
    //  $Pets->save();
     return redirect()->route('OwnerInfo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owners=Owner::findOrFail($id);
        $PetTypes=PetType::all();
        return view('Pet.create', compact('owners','PetTypes'));
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
        //
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
