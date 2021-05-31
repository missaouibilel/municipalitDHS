<?php

namespace App\Http\Controllers;

use App\Models\Permis;
use Illuminate\Http\Request;
//use \PDF;

class PermisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permis=Permis::all();
        return view('permis.index',compact('permis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permis.create');
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
            'institutionAutorise'=>'required',
        'numIdentificationFiscale'=>'required',
        'qualitéDéclarant'=>'required',
        'etatImmobilier'=>'required',
        'adresse'=>'required',
        'superficieTerrainNonBati'=>'required',
        'valeurCommerciale'=>'required',
        'surfaceCouverte'=>'required',
        'compositionImmobilierEtSesDépendances'=>'required',
        'teintureUtilisation'=>'required',
        'activitéMentionnée'=>'required',
        'servicesDispo'=>'required',
        ]);
        Permis::create([
             'institutionAutorise'=>$request->institutionAutorise,
        'numIdentificationFiscale'=>$request->numIdentificationFiscale,
        'qualitéDéclarant'=>$request->qualitéDéclarant,
        'etatImmobilier'=>$request->etatImmobilier,
        'adresse'=>$request->adresse,
        'superficieTerrainNonBati'=>$request->superficieTerrainNonBati,
        'valeurCommerciale'=>$request->valeurCommerciale,
        'surfaceCouverte'=>$request->surfaceCouverte,
        'compositionImmobilierEtSesDépendances'=>$request->compositionImmobilierEtSesDépendances,
        'teintureUtilisation'=>$request->teintureUtilisation,
        'activitéMentionnée'=>$request->activitéMentionnée,
        'servicesDispo'=> implode(' & ', (array) $request->get('servicesDispo')),
        'users_id'=>auth()->id(),
        ]);
        return redirect()->route('suiviePermis')
        ->with('success','Demande d\'information a été crée avec succée ');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permis  $permis
     * @return \Illuminate\Http\Response
     */
    public function show(Permis $permis)
    {
        return view('permis.show',compact('permis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permis  $permis
     * @return \Illuminate\Http\Response
     */
    public function edit(Permis $permis)
    {
        return view('permis.edit',compact('permis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permis  $permis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permis $permis)
    {
        $request->validate([
            'institutionAutorise'=>'required',
        'numIdentificationFiscale'=>'required',
        'qualitéDéclarant'=>'required',
        'etatImmobilier'=>'required',
        'adresse'=>'required',
        'superficieTerrainNonBati'=>'required',
        'valeurCommerciale'=>'required',
        'surfaceCouverte'=>'required',
        'compositionImmobilierEtSesDépendances'=>'required',
        'teintureUtilisation'=>'required',
        'activitéMentionnée'=>'required',
        'servicesDispo'=>'required',
        ]);
        $permis->update($request->all());
        return redirect()->route('permis.index')
        ->with('success','permis updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permis  $permis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permis $permis)
    {
        $permis->delete();
        return redirect()->route('permis.index')
        ->with('success','permis deleted successfully');
    }

   /* public function download(){
        $pdf=PDF::loadView('pdf');
        return $pdf->download('download.pdf');
    }*/
}
