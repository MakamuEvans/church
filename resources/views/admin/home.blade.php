@extends('layouts.app')
@section('content')
    <div class="col-md-10 col-md-offset-1 faa" style="text-align: center">
        <div class="row">
            <ol class="breadcrumb" style="margin-bottom: 0%;color: blue;font-size: 30px;text-align: left;background-color: transparent">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="#">Administration Structure</a></li>
            </ol>
        </div>
        <div class="row" style="margin-top: 2%;background-color: whitesmoke;border-radius: 10px">
            <div class="row">
                <h3 style="color: skyblue">QUAKERMEN</h3>
            </div>
            <div class="col-md-6">
                <div class="col-md-6">
                    <img src="{{url('images/photo.png')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                </div>
                <div class="col-md-6" style="text-align: left">
                    <h4>CHAIRMAN –TOM LWENYI</h4><br>
                    <h6>"-my quote"</h6>
                </div>


            </div>
            <div class="col-md-6" style="text-align: left">
                <div class="col-md-6">
                    <img src="{{url('images/ad/ilolo.jpg')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                </div>
                <div class="col-md-6" style="text-align: left">
                    <h4>PASTOR –ILOLO PATRICK</h4><br>
                    <h6>"-my quote"</h6>
                </div>
        </div>
            </div>

            <div class="row" style="margin-top: 2%;background-color: whitesmoke">
                <div class="row">
                    <h3 style="color: skyblue">USFW</h3>
                </div>
                <div class="col-md-4">
                    <div class="col-md-6">
                        <img src="{{url('images/photo.png')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                    </div>
                    <div class="col-md-6" style="text-align: left">
                        <h4>CHAIRPERSON-FLORENCE LIHANDA</h4><br>
                        <h6>"-my quote"</h6>
                    </div>


                </div>
                <div class="col-md-4" style="text-align: left">
                    <div class="col-md-6">
                        <img src="{{url('images/ad/anno.jpg')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                    </div>
                    <div class="col-md-6" style="text-align: left">
                        <h4>VICE CHAIR-EVERLYNE ANNO</h4><br>
                        <h6>"-my quote"</h6>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: left">
                    <div class="col-md-6">
                        <img src="{{url('images/photo.png')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                    </div>
                    <div class="col-md-6" style="text-align: left">
                        <h4>PASTOR –WILFREDA AGESA</h4><br>
                        <h6>"-my quote"</h6>
                    </div>
                </div>
            </div>

        <div class="row" style="margin-top: 2%;background-color: whitesmoke;border-radius: 10px">
            <div class="row">
                <h3 style="color: skyblue">Social Concern</h3>
            </div>
            <div class="col-md-6">
                <div class="col-md-6">
                    <img src="{{url('images/ad/herman.jpg')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                </div>
                <div class="col-md-6" style="text-align: left">
                    <h4>CHAIRMAN-HERMAN MBALASI</h4><br>
                    <h6>"-my quote"</h6>
                </div>


            </div>
            <div class="col-md-6" style="text-align: left">
                <div class="col-md-6">
                    <img src="{{url('images/photo.png')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                </div>
                <div class="col-md-6" style="text-align: left">
                    <h4>VICE CHAIR-JULIE LUGONZO</h4><br>
                    <h6>"-my quote"</h6>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 2%;background-color: whitesmoke">
            <div class="row">
                <h3 style="color: blue">Youth Friends' Program</h3>
            </div>
            <div class="col-md-4">
                <div class="col-md-6">
                    <img src="{{url('images/photo.png')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                </div>
                <div class="col-md-6" style="text-align: left">
                    <h4>CHAIRPERSON-LAURA LIGAMI</h4><br>
                    <h6>"-my quote"</h6>
                </div>


            </div>
            <div class="col-md-4" style="text-align: left">
                <div class="col-md-6">
                    <img src="{{url('images/photo.png')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                </div>
                <div class="col-md-6" style="text-align: left">
                    <h4>VICE CHAIR- JOTHAM MULAMA</h4><br>
                    <h6>"-my quote"</h6>
                </div>
            </div>
            <div class="col-md-4" style="text-align: left">
                <div class="col-md-4">
                    <img src="{{url('images/ad/collins.jpg')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                </div>
                <div class="col-md-8" style="text-align: left">
                    <h4>PASTOR-COLLINS INDECHE,</h4><br>
                    <h6>"-my quote"</h6>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 2%;background-color: whitesmoke;border-radius: 10px">
            <div class="row">
                <h3 style="color: skyblue">English Service</h3>
            </div>
            <div class="col-md-6">
                <div class="col-md-6">
                    <img src="{{url('images/ad/edgar.jpg')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                </div>
                <div class="col-md-6" style="text-align: left">
                    <h4>CHAIRMAN-EDGAR LUGALIA</h4><br>
                    <h6>"-my quote"</h6>
                </div>


            </div>
            <div class="col-md-6" style="text-align: left">
                <div class="col-md-6">
                    <img src="{{url('images/photo.png')}}" height="150px" width="auto" style="border-radius: 10px" alt="logo">
                </div>
                <div class="col-md-6" style="text-align: left">
                    <h4>VICECHAIR-RITA AFANDI</h4><br>
                    <h6>"-my quote"</h6>
                </div>
            </div>
        </div>

    </div>
@endsection