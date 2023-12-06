@extends('layouts.app')
@section('title', 'Competition')

@section('content')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="frontend/images/breadcrumbs/point-table.jpg" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">PGFC Competition 2023</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li>PGFC Competition 2023</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Point Table Section Start -->
    <div class="world-cup-page sec-spacer">
        <div class="container">
            <h3>Group List</h3>

            <div class="match-summary text-center list-one">
                <table>
                    <tr>
                        @foreach ($groupedKlasemen->take(4) as $group => $klasemens)
                            <td>Group {{ $group }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($groupedKlasemen->take(4) as $group => $klasemens)
                            <td>
                                @foreach ($klasemens as $klasemen)
                                    <p>{{ $klasemen->team_name }}</p>
                                @endforeach
                            </td>
                        @endforeach
                    </tr>
                </table>
            </div>

            <div class="match-summary text-center list-two">
                <table>
                    <tr>
                        @foreach ($groupedKlasemen->slice(4) as $group => $klasemens)
                            <td>Group {{ $group }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($groupedKlasemen->slice(4) as $group => $klasemens)
                            <td>
                                @foreach ($klasemens as $klasemen)
                                    <p>{{ $klasemen->team_name }}</p>
                                @endforeach
                            </td>
                        @endforeach
                    </tr>
                </table>
            </div>
            <h3>Match Fixtures</h3>
            <div class="match-summary text-center list-three">
                <table>
                    <tr>
                        <td>Tanggal</td>
                        <td>No Pertandingan</td>
                        <td>Pertandingan</td>
                        <td>Waktu</td>
                        <td>Tempat</td>
                    </tr>

                    @foreach ($groupedCompetitions as $round => $roundCompetitions)
                        <tr class="full-area">
                            <td>{{ $round }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        @foreach ($roundCompetitions as $competition)
                            <tr>
                                {{-- <td>{{ \Carbon\Carbon::parse($competition->date)->format('d F Y') }}</td>
                                <td>{{ $competition->match_number }}</td>
                                <td>{{ $competition->match }}</td>
                                <td>{{ \Carbon\Carbon::parse($competition->time)->format('H:i') }} WIB</td>
                                <td>{{ $competition->location }}</td> --}}
                                <td>{{ $competition->date ?: '-' }}</td>
                                <td>{{ $competition->match_number ?: '-' }}</td>
                                <td>{{ $competition->match ?: '-' }}</td>
                                <td>{{ $competition->time ? \Carbon\Carbon::parse($competition->time)->format('H:i') . ' WIB' : '-' }}
                                </td>
                                <td>{{ $competition->location ?: '-' }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- Point Table Section End -->

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
