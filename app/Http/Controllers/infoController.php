<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=Information::all();
        return view('DemandeInfo.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DemandeInfo.create');
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
            'type'=>'required',
            'lieu'=>'required',
            'dateDemande'=>'required',
            'description'=>'required',

        ]);
            Information::create([
                'type'=>$request->type,
                'lieu'=>$request->lieu,
                'dateDemande'=>$request->dateDemande,
                'description'=>$request->description,
                'users_id' => auth()->id(),
            ]);
            return redirect()->route('suivieDemande')
            ->with('success','Demande d\'information a été crée avec succée ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        return view('DemandeInfo.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        return view('DemandeInfo.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        $request->validate([
            'type'=>'required',
            'lieu'=>'required',
            'dateDemande'=>'required',
            'description'=>'required',

        ]);
        $information->update($request->all());
        return redirect()->route('DemandeInfo.index')
        ->with('success','demande info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        $information->delete();
        return redirect()->route('DemandeInfo.index')
                        ->with('success','Demande deleted successfully');
    }
}
