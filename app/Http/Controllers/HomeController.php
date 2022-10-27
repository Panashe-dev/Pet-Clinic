<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private static function getData(){
        return[
            ['id'=>1,'name'=>'cute','age'=>2,'favfood'=>'milk','onwer'=>'Kundai Muranda','Type'=>'Cat'],
            ['id'=>2,'name'=>'spider','age'=>9,'favfood'=>'rice','onwer'=>'Panashe Mugomba','Type'=>'dog'],
            ['id'=>3,'name'=>'danger','age'=>3,'favfood'=>'sadza','onwer'=>'Kelvin Ndagurwa','Type'=>'goate'],
            ['id'=>4,'name'=>'bigo','age'=>8,'favfood'=>'biscuits','onwer'=>'Valon Mastokotera','Type'=>'Ship'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome',['cats'=>self::getData()]);
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

        //
        
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
