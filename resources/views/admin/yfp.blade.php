@extends('layouts.home')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb" style="background-color: #354e9d">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Administration</a><i class="icon-angle-right"></i></li>
                        <li class="active">YFP</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <h3>YFP</h3>
                        <div class="col-md-6">
                            <img src="{{url('images/photo.png')}}" height="auto" width="100%"  alt="logo">
                        </div>

                        <h4>CHAIRMAN –TOM LWENYI</h4>
                        <p>
                        <blockquote>
                            <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
                        </blockquote>

                        </p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{url('images/ad/ilolo.jpg')}}" height="auto" width="100%" style="max-height: 400px;overflow-y: hidden;border-radius: 10px"  alt="logo">
                        </div>

                        <h4>PASTOR –ILOLO PATRICK</h4>
                        <p>
                        <blockquote>
                            <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
                        </blockquote>

                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    @include('sidebar')
                </div>

            </div>


        </div>
    </section>

@endsection