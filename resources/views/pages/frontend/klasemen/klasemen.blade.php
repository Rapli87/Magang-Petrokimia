@extends('layouts.app')
@section('title', 'Klasemen')

@section('content')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="frontend/images/breadcrumbs/point-table.jpg" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Klasemen</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li>Klasemen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->


    <!-- Klasmen Section Start -->
    <div class="rs-point-table sec-spacer">
        <div class="container">
            <ul class="point-menu">
                @foreach ($klasemens->groupBy('group') as $group => $klasemenGroup)
                    <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab" href="#{{ $group }}">Group
                            {{ $group }}</a></li>
                @endforeach
            </ul>

            <div class="tab-content">
                @foreach ($klasemens->groupBy('group') as $group => $klasemenGroup)
                <div id="{{ $group }}" class="tab-pane fade {{ $loop->first ? 'in active' : '' }}">
                        <table>
                            <tr>
                                <td>Peringkat</td>
                                <td class="team-name">Nama Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GM</td>
                                <td>GK</td>
                                <td>GD</td>
                                <td>Point</td>
                            </tr>
                            <!-- Set ulang peringkat untuk grup baru -->
                            @php
                                $currentRank = 0;
                            @endphp
                            @foreach ($klasemenGroup as $klasemen)
                                <tr>
                                    <td>{{ ++$currentRank }}</td>
                                    <td class="team-name">{{ $klasemen->team_name }}</td>
                                    <td>{{ $klasemen->played }}</td>
                                    <td>{{ $klasemen->won }}</td>
                                    <td>{{ $klasemen->drawn }}</td>
                                    <td>{{ $klasemen->lost }}</td>
                                    <td>{{ $klasemen->goals_for }}</td>
                                    <td>{{ $klasemen->goals_against }}</td>
                                    <td>{{ $klasemen->goal_difference }}</td>
                                    <td>{{ $klasemen->points }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Klasmen Section End -->

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
    <script src="{{ url('frontend/js/modernizr-2.8.3.min.js') }}"></script>
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
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js') }}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ url('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('frontend/js/waypoints.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js') }}"></script>
@endpush
