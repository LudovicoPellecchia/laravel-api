<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        //recupero i dati di project più i dati delle relazioni con altre tabelle
        $projects = Project::with(['type', 'technologies'])->paginate();

        //ritorno tutti questi dati in formato json
        return response()->json($projects);
    }

    public function show($slug){
        //recupero i dati di un singolo progetto
        $show_project = Project::where("slug", $slug)->
        with(['type','technologies'])->first();

        return response()->json($show_project);
    }
}
