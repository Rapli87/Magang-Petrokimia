@extends('layouts.admin')

@section('title', 'Detail Hasil Pertandingan Single| PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="{{ route('results.index') }}">Detail Hasil
                                            Pertandingan Single</a></li>
                                    <li class="breadcrumb-item active">Detail Hasil Pertandingan Single</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Detail Hasil Pertandingan Single</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="card-title">Team Home</h2>
                                <p><strong>Name:</strong> {{ $resultSingle->team1_name }}</p>
                                <p><strong>Score:</strong> {{ $resultSingle->team1_score }}</p>

                                {{-- Logo Tim --}}
                                @if ($resultSingle->team1_logo)
                                    <p><strong>Logo:</strong> <img src="{{ asset('storage/' . $resultSingle->team1_logo) }}"
                                            alt="Team Home Logo" class="img-fluid" width="100px"></p>
                                @else
                                    <p><strong>Logo:</strong> No logo available</p>
                                @endif

                                {{-- Pencetak Gol Tim 1 --}}
                                <p><strong>Scorers:</strong> {{ $resultSingle->team1_scorers ?: 'No scorers' }}</p>
                                <p><strong>Scorers Minutes:</strong>
                                    {{ $resultSingle->team1_scorers_minutes ?: 'No information' }}</p>
                                <p><strong>Penalty:</strong> {{ $resultSingle->team1_penalty }}</p>
                                <p><strong>Ball Possession:</strong> {{ $resultSingle->team1_ball_possession }}%</p>
                                <p><strong>Goals:</strong> {{ $resultSingle->team1_goals }}</p>
                                <p><strong>Shots on Target:</strong> {{ $resultSingle->team1_shots_on_target }}</p>
                                <p><strong>Shots:</strong> {{ $resultSingle->team1_shots }}</p>
                                <p><strong>Saves:</strong> {{ $resultSingle->team1_saves }}</p>
                                <p><strong>Yellow Cards:</strong> {{ $resultSingle->team1_yellow_cards }}</p>
                                <p><strong>Red Cards:</strong> {{ $resultSingle->team1_red_cards ?: 'No red cards' }}</p>
                                {{-- Tambahkan elemen desain lainnya sesuai kebutuhan --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="card-title">Team Away</h2>
                                <p><strong>Name:</strong> {{ $resultSingle->team2_name }}</p>
                                <p><strong>Score:</strong> {{ $resultSingle->team2_score }}</p>

                                {{-- Logo Tim 2 --}}
                                @if ($resultSingle->team2_logo)
                                    <p><strong>Logo:</strong> <img src="{{ asset('storage/' . $resultSingle->team2_logo) }}"
                                            alt="Team Away Logo" class="img-fluid" width="100px"></p>
                                @else
                                    <p><strong>Logo:</strong> No logo available</p>
                                @endif

                                {{-- Pencetak Gol Tim 2 --}}
                                <p><strong>Scorers:</strong> {{ $resultSingle->team2_scorers ?: 'No scorers' }}</p>
                                <p><strong>Scorers Minutes:</strong>
                                    {{ $resultSingle->team2_scorers_minutes ?: 'No information' }}</p>
                                <p><strong>Penalty:</strong> {{ $resultSingle->team2_penalty }}</p>
                                <p><strong>Ball Possession:</strong> {{ $resultSingle->team2_ball_possession }}%</p>
                                <p><strong>Goals:</strong> {{ $resultSingle->team2_goals }}</p>
                                <p><strong>Shots on Target:</strong> {{ $resultSingle->team2_shots_on_target }}</p>
                                <p><strong>Shots:</strong> {{ $resultSingle->team2_shots }}</p>
                                <p><strong>Saves:</strong> {{ $resultSingle->team2_saves }}</p>
                                <p><strong>Yellow Cards:</strong> {{ $resultSingle->team2_yellow_cards }}</p>
                                <p><strong>Red Cards:</strong> {{ $resultSingle->team2_red_cards ?: 'No red cards' }}</p>
                                {{-- Tambahkan elemen desain lainnya sesuai kebutuhan --}}
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Details</h2>
                                <p><strong>Result ID:</strong> {{ $resultSingle->result_id }}</p>
                                <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                            </div>
                        </div>
                    </div>
                </div>


                <hr>

                <!-- Tambah bagian lainnya sesuai kebutuhan -->
            </div>
        </div>
        {{-- </div> --}}

    @endsection
