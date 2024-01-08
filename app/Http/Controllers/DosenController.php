<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class DosenController extends Controller
{
    public function index(){
        $dosen = Dosen::all();
         return view('dosen.index',compact(['dosen']));


     }

     public function create(){
        return view('dosen.create');
    }
    public function store1(Request $request){
        //dd($request->except(['_token','submit']));
        Dosen::create($request->except(['_token','submit']));
        return redirect('/dosen');
    }
}
