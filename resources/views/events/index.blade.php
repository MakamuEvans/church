@extends('layouts.home')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb" style="background-color: #354e9d">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Events</a><i class="icon-angle-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($events as $value)
                    <article>
                        <div class="post-image">
                            <div class="post-heading">
                                <h3><a href="#">{{$value->title}}</a></h3>
                            </div>
                            <img src="{{url('/public/eventimages/'.$value->image)}}" alt="" class="img-responsive" />
                        </div>
                        <p>
                        {!!str_limit($value->content, 200)!!}
                        </p>
                        <div class="bottom-article">
                            <ul class="meta-post">
                                <li><i class="fa fa-calendar"></i><a href="#"> {{$value->created_at}}</a></li>
                                <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                <li><i class="fa fa-folder-open"></i><a href="#"> {{$value->type}}</a></li>
                            </ul>
                            <a href="{{url('events/'.$value->id.'/'.str_slug($value->title, '-'))}}" class="readmore pull-right">Continue reading <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                    @endforeach


                        {!! $events->render() !!}
                    <div class="clear"></div>
                </div>
                <div class="col-lg-4">
                    @include('sidebar')
                </div>
            </div>
        </div>
    </section>
    @endsection
