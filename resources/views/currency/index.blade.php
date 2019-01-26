@extends('layouts.app')


@section('content')
    <div class="container">
        @if(isset($symbols))
            <div class="form-group">
                {{Form::label('from','From')}}
                {{Form::select('from', $symbols, request('from'), ['class' => 'form-control' , 'id' => 'from'])}}
            </div>
            <div class="form-group">
                {{Form::label('to','To')}}
                {{Form::select('to', $symbols, request('to'), ['class' => 'form-control' , 'id' => 'to'])}}
            </div>
            {{Form::button('Exchange', ['class' => 'btn btn-primary', 'id' => 'exchange'])}}
        @endif
        <div class="card mt-2 d-none">
            <div class="card-body">
            </div>
        </div>
    </div>

    <script type="text/javascript">

        jQuery('#exchange').on('click', function() {

            //ajax call
            $.ajax({
                type: 'get',
                url: '{{url('/currency/search')}}',
                data: {
                    'from': $('#from').val(),
                    'to'  : $('#to').val()
                },
                success: function(data) {
                    var data = JSON.parse(data);
                    jQuery('.card-body').html("<h5 class='card-title'>" + data.text + "</h5><p class='card-text'>Date:" + data.date + "</p>");
                    jQuery('.card').removeClass('d-none');
                }
            });
        });
    </script>
@endsection()