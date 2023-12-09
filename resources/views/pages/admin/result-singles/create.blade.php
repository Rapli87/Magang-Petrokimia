<!-- resources/views/pages/admin/result_singles/create.blade.php -->

@extends('layouts.admin')

@section('title', 'Tambah Hasil Pertandingan Single | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PGFC</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tambah Hasil Pertandingan Single</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Hasil Pertandingan Single</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('result-singles.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Tim 1 -->
                                    <div class="mb-3">
                                        <label for="team1_name" class="form-label">Nama Tim Home</label>
                                        <input type="text" class="form-control @error('team1_name') is-invalid @enderror"
                                            name="team1_name" placeholder="Nama Tim Home" value="{{ old('team1_name') }}">
                                        @error('team1_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_logo" class="form-label">Logo Tim Home</label>
                                        <input type="file" class="form-control @error('team1_logo') is-invalid @enderror"
                                            name="team1_logo">
                                        @error('team1_logo')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_score" class="form-label">Skor Tim Home</label>
                                        <input type="text"
                                            class="form-control @error('team1_score') is-invalid @enderror"
                                            name="team1_score" placeholder="Skor Tim Home"
                                            value="{{ old('team1_score') }}">
                                        @error('team1_score')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- pencetak gol tim1 sesuaikan nama kolom dengan yang ada di model--}}
                                    <div class="mb-3">
                                        <label for="team1_scorers" class="form-label">Pencetak Gol Tim Home</label>
                                        <br>
                                        <small>Tambahkan Menit Gol</small>
                                        <textarea
                                            class="form-control @error('team1_scorers') is-invalid @enderror"
                                            name="team1_scorers" placeholder="Pencetak Gol Tim Home">{{ old('team1_scorers') }}</textarea>
                                        @error('team1_scorers')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    {{-- menit gol tim1--}}
                                    {{-- <div class="mb-3">
                                        <label for="team1_scorers_minute" class="form-label">Menit Gol Tim Home</label>
                                        <textarea
                                            class="form-control @error('team1_scorers_minute') is-invalid @enderror"
                                            name="team1_scorers_minute" placeholder="Menit Gol Tim Home">{{ old('team1_scorers_minute') }}</textarea>
                                        @error('team1_scorers_minute')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    {{-- penalty tim1 --}}
                                    <div class="mb-3">
                                        <label for="team1_penalty" class="form-label">Penalty Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_penalty') is-invalid @enderror"
                                            name="team1_penalty" placeholder="Penalty Tim Home"
                                            value="{{ old('team1_penalty') }}">
                                        @error('team1_penalty')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- ball possession tim1--}}
                                    <div class="mb-3">
                                        <label for="team1_ball_possession" class="form-label">Ball Possession Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_ball_possession') is-invalid @enderror"
                                            name="team1_ball_possession" placeholder="Ball Possession Tim Home"
                                            value="{{ old('team1_ball_possession') }}">
                                        @error('team1_ball_possession')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- goals team1 --}}
                                    <div class="mb-3">
                                        <label for="team1_goals" class="form-label">Goals Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_goals') is-invalid @enderror"
                                            name="team1_goals" placeholder="Goals Tim Home"
                                            value="{{ old('team1_goals') }}">
                                        @error('team1_goals')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- shots on target team1 --}}
                                    <div class="mb-3">
                                        <label for="team1_shots_on_target" class="form-label">Shots on Target Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_shots_on_target') is-invalid @enderror"
                                            name="team1_shots_on_target" placeholder="Shots on Target Tim Home"
                                            value="{{ old('team1_shots_on_target') }}">
                                        @error('team1_shots_on_target')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- shots team1 --}}
                                    <div class="mb-3">
                                        <label for="team1_shots" class="form-label">Shots Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_shots') is-invalid @enderror"
                                            name="team1_shots" placeholder="Shots Tim Home"
                                            value="{{ old('team1_shots') }}">
                                        @error('team1_shots')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- saves tim1 --}}
                                    <div class="mb-3">
                                        <label for="team1_saves" class="form-label">Saves Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_saves') is-invalid @enderror"
                                            name="team1_saves" placeholder="Saves Tim Home"
                                            value="{{ old('team1_saves') }}">
                                        @error('team1_saves')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- team1_yellow_cards --}}
                                    <div class="mb-3">
                                        <label for="team1_yellow_cards" class="form-label">Yellow Cards Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_yellow_cards') is-invalid @enderror"
                                            name="team1_yellow_cards" placeholder="Yellow Cards Tim Home"
                                            value="{{ old('team1_yellow_cards') }}">
                                        @error('team1_yellow_cards')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> 

                                    {{-- team2_red_cards --}}
                                    <div class="mb-3">
                                        <label for="team2_red_cards" class="form-label">Red Cards Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_red_cards') is-invalid @enderror"
                                            name="team2_red_cards" placeholder="Red Cards Tim Away"
                                            value="{{ old('team2_red_cards') }}">
                                        @error('team2_red_cards')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Tim 2 -->
                                    <div class="mb-3">
                                        <label for="team2_name" class="form-label">Nama Tim Away</label>
                                        <input type="text" class="form-control @error('team2_name') is-invalid @enderror"
                                            name="team2_name" placeholder="Nama Tim Away"
                                            value="{{ old('team2_name') }}">
                                        @error('team2_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_logo" class="form-label">Logo Tim Away</label>
                                        <input type="file" class="form-control @error('team2_logo') is-invalid @enderror"
                                            name="team2_logo">
                                        @error('team2_logo')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_score" class="form-label">Skor Tim Away</label>
                                        <input type="text"
                                            class="form-control @error('team2_score') is-invalid @enderror"
                                            name="team2_score" placeholder="Skor Tim Away"
                                            value="{{ old('team2_score') }}">
                                        @error('team2_score')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    {{-- pencetak gol tim2 --}}
                                    <div class="mb-3">
                                        <label for="team2_scorers" class="form-label">Pencetak Gol Tim Away</label>
                                        <br>
                                        <small>Tambahkan Menit Gol</small>
                                        <textarea
                                            class="form-control @error('team2_scorers') is-invalid @enderror"
                                            name="team2_scorers" placeholder="Pencetak Gol Tim Away">{{ old('team2_scorers') }}</textarea>
                                        @error('team2_scorers')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- menit gol tim2 --}}
                                    {{-- <div class="mb-3">
                                        <label for="team2_scorers_minute" class="form-label">Menit Gol Tim Away</label>
                                        <textarea
                                            class="form-control @error('team2_scorers_minute') is-invalid @enderror"
                                            name="team2_scorers_minute" placeholder="Menit Gol Tim Away">{{ old('team2_scorers_minute') }}</textarea>
                                        @error('team2_scorers_minute')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    {{-- penalty tim2 --}}
                                    <div class="mb-3">
                                        <label for="team2_penalty" class="form-label">Penalty Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_penalty') is-invalid @enderror"
                                            name="team2_penalty" placeholder="Penalty Tim Away"
                                            value="{{ old('team2_penalty') }}">
                                        @error('team2_penalty')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- ball possession tim2 --}}
                                    <div class="mb-3">
                                        <label for="team2_ball_possession" class="form-label">Ball Possession Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_ball_possession') is-invalid @enderror"
                                            name="team2_ball_possession" placeholder="Ball Possession Tim Away"
                                            value="{{ old('team2_ball_possession') }}">
                                        @error('team2_ball_possession')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- goals team2 --}}
                                    <div class="mb-3">
                                        <label for="team2_goals" class="form-label">Goals Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_goals') is-invalid @enderror"
                                            name="team2_goals" placeholder="Goals Tim Away"
                                            value="{{ old('team2_goals') }}">
                                        @error('team2_goals')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- shots on target team2 --}}
                                    <div class="mb-3">
                                        <label for="team2_shots_on_target" class="form-label">Shots on Target Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_shots_on_target') is-invalid @enderror"
                                            name="team2_shots_on_target" placeholder="Shots on Target Tim Away"
                                            value="{{ old('team2_shots_on_target') }}">
                                        @error('team2_shots_on_target')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- shots team2 --}}
                                    <div class="mb-3">
                                        <label for="team2_shots" class="form-label">Shots Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_shots') is-invalid @enderror"
                                            name="team2_shots" placeholder="Shots Tim Away"
                                            value="{{ old('team2_shots') }}">
                                        @error('team2_shots')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- saves tim2 --}}
                                    <div class="mb-3">
                                        <label for="team2_saves" class="form-label">Saves Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_saves') is-invalid @enderror"
                                            name="team2_saves" placeholder="Saves Tim Away"
                                            value="{{ old('team2_saves') }}">
                                        @error('team2_saves')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- team2_yellow_cards --}}
                                    <div class="mb-3">
                                        <label for="team2_yellow_cards" class="form-label">Yellow Cards Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_yellow_cards') is-invalid @enderror"
                                            name="team2_yellow_cards" placeholder="Yellow Cards Tim Away"
                                            value="{{ old('team2_yellow_cards') }}">
                                        @error('team2_yellow_cards')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> 

                                    {{-- team2_red_cards --}}
                                    <div class="mb-3">
                                        <label for="team1_red_cards" class="form-label">Red Cards Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_red_cards') is-invalid @enderror"
                                            name="team1_red_cards" placeholder="Red Cards Tim Home"
                                            value="{{ old('team1_red_cards') }}">
                                        @error('team1_red_cards')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="match_date" class="form-label">Tanggal Pertandingan</label>
                                        <input type="datetime-local"
                                            class="form-control @error('match_date') is-invalid @enderror"
                                            name="match_date" placeholder="Tanggal Pertandingan"
                                            value="{{ old('match_date') }}">
                                        @error('match_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="match_venue" class="form-label">Venue</label>
                                        <input type="text" class="form-control @error('match_venue') is-invalid @enderror"
                                            name="match_venue" placeholder="Venue" value="{{ old('match_venue') }}">
                                        @error('match_venue')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- buat untuk round --}}
                                <div class="col-lg-6">
                                    {{-- <div class="mb-3">
                                        <label for="round" class="form-label">Round</label>
                                        <select class="form-control @error('round') is-invalid @enderror" name="round">
                                            <option value="Group A">Group A</option>
                                            <option value="Group B">Group B</option>
                                            <option value="Group C">Group C</option>
                                            <option value="Group D">Group D</option>
                                            <option value="Group E">Group E</option>
                                            <option value="Group F">Group F</option>
                                            <option value="Group G">Group G</option>
                                            <option value="Group H">Group H</option>
                                            <option value="16 Besar">16 Besar</option>
                                            <option value="8 Besar">8 Besar</option>
                                            <option value="Semi Final">Semi Final</option>
                                            <option value="Perebutan Juara 3 & 4">Perebutan Juara 3 & 4</option>
                                            <option value="Perebutan Juara 1 & 2">Perebutan Juara 1 & 2</option>
                                        </select>
                                        @error('round')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    <div class="mb-3">
                                        <label for="result_id" class="form-label">Result ID</label>
                                        <select class="form-control @error('result_id') is-invalid @enderror" name="result_id">
                                            <option value="" selected disabled>Select Result</option>
                                            @foreach($results as $result)
                                                <option value="{{ $result->id }}">{{ $result->round }} - {{ $result->team1_name }} vs {{ $result->team2_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('result_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>                                    
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
    @endsection
