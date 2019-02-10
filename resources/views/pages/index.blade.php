@extends('layouts.app')

@section('content')
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://beat.gl/wp-content/uploads/2016/09/2000-X-500-TICKET-announcement.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/images/slideshow/slide1.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://beat.gl/wp-content/uploads/2016/09/2000-X-500-TICKET-announcement.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @if(count($news) > 0)
            <div class="container-fluid bg-primary">
                <div class="bg-primary mt-2 mb-2">
                    <div class="row">
                        <div class="col-sm text-white p-5 text-center carousel-content">
                            <div id="carouselExampleSlidesOnlyy" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($news as $news_item)

                                        <div class="carousel-item @if ($loop->first) {{'active'}} @endif">
                                            <h2>{{$news_item->title}}</h2>
                                            <p>
                                                {{$news_item->body}}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="container-fluid text-center" >
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <a href="#" class="d-block mb-4 h-50">
                        <img class="img-fluid img-thumbnail" src="https://image.freepik.com/free-vector/beautiful-pop-art-colorful-comic-book-template_1035-14155.jpg" alt="First slide">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <a href="#" class="d-block mb-4 h-50">
                        <img class="img-fluid img-thumbnail" src="https://image.freepik.com/free-vector/comics-book-page-bubbles-composition-print_1284-9838.jpg" alt="First slide">
                    </a>
                </div> <div class="col-sm-6 col-md-6 col-lg-3">
                    <a href="#" class="d-block mb-4 h-50">
                        <img class="img-fluid img-thumbnail" src="https://image.freepik.com/free-vector/comic-backgrounds_23-2147508673.jpg" alt="First slide">
                    </a>
                </div>
                 <div class="col-sm-6 col-md-6 col-lg-3">
                    <a href="#" class="d-block mb-4 h-50">
                        <img class="img-fluid img-thumbnail" src="https://image.freepik.com/free-vector/comic-book-page-elements_23-2147493624.jpg" alt="First slide">
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-sm-3 col-md-3 bg-warning" />
                1
                </div>
                <div class="col-6 col-sm-3 col-md-3 bg-info" />
                2
                </div>
                 <div class="col-6 col-sm-3 col-md-3 bg-danger" />
                3
                </div>
                <div class="col-6 col-sm-3 col-md-3 bg-dark" />
                4
                </div>
            </div>
        </div>
@endsection