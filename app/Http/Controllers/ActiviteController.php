<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
//use \PDF;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Activ=Activite::all();
        return view('Activites.sportive.index',compact('Activ'));
    }
    public function indexCulturel()
    {
        $Activ=Activite::all();
        return view('Activites.culturel.index',compact('Activ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Activites.create');
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
            'etat'=>'required',
            'type'=>'required',
            'lieu'=>'required',
            'responsable'=>'required',
            'description'=>'required',
        ]);
        Activite::create($request->all());
        return redirect()->route('suivieActivite')
        ->with('success','Activité a été crée avec succée ');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activite  $Activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $Activ)
    {
        return view('Activites.show',compact('Activ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activite  $Activ
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $Activ)
    {
        return view('Activite.edit',compact('Activ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activite  $Activ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activite $Activ)
    {
        $request->validate([
            'date'=>'required',
            'etat'=>'required',
            'type'=>'required',
            'lieu'=>'required',
            'responsable'=>'required',
            'description'=>'required',
        ]);
        $Activ->update($request->all());
        return redirect()->route('Activite.index')
        ->with('success','Activite updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activite  $Activ
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $Activ)
    {
        $Activ->delete();
        return redirect()->route('Activite.index')
        ->with('success','Activite deleted successfully');
    }

}
