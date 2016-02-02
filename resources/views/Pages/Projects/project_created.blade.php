@extends('template')

@section('active_projects')

    active

@endsection

@section('page_title')

    CREATE PROJECT


@endsection

@section('page_subtitle')

    CREATE YOUR IOT PROJECT
    <br><br>

    <div class="alert alert-success alert-dismissible row">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Congrats!!</h4>
        Project Created Successfully.
    </div>

    @endsection




    @section('content')


            <!--start of box-->
    <div id="create_project">
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
                            <i class="fa fa-check "></i> Give Project Name</label>

                        <br>
                    </div>

                    <div class="col-xs-3 table-responsive">

                        {!! Form::open(['url'=>'/projects']) !!}

                        <input type="text" class="form-control " placeholder="Enter Project Name" name="project_name">
                        <br>

                        <button type="submit" class="btn btn-block btn-success .btn-sm " >Create Project</button>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="projects">

        @if(count($projects))
            <br>
            <h3>EXISTING PROJECTS</h3>
            <div class="row">
                @foreach($projects as $project)

                    <div class="col-md-3">
                        <div class="box box-success box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{$project['name']}}</h3>
                                <div class="box-tools pull-right">
                                    <button type="submit" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                CREATED AT <br>
                                {{$project['created_at']}}
                            </div>
                            <a href="http://localhost:8888/projects/{{$project['id']}}">
                                <button type="button" class="btn btn-block btn-success .btn-sm " >Choose</button>
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
