<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

/*
 *
 *
 * http://localhost:8888/
 *
 */

    public function home()
    {

        return view('Pages.Home.home');

    }
/*
 *
 *
 *  http://localhost:8888/graph
 *
 */

    public function graph()
    {

        return view('Pages.Home.graph');
    }

    public function virtual_reality()
    {
    
        return view('Pages.Game.virtual_reality');

    }

    public function virtual_sensor()
    {

        if(isset($_GET['light_status'])) 
        {
            $score = $_GET['light_status'];
            $handle=fopen('my_file.txt', 'w');
            fwrite($handle, $score);
            //echo "A";
    //exec(' cd /home/piyush/my_projects/python_projects/ && python serial_send.py');
        }
    }
}
