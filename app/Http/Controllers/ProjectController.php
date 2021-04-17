<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return view('projects', ['projects' => Project::all()]);
    }

    public function show($id)
    {
        return view('project', ['project' => Project::find($id)]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required|unique:projects,project_name|max:30',
            'project_info' => 'required|max:255',
        ]);

        $pr = new Project();
        $pr->project_name = $request['project_name'];
        $pr->project_info = $request['project_info'];

        return ($pr->save() !== 1) ?
            redirect('/projects')->with('status_success', 'Projektas sukurtas!') :
            redirect('/projects')->with('status_error', 'Projekto sukurti nepavyko!');
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required|unique:projects,project_name,' . $id . ',id|max:30',
            'project_info' => 'required|max:255',
        ]);

        $pr = Project::find($id);
        $pr->project_name = $request['project_name'];
        $pr->project_info = $request['project_info'];
        return ($pr->save() !== 1) ?
            redirect('/projects/' . $id)->with('status_success', 'Projektas pakeistas!') :
            redirect('/projects/' . $id)->with('status_error', 'Projektas nepakeistas!');
    }

    public function destroy($id)
    {
        Project::destroy($id);
        return redirect('/projects')->with('status_success', 'Projektas ištrintas!');
    }
}
