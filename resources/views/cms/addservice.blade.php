@extends('layouts.app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
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
                    <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-8 col-md-offset-2" style="text-align: center">
                            @if (session('status'))
                                <div class="alert alert-success" style="text-align: center">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {!! Form::open(array('url'=>'addingservice', 'class'=>'form-horizontal', 'method'=>'POST')) !!}
                            <div class="col-md-6 col-md-offset-3">
                                Date:<input type="text" name="date" class="form-control">
                                Topic:<textarea name="topic" class="form-control">

                </textarea>
                                Verse:<input type="text" name="verse" class="form-control">
                                Speaker:<input type="text" name="speaker" class="form-control">
                                Leader:<input type="text" name="leader" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3" style="margin-top: 2%">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-plus"></i> Save
                                    </button>
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    @include('sidebar')
                </div>

            </div>


        </div>
    </section>

@endsection