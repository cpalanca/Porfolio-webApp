<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of portfolio.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //$projects = Project::orderBy('created_at','DESC')->get();
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
        //Route Model Binding
        //return $id;
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project()
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated()); // ['title', 'url', 'description', 'approved']

        return redirect()->route('projects.index')->with('status', __('El proyecto fue creado con exito'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {

        $project->update($request->validated());
        //Project::create($request->validated()); // ['title', 'url', 'description', 'approved']

        return redirect()->route('projects.show', $project)->with('status', __('El proyecto fue actualizado con exito'));
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status', __('El proyecto fue eliminado con exito'));
    }
}
