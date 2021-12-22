<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PecasReparo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.list-pecasReparo',['pecasReparo'=> pecasReparo::listAll()]);
        return view('admin.list-pecasReparo',['pecasReparo'=>[]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cadastro-pecasReparo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$pecasReparo = $this->setDataForm();
        //$pecasReparo = $this->save();
        return redirect()->route('pecasReparo.index');
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
        //$pecasReparo = $this->setIdReparo();
        return view('admin.edit-pecasReparo',['pecasReparo'=> []]);
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
        //$smatphone = $this->setIdReparo();
        //$pecasReparo = $this->setDataForm();
        //$pecasReparo = $this->save();
        return redirect()->route('pecasReparo.index');
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
        //$pecasReparo = setId($id);
        //$pecasReparo = delete();
        return redirect()->route('pecasReparo.index');
    }
}
