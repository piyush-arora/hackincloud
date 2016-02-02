@extends('template')

@section('active_create_things')

    active

@endsection

@section('page_title')

    CREATE THING

@endsection

@section('page_subtitle')

    CREATE YOUR THING

    @endsection




    @section('content')


            <!--start of box-->
    <div id="create_thing">
        <div class="box">
            <div class="box-header with-border">
                <!--minimise-->
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>

                    <!--close-->

                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>


                <div class="box-body ">
                    <div class="form-group has-success">

                        <label class="control-label " for="inputSuccess">
                            <i class="fa fa-check "></i> Give Thing Name</label>

                        <br>
                    </div>

                    <div class="col-xs-3 table-responsive">

                        {!! Form::open(['url'=>'http://localhost:8888/things']) !!}

                        <input type="text" class="form-control " placeholder="Enter Project Name" name="thing_name">
                        <br>

                        <input type="submit" value="Create Thing" class="btn btn-block btn-success .btn-sm " ></input>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="things">

        @if(count($things))
            <br>
            <h3>EXISTING THINGS</h3>
            <div class="row">
                @foreach($things as $thing)

                    <div class="col-md-3">
                        <div class="box box-success box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{$thing['name']}}</h3>
                                <div class="box-tools pull-right">
                                    <button type="submit" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                CREATED AT <br>
                                {{$thing['created_at']}}
                            </div>
                            <a href="http://localhost:8888/choose_things">
                                <button type="submit" class="btn btn-block btn-success .btn-sm " >Choose</button>
                            </a>
                        </div>
                        <!-- /.box -->


                    </div>

                @endforeach
            </div>
    </div>
    @else
        THERE ARE NO PROJECTS


    @endif


@endsection



@stop
