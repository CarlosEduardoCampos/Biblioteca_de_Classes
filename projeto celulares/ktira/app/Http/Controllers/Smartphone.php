<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Smartphone extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.list-smartphone',['smartphone'=> Smartphone::listAll()]);
        return view('admin.list-smartphone',['smartphone'=>[]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cadastro-smartphone');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$smartphone = $this->setDataForm();
        //$smartphone = $this->save();
        //return redirect()->route('smartphone.index');
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
        //$smartphone = $this->setIdCelular();
        //return view('admin.edit-smartphone','smartphone'=> $this->get());
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
        //$smatphone = $this->setIdCelular();
        //$smartphone = $this->setDataForm();
        //$smartphone = $this->save();
        return redirect()->route('smartphone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$smartphone = setId($id);
        //$smartphone = delete();
        //return redirect()->route('smartphone.index');
    }
}
