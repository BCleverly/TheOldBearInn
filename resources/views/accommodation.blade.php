@extends('layouts.app')

@section('title', 'Accommodation')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title">Bed and Breakfast rooms</h2>
                <p>The accommodation is located in a converted barn. For breakfast, you can have a traditional English, continental or vegetarian breakfast upon request. All breakfasts come with handcrafted artisan bread.</p>
                <p>The car park is located at the rear of the pub. There is also a courtyard where you will be able sit and enjoy the weather during the summer months.</p>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/assets/images/gallery/accom/room1/DSC0023.jpg" alt="Room one">
                        </div>
                        <div class="item">
                            <img src="/assets/images/gallery/accom/room1/DSC0041.jpg" alt="Room one">
                        </div>
                        <div class="item">
                            <img src="/assets/images/gallery/accom/room2/DSC0065.jpg" alt="Room two">
                        </div>
                        <div class="item">
                            <img src="/assets/images/gallery/accom/room2/DSC0073.jpg" alt="Room two">
                        </div>
                        <div class="item">
                            <img src="/assets/images/gallery/accom/room3/DSC0181.jpg" alt="Room three">
                        </div>
                        <div class="item">
                            <img src="/assets/images/gallery/accom/room3/DSC0193.jpg" alt="Room three">
                        </div>
                        <div class="item">
                            <img src="/assets/images/gallery/accom/room4/DSC0118.jpg" alt="Room four">
                        </div>
                        <div class="item">
                            <img src="/assets/images/gallery/accom/room5/DSC0139.jpg" alt="Room five">
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
                @include('partials.room-prices')
            </div>
            <div class="col-md-6">
                <h2>Extra details</h2>
                <p>If you are looking to stay for extended periods of time, please call us on 01793 750005 to see what special rates can be arranged for you.</p>
            </div>
        </div>
    </div>
@endsection