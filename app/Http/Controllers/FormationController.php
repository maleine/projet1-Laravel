<?php

namespace App\Http\Controllers;
use App\Models\formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        $liste = Formation::all();
          return view ("list_formation",['liste'=>$liste]);
       }
}
