@extends('layouts.app')


@section('content')
    <div class="container">
        @if(isset($symbols))
        <form action="/currency/search" method="POST">
            @csrf
            <div class="form-group">
                <label>From:</label>
                <select class="form-control" name="from" id="from">
                    @foreach($symbols as $symbol)
                        <option value="{{$symbol}}" {{ request('from') == $symbol ? 'selected=selected' : '' }} >{{$symbol}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>To:</label>
                <select class="form-control" name="to" id="to">
                    @foreach($symbols as $symbol)
                        <option value="{{$symbol}}" {{ request('to') == $symbol ? 'selected=selected' : '' }}>{{$symbol}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @endif
        @if(isset($data))
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">{{$data->text}}</h5>
                    <p class="card-text">Date: {{date('d-m-y H:i', $data->timestamp)}}</p>
                </div>
            </div>
        @endif
    </div>
@endsection()