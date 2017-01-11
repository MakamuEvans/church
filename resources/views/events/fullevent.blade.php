@extends('layouts.home')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb" style="background-color: #354e9d">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Events/{{$value->title}}</a><i class="icon-angle-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                        <article>
                            <div class="post-image">
                                <div class="post-heading">
                                    <h3><a href="#">{{$value->title}}</a></h3>
                                </div>
                                <div class="bottom-article">
                                    <ul class="meta-post">
                                        <li><i class="fa fa-calendar"></i><a href="#"> {{$value->created_at}}</a></li>
                                        <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                        <li><i class="fa fa-folder-open"></i><a href="#"> {{$value->type}}</a></li>
                                    </ul>

                                </div>
                                <img src="{{url('/public/eventimages/'.$value->image)}}" alt="" class="img-responsive" />
                            </div>
                            <p>
                                {!!$value->content!!}
                            </p>

                        </article>


                    <div class="clear"></div>
                </div>
                <div class="col-lg-4">
                    @include('sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
