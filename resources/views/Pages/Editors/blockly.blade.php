@extends('template')

@section('include')


        <!-- JS files for blockly -->

<script src="Dashboard/block/blockly_compressed.js"></script>
<script src="Dashboard/block/blocks_compressed.js"></script>
<script src="Dashboard/block/javascript_compressed.js"></script>
<script src="Dashboard/block/msg/js/en.js"></script>
<script src="Dashboard/block/generators/javascript/electronics.js"></script>
<script src="Dashboard/block/generators/javascript/procedures.js"></script>

<script src="Dashboard/block/arduino_compressed.js"></script>
<script src="Dashboard/block/Blob.js"></script>
<script src="Dashboard/block/spin.js"></script>
<script src="Dashboard/block/FileSaver.min.js"></script>
<script src="Dashboard/block/blockly_helper.js"></script>




@endsection

@section('active_blockly')

    active

@endsection

@section('page_title')

    BLOCKLY

@endsection

@section('page_subtitle')

    A popular GUI Editor for learners

@endsection

@section('content')

    <div id="blocklyDiv" style="height:400px; width: 1000px;" ></div>

    <!--BLOCKS-->

    <xml id="toolbox" style="display: none">
        <category name="Logic">
            <block type="controls_if"></block>
            <block type="logic_compare"></block>
            <block type="logic_operation"></block>
            <block type="logic_negate"></block>
            <block type="logic_boolean"></block>
        </category>
        <category name="Loops">
            <block type="controls_repeat_ext">
                <value name="TIMES"\>
                    <block type="math_number">
                        <field name="NUM">10</field>
                    </block>
                </value>
            </block>
            <block type="controls_whileUntil"></block>
        </category>
        <category name="Math">
            <block type="math_number"></block>
            <block type="math_arithmetic"></block>
        </category>
        <category name="Variables">
            <block type="variables_get"></block>
            <block type="variables_set"></block>
        </category>
        <category name="STM32">
            <block type="set_led"></block>
            <block type="my_delay"></block>
            <block type="my_set1_led"></block>
        </category>

        <category name="Functions" >

            <block type="procedures_defnoreturn"></block>

        </category>
        <category name="Arduino">
            <block type="base_delay">
                <value name="DELAY_TIME">
                    <block type="math_number">
                        <field name="NUM">1000</field>
                    </block>
                </value>
            </block>
            <block type="inout_highlow"></block>
            <block type="inout_digital_write"></block>
            <block type="inout_digital_read"></block>


        </category>
    </xml>


    <script>
        var workspace = Blockly.inject('blocklyDiv',
                {media: 'block/media/',
                    toolbox: document.getElementById('toolbox')});



        function showCode()
        {
            // Generate JavaScript code and display it.
            Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
            var code = Blockly.JavaScript.workspaceToCode(workspace);

            if(window.XMLHttpRequest)
            {
                xhr = new XMLHttpRequest();
            }
            else
            {
                xhr = new ActiveObject('Microsoft.XMLHTTP');
            }

            if(xhr)
            {
                alert('uploading code'+code);
                xhr.open("GET",'http://www.hackincloud.com/block/demos/generator/my_php.php?my_data='+code, true);
                xhr.send();


            }
            else
            {
                alert('php not ready');
            }



        }


        function showCode1()
        {
            // Generate JavaScript code and display it.
            Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
            var code = Blockly.Arduino.workspaceToCode();

            if(window.XMLHttpRequest)
            {
                xhr = new XMLHttpRequest();
            }
            else
            {
                xhr = new ActiveObject('Microsoft.XMLHTTP');
            }
            if(xhr)
            {

                alert("uploading Code to arduino Nano...."+code);
                xhr.open("GET",'http://www.hackincloud.com/block/demos/generator/my_php.php?my_data='+code, true);
                xhr.send();


            }
            else
            {
                alert('php not ready');
            }



        }


        function showCode2()
        {
            // Generate JavaScript code and display it.
            Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
            var code = Blockly.JavaScript.workspaceToCode(workspace);

            if(window.XMLHttpRequest)
            {
                xhr = new XMLHttpRequest();
            }
            else
            {
                xhr = new ActiveObject('Microsoft.XMLHTTP');
            }

            if(xhr)
            {
                alert('uploading code'+code);
                xhr.open("GET",'http://www.hackincloud.com/block/demos/generator/my_php.php?my_data='+code, true);
                xhr.send();


            }
            else
            {
                alert('php not ready');
            }



        }



        function discard() {
            var count = Blockly.mainWorkspace.getAllBlocks().length;
            if (count < 2 || window.confirm('Delete all ' + count + ' blocks?')) {
                Blockly.mainWorkspace.clear();

            }
        }

        function saveCode() {
            var fileName = window.prompt('What would you like to name your file?', 'BlocklyDuino')
            //doesn't save if the user quits the save prompt
            if(fileName){
                var blob = new Blob([Blockly.Arduino.workspaceToCode()], {type: 'text/plain;charset=utf-8'});
                saveAs(blob, fileName + '.ino');
            }
        }

        function save() {
            var xml = Blockly.Xml.workspaceToDom(Blockly.mainWorkspace);
            var data = Blockly.Xml.domToText(xml);
            var fileName = window.prompt('What would you like to name your file?', 'BlocklyDuino');
            // Store data in blob.
            // var builder = new BlobBuilder();
            // builder.append(data);
            // saveAs(builder.getBlob('text/plain;charset=utf-8'), 'blockduino.xml');
            if(fileName){
                var blob = new Blob([data], {type: 'text/xml'});
                saveAs(blob, fileName + ".xml");
            }
        }


        function show()
        {
            // Generate JavaScript code and display it.
            Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
            var code = Blockly.Arduino.workspaceToCode();
            alert(code);

        }



        function load(event)
        {
            var files = event.target.files;
            // Only allow uploading one file.
            if (files.length != 1) {
                return;
            }

            // FileReader
            var reader = new FileReader();
            reader.onloadend = function(event) {
                var target = event.target;
                // 2 == FileReader.DONE
                if (target.readyState == 2) {
                    try {
                        var xml = Blockly.Xml.textToDom(target.result);
                    } catch (e) {
                        alert('Error parsing XML:\n' + e);
                        return;
                    }
                    var count = Blockly.mainWorkspace.getAllBlocks().length;
                    if (count && confirm('Replace existing blocks?\n"Cancel" will merge.')) {
                        Blockly.mainWorkspace.clear();
                    }
                    Blockly.Xml.domToWorkspace(Blockly.mainWorkspace, xml);
                }
                // Reset value of input after loading because Chrome will not fire
                // a 'change' event if the same file is loaded again.
                document.getElementById('load').value = '';
            };
            reader.readAsText(files[0]);
        }


        function auto_save_and_restore_blocks() {
            // Restore saved blocks in a separate thread so that subsequent
            // initialization is not affected from a failed load.

            // Init load event.
            var loadInput = document.getElementById('load');
            loadInput.addEventListener('change', load, false);
            document.getElementById('fakeload').onclick = function() {
                loadInput.click();
            };
        }

        function copy() {

            Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
            var code = Blockly.Arduino.workspaceToCode();

            window.prompt("PRESS: Ctrl+C, Enter", code);
        }




    </script>










@endsection


@section('button_footer')

    <div class="box-body">

        <a class="btn btn-app">
            <i class="fa fa-play"></i> Run
        </a>


        <a class="btn btn-app" onclick="compile_blockly()">
            <i class="fa fa-repeat"></i> Compile
        </a>


        <div class="row">
            <div class="col-md-12 ">
                <div class="box box-default collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Compile Window</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" ><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="compiler">

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

            </div>

        </div>

    </div>

@endsection


@stop
