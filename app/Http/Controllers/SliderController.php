<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use App\Models\Reclamation;
class SliderController extends Controller
{

    public function index(){
        $sl=Slider::all();
       // return view ('index')->with('sl',$sl);

           // $Rec= DB::table('reclamations')->get();
           $Rec=Reclamation::all();
           // return view ('index')->with('Rec',$Rec);
            return view('welcome', compact('Rec','sl'));
    }
    public function indexDashboard(){
        $sl=Slider::all();
        $Rec=Reclamation::all();
        return view('sliderDashboard', compact('Rec','sl'));
    }

}
