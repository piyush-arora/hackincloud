<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Thing;

class ThingsController extends Controller
{
    public function index()
    {
        return view('Pages.Things.things');

    }

    public function create_things()
    {

        $things = Thing::all()->toArray();

        return view('Pages.Things.create_things',compact('things'));
    }

    public function thing_created()
    {
        $thing_name = $_POST['thing_name'];

        $thing = new Thing;
        $thing->name=$thing_name;
        $thing->project_id=11;
        $thing->save();

        return view('Pages.Things.things_created');

    }

    public function boards()
    {
        return view('Pages.Things.boards');

    }

}
