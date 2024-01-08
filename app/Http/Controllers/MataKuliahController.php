<?php

namespace App\Http\Controllers;

use App\Models\Mata_Kuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(){
        $mata_kuliah = Mata_Kuliah::all();
        return view('mata_kuliah.index',compact(['mata_kuliah']));
    }
}
