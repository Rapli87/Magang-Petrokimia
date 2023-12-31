@extends('layouts.app')
@section('title', 'PGFC')

@section('content')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="frontend/images/full-slider/slide4.jpg" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">About PGFC</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li>About PGFC</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Point Table Section Start -->
    <div class="champion-section-area sec-spacer">
        <div class="container">
            <div class="row pb-50">
                <div class="col-md-1 col-sm-1">
                    <div class="club-sidebar-top">
                        <div class="club-logo">
                            <img src="frontend/images/logo-pgfc.png" alt="logo">
                            <div class="club-name">
                                <h2 class="title-bg"></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="title-bg">Tentang PGFC</h3>
                            <p>PGFC adalah singkatan dari Petrokimia Gresik Futsal Championship merupakan sebuah
                                turnamen futsal antar SMA/SMK sederajat di kabupaten Gresik yang diselengarakan oleh PT.
                                Petrokimia Gresik. PGFC bermula pada tahun 2014 dengan nama PGFC (Petrogres Student
                                Futsal Championship) yang diikuti 8 sekolah dengan SMAN 1 Manyar sebagai juaranya,
                                kemudian pada tahun 2015 diikuti oleh 16 sekolah, dengan SMAN 1 Manyar kembali menjadi
                                Juaranya. Dan pada tahun 2016 berganti nama menjadi PGFC (Petrokimia Gresik Futsal
                                Championship).</p>
                            <ul class="point-menu">
                                <li class="active"><a data-toggle="tab" href="#timeline-list">Timeline</a></li>
                                <li><a data-toggle="tab" href="#gallery">Gallery</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="timeline-list" class="tab-pane fade in active">
                                    <!-- Squad Style Start -->
                                    <div class="timeline-list">
                                        <div class="list-item">
                                            <div class="image">
                                                <h2>Image</h2>
                                            </div>
                                            <div class="list-text">
                                                <div class="name">
                                                    <h2>Date</h2>
                                                </div>
                                                <div class="designation">
                                                    <h2>Description</h2>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach ($timelines as $timeline)
                                            <div class="list-item">
                                                <div class="image">
                                                    <img src="{{ asset($timeline->image_timeline) }}"
                                                        alt="{{ $timeline->title_timeline }}">
                                                </div>
                                                <div class="list-text">
                                                    <div class="name">
                                                        {{-- <h4>{{ \Carbon\Carbon::parse($timeline->date_timeline)->isoFormat('DD MMMM YYYY') }}
                                                        </h4> --}}
                                                        <h4>{{ \Carbon\Carbon::parse($timeline->date_timeline)->isoFormat('dddd, DD MMMM YYYY') }}</h4>
                                                    </div>
                                                    <div class="designation">
                                                        <p>{{ $timeline->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <!--Squad Style End -->
                                <div id="gallery" class="tab-pane fade">
                                    <div class="gallery-section-page2 gallery-section-area">
                                        <div class="row">
                                            @foreach ($galleries as $gallery)
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <div class="single-gallery">
                                                        <img src="{{ asset($gallery->image) }}" alt="">
                                                        <div class="popup-icon">
                                                            <a class="image-popup"
                                                                href="{{ asset($gallery->image) }}"><i
                                                                    class="fa fa-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Point Table Section End -->

    <!-- Testimonials Sections Start Here-->
    @include('includes.frontend.testimonials')
    <!-- Testimonials Sections End Here-->

@endsection

@push('prepend-style')
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in tde root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/logo-pgfc.png">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-main.css') }}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-transitions.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ url('frontend/css/hover-min.css') }}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="frontend/js/modernizr-2.8.3.min.js"></script>
@endpush

@push('addon-script')
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ url('frontend/js/rsmenu-main.js') }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ url('frontend/js/jquery-ui.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ url('frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- wow js -->
    <script src="{{ url('frontend/js/wow.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ url('frontend/js/slick.min.js') }}"></script>
    <!-- masonry js -->
    <script src="{{ url('frontend/js/masonry.js') }}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{ url('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('frontend/js/time-circle.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js') }}"></script>
@endpush
