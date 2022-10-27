<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Pet;
use App\Models\Vets;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitComtroller extends Controller
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
         'date'=>'required',
            'Description'=> 'required'
        ]);

        $pets=Pet::findOrFail($request->input('id'));
        $visits=new Visit();
        $visits->visit_date=strip_tags($request->input('date'));
        $visits->description=strip_tags($request->input('Description'));

        $pets->Visits()->save($visits);

        $owners=Owner::findOrFail($pets['Owner_id']);
        return redirect()->route('OwnerInfo.show', ['OwnerInfo' => $owners['id']]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pets=Pet::findOrFail($id);
        $owners=Owner::findOrFail($Pets['Owner_id']);
        return view('Visit.show',compact('Pets', 'owners'));
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
