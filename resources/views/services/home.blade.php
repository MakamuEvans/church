@extends('layouts.home')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Services</a><i class="icon-angle-right"></i></li>
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

                        <div class="col-md-6">
                            @foreach($currentservice as $current)
                                <div class="row faa">
                                    <h2 style="color: skyblue">This Week</h2>
                                    <h3><i class="fa fa-clock"></i> {{$current->date}}</h3>
                                    <div class="row" style="font-size: 20px">
                                        <b>TOPIC:</b><br>
                                        {{$current->topic}}<br>
                                        <b>TEXT:</b><br>
                                        <i>{{$current->verse}}</i><br>
                                        <b>SPEAKER:</b><br>
                                        {{$current->speaker}}<br>
                                        <b>SERVICE LEADER:</b><br>
                                        {{$current->leader}}<br>
                                    </div>
                                </div>
                            @endforeach

                            <div class="row">
                                <h3 style="color: skyblue">Previous Sermons >></h3>
                                @foreach($allservices as $all)
                                    <div class="row" style="background-color: skyblue; margin-bottom: 1%;border-radius: 10px">
                                        {{$all->date}}<br>
                                        <h2>{{$all->topic}}</h2>
                                    </div>

                                @endforeach
                            </div>

                        </div>
                        <div class="col-md-6" style="text-align: left;padding-left: 10%">
                            <div class="row">
                                <h2 style="color: skyblue">Our Order of Services</h2>

                                9:15	-PRAISE AND WORSHIP<br>

                                9:30	-OPENING PRAYER
                                <div class="row" style="padding-left: 50px">
                                    -2 HYMNS ON THE BULLETIN<br>
                                    -SCRIPTURE READING<br>
                                    -ANNOUNCEMENTS<br>
                                    -INTROD. OF VISITORS<br>
                                    -PRAISE AND WORSHIP<br>
                                    -INTERCESSION BY<br>
                                    -SERMON: PST. COLLINS<br>
                                    -PASTORAL PRAYERS<br>
                                    -OFFERTORY<br>
                                    -CLOSING BENEDICTION<br>
                                    -VISITORS MEET LEADERS<br>
                                </div>


                            </div>
                            <div class="row" style="margin-top: 2%">
                                <h2 style="color: skyblue">Our Weekly Program</h2>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr bgcolor="black" style="color: white">

                                        <td>Day</td>
                                        <td>Time</td>
                                        <td>Event</td>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Monday</td>
                                        <td>5:00pm-6:00pm</td>
                                        <td>Youth fellowship</td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>10:00 am-2:00pm</td>
                                        <td>Pastoral counseling</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

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