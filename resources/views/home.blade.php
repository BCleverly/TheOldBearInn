@extends('layouts.app')

@section('title', 'Homepage')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>About The Old Bear Inn</h2>
                <p>The Old Bear Inn is a friendly local pub conveniently located in delightful Cricklade, the first town on the Thames and close to all the local amenities that the Cotswolds and Swindon have to offer.</p>
            </div>
            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/assets/images/slide-01.jpg" alt="...">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="/assets/images/slide-02.jpg" alt="...">
                            <div class="carousel-caption"></div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @include('partials.opening-times')
            </div>
            <div class="col-md-6">
                @include('partials.room-prices')
            </div>
        </div>
    </div>
@endsection