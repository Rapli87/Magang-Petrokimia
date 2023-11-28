@extends('layouts.admin')

@section('title', 'Tambah Hasil Pertandingan | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tambah Hasil Pertandingan</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Hasil Pertandingan </h4>
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
                        <form action="{{ route('results.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <div class="mb-3">
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
                                    </div>
                                </div>

                                {{-- buat untuk status --}}
                                  {{-- <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-control @error('status') is-invalid @enderror" name="status">
                                            <option value="0">Belum Dimulai</option>
                                            <option value="1">Sedang Berlangsung</option>
                                            <option value="2">Selesai</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> 
                                </div>  --}}
                                
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
