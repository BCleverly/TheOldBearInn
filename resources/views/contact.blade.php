@extends('layouts.app')

@section('title', 'Contact')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Contact details</h1>
                <p>Pub landline: 01793 750005</p>
                <address>
                    The Old Bear Inn, <br>Cricklade, <br>Swindon, <br>Wilthsire, <br>SN6 6AA
                </address>
                @include('partials.opening-times')
            </div>
            <div class="col-md-6">
                <h2 class="title">How about a map</h2>
                <div id="gMaps" style="height:500px; margin-bottom:10px;"></div>
                <p>Parking is located to the back of the pub, accessable from Horse Fair Lane</p>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC99ZUx4a70QiqC1jHYQCy2Tgb0eopdg0&amp;sensor=true"></script>
    <script>
        function initialize() {
            var styles = [ { "stylers": [ { "visibility": "on" }, { "saturation": -100 }, { "gamma": 1 } ] },{ } ]

            var myLatlng = new google.maps.LatLng(51.641589, -1.855943);
            var mapOptions = {
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
                draggable: true,
                scrollwheel: false,
                center: myLatlng,
            };

            var map = new google.maps.Map(document.getElementById("gMaps"), mapOptions);
            map.setOptions({styles: styles});

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
            });

        }
        window.onload =initialize();
    </script>
@endsection