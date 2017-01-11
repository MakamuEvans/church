@extends('layouts.home')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb" style="background-color: #354e9d">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Events</a><i class="icon-angle-right"></i></li>
                        <li class="active">Add Event</li>
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
                        {!! Form::open(array('url'=>'addingevent','files'=>true,'class'=>'form-horizontal', 'method'=>'POST')) !!}
                            Title:
                            <input type="text" name="title" placeholder="Event Title" class="form-control" style="margin-bottom: 10px">
                            Cover Image:
                            {!! Form::file('image', null) !!}

                            <label style="margin-top: 10px">Type</label>
                            <select class="form-control" name="type">
                                <option value="Christian Ceremony">Christian Ceremony</option>
                                <option value="Wedding">Wedding</option>
                                <option value="dedication">Dedication</option>
                                <option value="Baptism">Baptism</option>
                                <option value="Home Coming">Home Coming</option>
                                <option value="Family Fun Day">Family Fun Day</option>
                                <option value="Family Marathon">Family Marathon</option>
                            </select>

                            <label style="margin-top: 10px">Content:</label>
                            <textarea name="text" id="text" class="form-control" value="">

                            </textarea>
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