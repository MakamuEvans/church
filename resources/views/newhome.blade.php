@extends('layouts.home')
@section('content')

    @include('slider')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Welcome to Kakamega Friends' Church</h3>
                    <img src="{{url('images/pic1.png')}}" alt="" width="100%" height="auto" style="max-height: 400px" class="img-responsive" />


                    <h4>Brief History...</h4>
                    <p>
                        Kakamega Friends' Church is a Quaker Church founded in 1981 as EAYM.<br>
                        It is Located in Kenya, Kakamega County and Shirere ward, Amalemba Village.<br>
                        It has a population of 1,000 members with a residential Pastor at the compound.<br>
                        Within the Compound, we have Gorge Fox Resource centre and Kakamega Orphanage Center.
                        We believe in Quakers doctrine headed by Gorge Fox as our founder.

                    </p>
                    <!-- divider -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blankline">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end divider -->


                    <h4>Our Motto</h4>
                    <p>
                       Commitment and Service to the Church

                    </p>
                </div>

                <div class="col-lg-4">
                    @include('sidebar')
                </div>

            </div>


        </div>
    </section>

    @endsection