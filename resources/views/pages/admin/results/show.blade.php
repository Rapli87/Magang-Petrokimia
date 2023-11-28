@extends('layouts.admin')

@section('title', 'Detail Hasil Pertandingan | PGFC Admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">PGFC</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('results.index') }}">Hasil Pertandingan</a></li>
                                    <li class="breadcrumb-item active">Detail Hasil Pertandingan</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Detail Hasil Pertandingan</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="mb-3">Detail Pertandingan</h5>

                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Round:</strong> {{ $result->round }}</li>
                                    <li class="list-group-item"><strong>Tanggal Pertandingan:</strong> {{ $result->match_date }}</li>
                                    <li class="list-group-item"><strong>Venue:</strong> {{ $result->match_venue }}</li>
                                    {{-- <li class="list-group-item"><strong>Status:</strong> {{ $result->formatted_status }}</li> --}}
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <h5 class="mb-3">Tim</h5>

                                <div class="mb-3">
                                    <strong>Tim Home:</strong> {{ $result->team1_name }} <br>
                                    <strong>Skor Tim Home:</strong> {{ $result->team1_score }} <br>
                                    <img src="{{ asset('storage/' . $result->team1_logo) }}" alt="{{ $result->team1_name }}" class="img-thumbnail" width="100px">
                                </div>

                                <div class="mb-3">
                                    <strong>Tim Away:</strong> {{ $result->team2_name }} <br>
                                    <strong>Skor Tim Away:</strong> {{ $result->team2_score }} <br>
                                    <img src="{{ asset('storage/' . $result->team2_logo) }}" alt="{{ $result->team2_name }}" class="img-thumbnail" width="100px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Konten --}}
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
@endsection
