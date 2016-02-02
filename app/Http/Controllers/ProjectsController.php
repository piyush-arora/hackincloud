<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Thing;

class ProjectsController extends Controller
{

    /*
     *
     * http://localhost:8888/projects
     *
     *
     */

    public function home()
    {
        $projects = Project::all()->toArray();

        return view('Pages.Projects.home',compact('projects'));
    }

    /*
     *
     * http://localhost:8888/projects    (POST)
     *
     *
     */



    public function create_project()
    {
        $project_name = $_POST['project_name'];

        $project = Project::create(['name'=>$project_name]);

        $projects = Project::all()->toArray();

        return view('Pages.Projects.project_created',compact('projects'));

    }


/*
 *
 *
 * http://localhost:8888/projects/project_id
 *
 */


    public function project_details($project_name)
    {

        $things = Thing::where('project_id',$project_name)->get();

        return view('Pages.Projects.project_details',compact('things'));

    }



}
