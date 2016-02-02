@extends('template')

    @section('active_boards')

        active

    @endsection

    @section('page_title')

    BOARDS

    @endsection

    @section('page_subtitle')

        Choose your favourite board to work with

    @endsection

    @section('content')

        <div class="row">

            <!---------------------->
            <!--ARDUINO NANO-->
            <!---------------------->

            <div class="col-md-3">
                <div class="box box-default collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Arduino Nano</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                        <div class="user-panel">
                            <img src="Dashboard/dist/img/rsz_arduino_nano.jpg" class="img-circle" >
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        The Arduino Nano is a small, complete, and breadboard-friendly board based on the ATmega328 (Arduino Nano 3.x) or ATmega168 (Arduino Nano 2.x). It has more or less the same functionality of the Arduino Duemilanove, but in a different package. It lacks only a DC power jack, and works with a Mini-B USB cable instead of a standard one. The Nano was designed and is being produced by Gravitech.
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
                <a href="http://localhost:8888/editors">
                <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >Choose</button>
                </a>
            </div>

            <!---------------------->
            <!--STM32 F0 Discovery-->
            <!---------------------->



            <div class="col-md-3">
                <div class="box box-default collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">STM32 F0 Discovery</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                        <div class="user-panel">
                            <img src="Dashboard/dist/img/stm32f0_discovery.jpg"  >
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        The STM32F0DISCOVERY helps you to discover the STM32F0 Cortex-M0 features and to develop your applications easily. It includes everything required for beginners and experienced users to get started quickly.
                        <br>
                        Based on the STM32F051R8T6, it includes an ST-LINK/V2 embedded debug tool, LEDs, pushbuttons and an additional prototyping board for easy connection of additional components and modules.
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >Choose</button>
            </div>


        </div>

        @endsection


    @stop
