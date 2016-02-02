@extends('template')

@section('active_choose_things')

    active

@endsection

@section('page_title')

    THINGS

@endsection

@section('page_subtitle')

    Choose the things for your project on Internet Of Things

@endsection

@section('content')

    <div class="row">

        <!---------------------->
        <!--ARDUINO NANO-->
        <!---------------------->

        <div class="col-xs-4">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Embedded Board</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                    <div class="user-panel">
                        <img src="Dashboard/dist/img/embedded.jpg"  >
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    These are things which includes embedded boards , sensor modules,iot kits .
                </div>
                <!-- /.box-body -->
            </div>
            <a href="http://localhost:8888/boards">
            <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >Choose</button>
                </a>
                <!-- /.box -->
        </div>

        <!---------------------->
        <!--STM32 F0 Discovery-->
        <!---------------------->



        <div class="col-md-4">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Cloud</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                    <div class="user-panel">
                        <img src="Dashboard/dist/img/cloud.jpg"  >
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    This is a unique platform where one can develop the algorithm which will integrate all the things together , do analytics and control all.
                </div>
                <!-- /.box-body -->

            </div>
            <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >Choose</button>
            <!-- /.box -->
        </div>


        <div class="col-md-4">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Android</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                    <div class="user-panel">
                        <img src="Dashboard/dist/img/android.jpg"  >
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    Here you will basically develop a simple android app which will be equipped with the hackincloud api which will help yoor android phone to talk with other things
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >Choose</button>

        </div>
    </div>

@endsection


@stop
