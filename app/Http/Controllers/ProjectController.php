<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return request()->all(); //pour récupérer les informations du formulaire

        /* $project = new Project(); //on instancie un nouveau projet

         * $project->title = request('title'); //on set le titre avec la donnée envoyée du formulaire
         * $project->description = request('description');

         * $project->save(); // on enregistre dans la base */
        
        /* $validation = request()->validate([
         *     'title' => ['required', 'min:3', 'max:255'],
         *     'description' => 'required'
         * ]); */

        Project::create(request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required'
        ]));

        /* Project::create(request(['title','description'])); */

        return redirect('/project'); // méthode pour rediriger vers une autre url (en get par défaut)
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $project->title = request('title'); //on set le titre avec la donnée envoyée du formulaire
        $project->description = request('description');

        $project->update(request(['title', 'description'])); // on enregistre dans la base
        return redirect('/project'); // méthode pour rediriger vers une autre url (en get par défaut)

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();

        return redirect('/project');
    }
}
