<!-- resources/views/pages/admin/result_singles/edit.blade.php -->

@extends('layouts.admin')

@section('title', 'Edit Hasil Pertandingan Single | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Hasil Pertandingan
                                            Single</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Hasil Pertandingan Single</h4>
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
                        <form action="{{ route('result-singles.update', $resultSingle->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!-- Sisipkan kembali kolom-kolom seperti pada form create -->
                                <!-- ... -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="team1_name" class="form-label">Nama Tim Home</label>
                                        <input type="text" class="form-control @error('team1_name') is-invalid @enderror"
                                            name="team1_name" placeholder="Nama Tim Home"
                                            value="{{ old('team1_name', $resultSingle->team1_name) }}">
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

                                        @if ($resultSingle->team1_logo)
                                            <div class="mt-2">
                                                <small><b>Gambar Lama :</b></small><br>
                                                <img src="{{ asset('storage/' . $resultSingle->team1_logo) }}"
                                                    alt="{{ $resultSingle->team1_name }}" class="img-thumbnail img-preview"
                                                    width="100px">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_score" class="form-label">Skor Tim Home</label>
                                        <input type="text"
                                            class="form-control @error('team1_score') is-invalid @enderror"
                                            name="team1_score" placeholder="Skor Tim Home"
                                            value="{{ old('team1_score', $resultSingle->team1_score) }}">
                                        @error('team1_score')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_scorers" class="form-label">Pencetak Gol Tim Home</label>
                                        <br>
                                        <small>Tambahkan Menit Gol</small>
                                        <textarea class="form-control @error('team1_scorers') is-invalid @enderror" name="team1_scorers"
                                            placeholder="Pencetak Gol Tim Home">{{ old('team1_scorers', $resultSingle->team1_scorers) }}</textarea>
                                        @error('team1_scorers')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label for="team1_scorers_minutes" class="form-label">Menit Gol Tim Away</label>
                                        <textarea
                                            class="form-control @error('team1_scorers_minutes') is-invalid @enderror"
                                            name="team1_scorers_minutes" placeholder="Menit Gol Tim Home">{{ old('team1_scorers_minutes', $resultSingle->team1_scorers_minutes) }}</textarea>
                                        @error('team1_scorers_minutes')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    <div class="mb-3">
                                        <label for="team1_penalty" class="form-label">Penalty Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_penalty') is-invalid @enderror"
                                            name="team1_penalty" placeholder="Penalty Tim Home"
                                            value="{{ old('team1_penalty', $resultSingle->team1_penalty) }}">
                                        @error('team1_penalty')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_ball_possession" class="form-label">Ball Possession Tim
                                            Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_ball_possession') is-invalid @enderror"
                                            name="team1_ball_possession" placeholder="Ball Possession Tim Home"
                                            value="{{ old('team1_ball_possession', $resultSingle->team1_ball_possession) }}">
                                        @error('team1_ball_possession')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_goals" class="form-label">Goals Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_goals') is-invalid @enderror"
                                            name="team1_goals" placeholder="Goals Tim Home"
                                            value="{{ old('team1_goals', $resultSingle->team1_goals) }}">
                                        @error('team1_goals')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_shots_on_target" class="form-label">Shots on Target Tim
                                            Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_shots_on_target') is-invalid @enderror"
                                            name="team1_shots_on_target" placeholder="Shots on Target Tim Home"
                                            value="{{ old('team1_shots_on_target', $resultSingle->team1_shots_on_target) }}">
                                        @error('team1_shots_on_target')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_shots" class="form-label">Shots Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_shots') is-invalid @enderror"
                                            name="team1_shots" placeholder="Shots Tim Home"
                                            value="{{ old('team1_shots', $resultSingle->team1_shots) }}">
                                        @error('team1_shots')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_saves" class="form-label">Saves Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_saves') is-invalid @enderror"
                                            name="team1_saves" placeholder="Saves Tim Home"
                                            value="{{ old('team1_saves', $resultSingle->team1_saves) }}">
                                        @error('team1_saves')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team1_yellow_cards" class="form-label">Yellow Cards Tim Home</label>
                                        <input type="number"
                                            class="form-control @error('team1_yellow_cards') is-invalid @enderror"
                                            name="team1_yellow_cards" placeholder="Yellow Cards Tim Home"
                                            value="{{ old('team1_yellow_cards', $resultSingle->team1_yellow_cards) }}">
                                        @error('team1_yellow_cards')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_red_cards" class="form-label">Red Cards Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_red_cards') is-invalid @enderror"
                                            name="team2_red_cards" placeholder="Red Cards Tim Away"
                                            value="{{ old('team2_red_cards', $resultSingle->team2_red_cards) }}">
                                        @error('team2_red_cards')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="team2_name" class="form-label">Nama Tim Away</label>
                                        <input type="text"
                                            class="form-control @error('team2_name') is-invalid @enderror"
                                            name="team2_name" placeholder="Nama Tim Away"
                                            value="{{ old('team2_name', $resultSingle->team2_name) }}">
                                        @error('team2_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_logo" class="form-label">Logo Tim Away</label>
                                        <input type="file"
                                            class="form-control @error('team2_logo') is-invalid @enderror"
                                            name="team2_logo">
                                        @error('team2_logo')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        @if ($resultSingle->team2_logo)
                                            <div class="mt-2">
                                                <small><b>Gambar Lama :</b></small><br>
                                                <img src="{{ asset('storage/' . $resultSingle->team2_logo) }}"
                                                    alt="{{ $resultSingle->team2_name }}"
                                                    class="img-thumbnail img-preview" width="100px">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_score" class="form-label">Skor Tim Away</label>
                                        <input type="text"
                                            class="form-control @error('team2_score') is-invalid @enderror"
                                            name="team2_score" placeholder="Skor Tim Away"
                                            value="{{ old('team2_score', $resultSingle->team2_score) }}">
                                        @error('team2_score')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_scorers" class="form-label">Pencetak Gol Tim Home</label>
                                        <br>
                                        <small>Tambahkan Menit Gol</small>
                                        <textarea class="form-control @error('team2_scorers') is-invalid @enderror" name="team2_scorers"
                                            placeholder="Pencetak Gol Tim Home">{{ old('team2_scorers', $resultSingle->team2_scorers) }}</textarea>
                                        @error('team2_scorers')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label for="team2_scorers_minutes" class="form-label">Menit Gol Tim Away</label>
                                        <textarea
                                            class="form-control @error('team2_scorers_minutes') is-invalid @enderror"
                                            name="team2_scorers_minutes" placeholder="Menit Gol Tim Away">{{ old('team2_scorers_minutes', $resultSingle->team2_scorers_minutes) }}</textarea>
                                        @error('team2_scorers_minutes')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    <div class="mb-3">
                                        <label for="team2_penalty" class="form-label">Penalty Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_penalty') is-invalid @enderror"
                                            name="team2_penalty" placeholder="Penalty Tim Away"
                                            value="{{ old('team2_penalty', $resultSingle->team2_penalty) }}">
                                        @error('team2_penalty')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_ball_possession" class="form-label">Ball Possession Tim
                                            Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_ball_possession') is-invalid @enderror"
                                            name="team2_ball_possession" placeholder="Ball Possession Tim Away"
                                            value="{{ old('team2_ball_possession', $resultSingle->team2_ball_possession) }}">
                                        @error('team2_ball_possession')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_goals" class="form-label">Goals Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_goals') is-invalid @enderror"
                                            name="team2_goals" placeholder="Goals Tim Away"
                                            value="{{ old('team2_goals', $resultSingle->team2_goals) }}">
                                        @error('team2_goals')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_shots_on_target" class="form-label">Shots on Target Tim
                                            Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_shots_on_target') is-invalid @enderror"
                                            name="team2_shots_on_target" placeholder="Shots on Target Tim Away"
                                            value="{{ old('team2_shots_on_target', $resultSingle->team2_shots_on_target) }}">
                                        @error('team2_shots_on_target')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_shots" class="form-label">Shots Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_shots') is-invalid @enderror"
                                            name="team2_shots" placeholder="Shots Tim Away"
                                            value="{{ old('team2_shots', $resultSingle->team2_shots) }}">
                                        @error('team2_shots')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_saves" class="form-label">Saves Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_saves') is-invalid @enderror"
                                            name="team2_saves" placeholder="Saves Tim Away"
                                            value="{{ old('team2_saves', $resultSingle->team2_saves) }}">
                                        @error('team2_saves')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_yellow_cards" class="form-label">Yellow Cards Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_yellow_cards') is-invalid @enderror"
                                            name="team2_yellow_cards" placeholder="Yellow Cards Tim Away"
                                            value="{{ old('team2_yellow_cards', $resultSingle->team2_yellow_cards) }}">
                                        @error('team2_yellow_cards')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="team2_red_cards" class="form-label">Red Cards Tim Away</label>
                                        <input type="number"
                                            class="form-control @error('team2_red_cards') is-invalid @enderror"
                                            name="team2_red_cards" placeholder="Red Cards Tim Away"
                                            value="{{ old('team2_red_cards', $resultSingle->team2_red_cards) }}">
                                        @error('team2_red_cards')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="result_id" class="form-label">Result ID</label>
                                        <select class="form-control @error('result_id') is-invalid @enderror"
                                            name="result_id">
                                            <option value="" selected disabled>Select Result</option>
                                            @foreach ($results as $result)
                                                <option value="{{ $result->id }}"
                                                    {{ old('result_id', $resultSingle->result_id) == $result->id ? 'selected' : '' }}>
                                                    {{ $result->round }} - {{ $result->team1_name }} vs
                                                    {{ $result->team2_name }}
                                                </option>
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

                            <button type="submit" class="btn btn-primary">Update</button>
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
