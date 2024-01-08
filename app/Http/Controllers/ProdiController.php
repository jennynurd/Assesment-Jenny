<?php

namespace App\Http\Controllers;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index(){
        $prodi = Prodi::all();
        return view('prodi.index',compact(['prodi']));
    }

    public function create(){
        return view('prodi.create');
    }

    public function store(Request $request){
        //dd($request->except(['_token','submit']));
        Prodi::create($request->except(['_token','submit']));
        return redirect('/prodi');
    }
}



