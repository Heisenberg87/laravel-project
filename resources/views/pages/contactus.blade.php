@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <h3>Contact us</h3>
        <div class="row">
            <div class="col-xl-5 col-md-4 ml-2">
                <p class="text-muted">
                    <i class="fas fa-comments"></i>
                    Got a question? We'd love to hear your feedback.
                    Send us a message an we'll respond as soon as possible.
                </p>
                <h4 class="">We're Social!</h4>
                <p>
                    <i class="fab fa-facebook-square fa-1x"></i>
                    <i class="fab fa-twitter ml-2"> </i>
                    <i class="fab fa-linkedin-in ml-2"></i>
                    <i class="fas fa-rss  ml-2"></i>
                </p>
                <p class="text-muted"><i class="fas fa-mobile"></i> Business phone</p>

                <p> 000-111-222-333</p>

                <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Comic HQ</p>

                <p>121 King Street, Birmingham, UK B11 9TP - <a href="#">Map</a></p>

            </div>
            <div class="col-xl-6 col-md-7">
                {!! Form::open(['action' => 'ContactUsController@store']); !!}
                <div class="row" >
                    <div class="col">
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'name']) }}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' =>'email@example.com']) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('message', 'Message') }}
                    {{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' =>'Message']) }}
                </div>
                <div class="form-group">
                    {{Form::submit('Send', ['class' => 'btn btn-primary'])}}
                </div>
                {!! Form::close(); !!}
            </div>
        </div>
    </div>

@endsection