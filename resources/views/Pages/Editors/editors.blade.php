@extends('template')

@section('active_editors')

    active

@endsection

@section('page_title')

    EDITORS

@endsection

@section('page_subtitle')

    Choose the Editor you like

@endsection

@section('content')

    <div class="row">

        <!---------------------->
        <!--ARDUINO NANO-->
        <!---------------------->

        <div class="col-xs-6">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Sublime Text</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                    <div class="user-panel">
                        <img src="Dashboard/dist/img/sublime.jpg"  >
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    colourful text editor
                </div>
                <!-- /.box-body -->
            </div>
            <a href="http://localhost:8888/editor">
            <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >Choose</button>
            </a>
                <!-- /.box -->
        </div>

        <!---------------------->
        <!--STM32 F0 Discovery-->
        <!---------------------->



        <div class="col-md-6">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Blockly</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                    <div class="user-panel">
                        <img src="Dashboard/dist/img/blockly.png"  >
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    This is a unique graphical editor.
                </div>
                <!-- /.box-body -->

            </div>
            <a href="http://localhost:8888/blockly">
            <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >Choose</button>
            </a>
                <!-- /.box -->
        </div>



    </div>

@endsection


@stop
