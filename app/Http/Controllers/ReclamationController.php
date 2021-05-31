<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Reclamation::all();
        return view('reclamation.index',compact('data'));
    }
     public function sliderReclam()
     {
        $data=Reclamation::all();
        return view('dashboard',compact('data'));
     }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('reclamation.create');
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
            'description'=>'required',
            'dateReclamation'=>'required',
            'imageRec' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->imageRec->extension();
        $request->imageRec->move(public_path('images'), $imageName);
        Reclamation::create([
            'description'=>$request->input('description'),
            'dateReclamation'=>$request->input('dateReclamation'),
            'imageRec'=>$imageName ,
            'users_id' => auth()->id(),

        ]);
        return redirect()->route('suivieReclamation')
        ->with('success','Reclamation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamation $reclamation)
    {

            return view('reclamation.show',compact('reclamation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamation $reclamation)
    {
        return view('reclamation.edit',compact('reclamation'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'description'=>'required',
            'dateReclamation'=>'required',

        ]);
        $reclamation->update($request->all());

        return redirect()->route('Reclamation.index')
                        ->with('success','Reclamation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();

        return redirect()->route('reclamation.index')
                        ->with('success','Reclamation deleted successfully');
    }
}
