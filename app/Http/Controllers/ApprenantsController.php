<?php

namespace App\Http\Controllers;
use App\Models\apprenants;
use Illuminate\Http\Request;

class ApprenantsController extends Controller
{
    public function index(){
     $liste = Apprenants::all();
       return view ("list_apprenant",['liste'=>$liste]);
    }
}
