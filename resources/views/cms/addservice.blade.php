@extends('layouts.app')
@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <ol class="breadcrumb" style="margin-bottom: 0%;color: blue;font-size: 30px;text-align: left;background-color: transparent">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="#">Add Service</a></li>
            </ol>
        </div>
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
@endsection