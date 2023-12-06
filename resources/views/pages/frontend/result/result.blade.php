@extends('layouts.app')
@section('title', 'Result')

@section('content')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="frontend/images/breadcrumbs/point-table.jpg" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Result</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li>Result</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->


    <!-- Point Table Section Start -->
    <div class="rs-result sec-spacer">
        <div class="container">
            <ul class="point-menu text-center">
                {{-- Urutan Tab --}}
                @php
                    $tabOrder = ['Group A', 'Group B', 'Group C', 'Group D', 'Group E', 'Group F', 'Group G', 'Group H', '16 Besar', '8 Besar', 'Semi Final', 'Perebutan Juara 3 & 4', 'Perebutan Juara 1 & 2'];
                @endphp

                @foreach ($tabOrder as $tab)
                    <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab"
                            href="#{{ \Illuminate\Support\Str::slug($tab) }}">{{ $tab }}</a></li>
                @endforeach
            </ul>

            <div class="tab-content team-result">
                <div class="overly-bg"></div>

                {{-- Menyesuaikan Urutan Konten Tab --}}
                @foreach ($tabOrder as $tab)
                    <div id="{{ \Illuminate\Support\Str::slug($tab) }}"
                        class="tab-pane fade {{ $loop->first ? 'in active' : '' }}">
                        <table>
                            @foreach ($results->where('round', $tab) as $match)
                                <tr class="single-result">
                                    <td class="team-name team1 text-center">
                                        <img class="result-img" src="{{ asset('storage/' . $match->team1_logo) }}">
                                        {{ $match->team1_name }}
                                    </td>
                                    <td class="text-center match-result">
                                        <span class="match-score">{{ $match->team1_score }} :
                                            {{ $match->team2_score }}</span>
                                    </td>
                                    <td class="team-name team2 text-center">
                                        {{ $match->team2_name }}
                                        <img class="result-img" src="{{ asset('storage/' . $match->team2_logo) }}">
                                    </td>
                                    <td class="match-venu text-center">
                                        {{-- <span class="match-date">{{ $match->match_date->format('d F Y H:i') }}</span> --}}
                                        {{-- <span
                                            class="match-date">{{ \Carbon\Carbon::parse($match->match_date)->format('d F Y H:i') }}</span> --}}
                                        <span
                                            class="match-date">{{ \Carbon\Carbon::parse($match->match_datey)->setTimezone('Asia/Jakarta')->isoFormat('dddd, DD MMMM YYYY HH:mm [WIB]') }}</span>
                                        <span class="match-date">{{ $match->match_venue }}</span>
                                    </td>
                                    <td class="view-statictics text-center">
                                        <a href="{{ route('pages.result-single') }}">View Statictics >></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
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
