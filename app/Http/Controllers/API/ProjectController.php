<?php

namespace App\Http\Controllers\API;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    
     */
    public function index()
    {
        $projects = Project::all();
        return response()->json();
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     
     */
    public function show($id)
    {
        //
    }

}