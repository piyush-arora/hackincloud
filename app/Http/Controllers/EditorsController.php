<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditorsController extends Controller
{

    /*
     *
     *
     *
     *
     * http://localhost:8888/editors
     */

    public function home()
    {

        return view('Pages.Editors.editors');
    }


    /*
     *
     * http://localhost:8888/editor
     *
     */
    public function editor()
    {
        $compile = exec(' platformio run &> compile_result.txt');

        $filename = "compile_result.txt";
        $handle = fopen($filename, "r");
        $compile_result = fread($handle, filesize($filename));
        fclose($handle);


        return view('Pages.Editors.editor',compact('compile_result'));
    }

    /*
     *
     * http://localhost:8888/blockly
     *
     *
     */
    public function blockly()
    {
        return view('Pages.Editors.blockly');

    }



    /*
     *
     * http://localhost:8888/editor/compile/test
     *
     */


    public function compile()
    {

        if($_GET['my_data'])
        {
            $code=$_GET['my_data'];
            $handle=fopen('./src/blink.pde','w');
            fwrite($handle,$code);
            fclose($handle);

        }


        $compile = exec(' platformio run && platformio run --target upload &> compile_result.txt');

        $filename = "compile_result.txt";
        $handle = fopen($filename, "r");
        $compile_result = fread($handle, filesize($filename));
        fclose($handle);

        echo $compile_result;
        //        return view('Pages.editor',compact('compile_result'));


    }





}
