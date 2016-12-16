@extends('layouts.home')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb" style="background-color: #354e9d">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Services</a><i class="icon-angle-right"></i></li>
                        <li class="active">Add Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">

                    <div class="col-lg-8">

                        <div class="col-lg-8">

                            @if (session('status'))
                                <div class="alert alert-success" style="text-align: center">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {!! Form::open(array('url'=>'addingservice', 'class'=>'form-horizontal', 'method'=>'POST')) !!}

                                Date:<input type="text" name="date" class="form-control">
                                Topic:<textarea name="topic" class="form-control">

                </textarea>
                                Verse:<input type="text" name="verse" class="form-control">
                                Speaker:<input type="text" name="speaker" class="form-control">
                                Leader:<input type="text" name="leader" class="form-control">


                                <div  style="margin-top: 2%">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-plus"></i> Save
                                    </button>
                                </div>

                            {!! Form::close() !!}

                        </div>
                    </div>


                <div class="col-lg-4">
                    @include('sidebar')
                </div>

            </div>


        </div>
    </section>

@endsection