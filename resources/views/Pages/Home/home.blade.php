@extends('template')

@section('page_title')
    WELCOME TO HACK IN CLOUD
@endsection

@section('page_subtitle')
    India's First IOT LAB For Electronics And Embedded System
    @endsection

    @section('content')


        <i class="fa fa-video-camera bg-maroon"></i>


            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PrXPVVaoUKk" frameborder="0" allowfullscreen></iframe>
            </div>
            <br>
            <a href="/projects">
                <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >GET STARTED</button>
            </a>

            <br>


@endsection


@stop
