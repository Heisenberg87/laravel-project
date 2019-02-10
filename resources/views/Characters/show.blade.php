@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$data->name}}</h5>
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xl-3">
                        <img class="img-fluid img-thumbnail border-light" src="{{$data->thumbnail->path . '.' . $data->thumbnail->extension}}" alt="Card image cap" />
                    </div>
                    <div class="col-md-7 col-sm-12 col-xl-9">
                        @if($data->description)
                            <p class="card-text">{!! $data->description !!}</p>
                        @endif
                        <div class="row">
                            @if(count($comics))
                                @foreach($comics as $comic)
                                    <div class="col-md-4 col-sm-4 col-xl-3" >
                                        <a data-fancybox="gallery" data-type="image" href="{{$comic->thumbnail->path . '.' . $comic->thumbnail->extension}}" class="grouped_elements">
                                            <img class="img-fluid img-thumbnail border-light" src="{{$comic->thumbnail->path . '.' . $comic->thumbnail->extension}}" alt="Card image cap" />
                                        </a>
                                        <p class="h6 text-dark">{{$comic->title}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {

            $("a.grouped_elements").fancybox({
                animationEffect : 'fade',
                thumbs : {
                    autoStart   : true,                  // Display thumbnails on opening
                    hideOnClose : true,                   // Hide thumbnail grid when closing animation starts
                    parentEl    : '.fancybox-container',  // Container is injected into this element
                    axis        : 'y'                     // Vertical (y) or horizontal (x) scrolling
                },
            });
        })
    </script>


@endsection